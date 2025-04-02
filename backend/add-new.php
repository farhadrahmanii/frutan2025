<?php
session_start();
if (isset($_SESSION['user_id'])) {
} else {
    header('location:index.php');
}
?>
<?php require_once './header.php'; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
            <div class="container-fluid">
                <div class="page-header-content">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                        <span>Try Creating New Post</span>
                    </h1>
                </div>
            </div>
        </div>

        <!--Start Form-->
        <div class="container-fluid mt-n10">
            <div class="alert alert-secondary"><strong>Please Separate! </strong> The Header Title With ( - ) Symbole
            </div>
            <div class="card mb-4">
                <div class="card-header">Create New Post</div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $conn = conn();
                        $title = trim($_POST['title']);
                        $content = trim($_POST['content']);
                        $status = trim($_POST['status']);

                        // Image Uploader is Stated
                        $img = $_FILES['img']['name'];
                        $img = str_replace(' ', '', $img); // Remove spaces from the image name
                    
                        // Ensure the directory exists
                        if (!is_dir('assets/img')) {
                            mkdir('assets/img', 0777, true);
                        }

                        $from = $_FILES['img']['tmp_name'];
                        $to = 'assets/img/' . $img;
                        if (move_uploaded_file($from, $to)) {
                            $category = trim($_POST['category']);
                            $tags = trim($_POST['tag']);

                            $sql = 'INSERT INTO posts (title, content, category, img, tag, date_issue, author, status) 
                VALUES (:title, :content, :category, :img, :tag, :date_issue, :author, :status)';

                            $stmt = $conn->prepare($sql);
                            $stmt->execute([
                                ':title' => $title,
                                ':content' => $content,
                                ':category' => $category,
                                ':img' => $img,
                                ':tag' => $tags,
                                ':date_issue' => date('Y-m-d H:i:s'),
                                ':author' => 'Alibaba',
                                ':status' => $status,
                            ]);

                            echo '<div class="alert alert-success">Post successfully created!</div>';
                        } else {
                            echo '<div class="alert alert-danger">Failed to upload image. Please try again.</div>';
                        }

                        var_dump($_POST);
                    }
                    ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="post-title">Post Title:</label>
                            <input class="form-control" id="post-title" name="title" type="text"
                                placeholder="Post title ..." />
                        </div>
                        <div class="form-group">
                            <label for="post-status">Post Status:</label>
                            <select class="form-control" name="status" id="post-status">
                                <option value="publish">Published</option>
                                <option value="pendding">Draft</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="select-category">Select Category:</label>

                            <select class="form-control" name="category" id="select-category">
                                <?php
                                $categorySql = 'SELECT * FROM category';
                                $stt = $conn->prepare($categorySql);
                                $stt->execute();
                                while (
                                    $rows = $stt->fetch(PDO::FETCH_ASSOC)
                                ) { ?>
                                    <option value="<?php echo $rows[
                                        'name'
                                    ]; ?>"><?php echo $rows['name']; ?></option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="post-title">Choose photo:</label>
                            <input class="form-control" name="img" accept="image/*" id="post-title" type="file" />
                        </div>

                        <div class="form-group">
                            <label for="post-content">Post Details:</label>
                            <textarea class="form-control" name="content" placeholder="Type here..." id="post-content"
                                rows="9"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="post-tags">Post Tags:</label>
                            <textarea class="form-control" placeholder="Tags..." name="tag" id="post-tags"
                                rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary mr-2 my-1" type="submit" name="submit">Submit now</button>
                    </form>
                </div>
            </div>
        </div>
        <!--End Form-->

    </main>

    <!--start footer-->
    <?php require_once './footer.php'; ?>