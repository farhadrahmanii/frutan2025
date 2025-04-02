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
                                <span>Try Updating Post</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Update Post</div>
                        <div class="card-body">
                            <?php
                            $post_id = $_GET['id'];
                            $sql = 'SELECT * FROM posts WHERE id = :id';
                            $stmtEdit = conn()->prepare($sql);
                            $stmtEdit->execute([
                                ':id' => $post_id,
                            ]);
                            $rowsEd = $stmtEdit->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <!-- --------------------------------------------------------Started Edit Scripts -->
                            <?php if (isset($_POST['editBtn'])) {
                                $name = $_POST['name'];
                                $status = $_POST['status'];
                                $category = $_POST['category'];
                                $content = $_POST['content'];
                                $tag = $_POST['tag'];
                                // Started Image Uploading
                                $img = $_FILES['img']['name'];
                                $from = $_FILES['img']['tmp_name'];
                                mkdir('./assets/img/' . $rowsEd['title']);
                                $to =
                                    './assets/img/' .
                                    $rowsEd['title'] .
                                    '/' .
                                    $img;
                                move_uploaded_file($from, $to);
                                $sqlEdit = "UPDATE posts SET title = :title, content=:content, category=:category, img=:img, tag=:tag, status=:status WHERE id=$post_id";
                                $stmtEdit = conn()->prepare($sqlEdit);
                                $stmtEdit->execute([
                                    ':title' => $name,
                                    ':content' => $content,
                                    ':category' => $category,
                                    ':img' => $img,
                                    ':status' => $status,
                                    ':tag' => $tag,
                                ]);
                            } ?>
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="post-title">Post Title:</label>
                                    <input class="form-control" id="post-title" type="text" name="name" value="<?php echo $rowsEd[
                                        'title'
                                    ]; ?>"
                                        placeholder="Post title ..." />
                                </div>
                                <div class="form-group">
                                    <label for="post-status">Post Status:</label>
                                    <select class="form-control" name="status" id="post-status">
                                        <option value="publish">Published</option>
                                        <option value="pendding" >Draft</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="select-category">Select Category:</label>
                                    <?php
                                    $sqlCat = 'SELECT * FROM category';
                                    $stmtC = conn()->prepare($sqlCat);
                                    $stmtC->execute();
                                    ?>
                                    <select class="form-control" name="category" id="select-category">
                                        <?php while (
                                            $rowCa = $stmtC->fetch(
                                                PDO::FETCH_ASSOC
                                            )
                                        ) { ?>
                                        <option value="<?php echo $rowCa[
                                            'name'
                                        ]; ?>" <?php echo $rowCa['name'] ==
$rowsEd['category']
    ? 'selected'
    : $rowCa['name']; ?> ><?php echo $rowCa['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <img src="assets/img/<?php echo $rowsEd[
                                        'title'
                                    ]; ?>/<?php echo $rowsEd[
    'img'
]; ?>" width="100px" height="100px" />
                                    <label for="post-title">Choose photo:</label>
                                    <input class="form-control" id="post-title" name="img" type="file" />
                                </div>

                                <div class="form-group">
                                    <label for="post-content">Post Details:</label>
                                    <textarea class="form-control"  placeholder="Type here..." name="content" id="post-content"
                                        rows="9"><?php echo $rowsEd[
                                            'content'
                                        ]; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="post-tags">Post Tags:</label>
                                    <textarea class="form-control" placeholder="Tags..." name="tag" id="post-tags"
                                        rows="3" ><?php echo $rowsEd[
                                            'tag'
                                        ]; ?></textarea>
                                </div>
                                <button class="btn btn-primary mr-2 my-1" type="submit" name="editBtn" >Submit now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Table-->

            </main>

            <!--start footer-->
            <?php require_once './footer.php'; ?>
