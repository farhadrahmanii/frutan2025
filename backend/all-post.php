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
                        <div class="page-header-icon"><i data-feather="layout"></i></div>
                        <span>All Posts</span>
                    </h1>
                </div>
            </div>
        </div>

        <!--Start Table-->
        <div class="container-fluid mt-n10">
            <div class="card mb-4">
                <div class="card-header">All Posts</div>
                <div class="card-body">
                    <div class="datatable table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Tags</th>
                                    <th>Status</th>
                                    <th>Views</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Details</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Tags</th>
                                    <th>Status</th>
                                    <th>Views</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $postList = fetchPost();
                                $num = 0;
                                foreach ($postList as $rows) {
                                    $num++; ?>
                                    <tr>
                                        <td><?php echo $num; ?></td>
                                        <td><?php echo $rows['id']; ?></td>
                                        <td><img src="assets/img/<?php echo $rows[
                                            'img'
                                        ]; ?>" alt="<?php echo $rows[
                                             'img'
                                         ]; ?>" class="rounded" style="width: 100px;height: 100px;"></td>
                                        <td>
                                            <a href="#"><?php echo $rows[
                                                'title'
                                            ]; ?></a>
                                        </td>
                                        <td><?php echo substr(
                                            $rows['content'],
                                            1,
                                            40
                                        ); ?></td>
                                        <td><?php echo $rows['author']; ?></td>
                                        <td><?php echo $rows['tag']; ?></td>
                                        <td><?php echo $rows['date_issue']; ?></td>

                                        <td>
                                            <a href="comments.html">2</a>
                                        </td>
                                        <td>
                                            <div class="badge badge-success"><?php echo $rows[
                                                'status'
                                            ]; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="badge badge-success">243
                                            </div>
                                        </td>
                                        <td>
                                            <a href="edit-post.php?id=<?php echo $rows[
                                                'id'
                                            ]; ?>">
                                                <button class="btn btn-blue btn-icon" name="editBtn"><i
                                                        data-feather="edit"></i></button>
                                            </a>
                                        </td>
                                        <td>
                                            <?php if (isset($_POST['deletePost'])) {
                                                $deletID = $_POST['deleteId'];
                                                deletePost($deletID);
                                            } ?>
                                            <form method="post">
                                                <input type="hidden" name="deleteId" value="<?php echo $rows[
                                                    'id'
                                                ]; ?>">
                                                <button class="btn btn-red btn-icon" name="deletePost"><i
                                                        data-feather="trash-2"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End Table-->

    </main>

    <!--start footer-->
    <?php require_once './footer.php'; ?>