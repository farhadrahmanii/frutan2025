<?php
session_start();
if (isset($_SESSION['user_id'])) {
} else {
    header('location:index.php');
}
?>
<?php require_once './header.php'; ?>
<?php require_once './inc/db.php'; ?>
<div id="layoutSidenav_content">
    <main>
        <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
            <div class="container-fluid">
                <div class="page-header-content">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="mail"></i></div>
                        <span>Messages</span>
                    </h1>
                </div>
            </div>
        </div>
        <!--Start Table-->
        <div class="container-fluid mt-n10">
            <div class="card mb-4">
                <div class="card-header">All Comments</div>
                <div class="card-body">
                    <div class="datatable table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Service</th>
                                    <th>Seen</th>
                                    <th>Status</th>
                                    <th>Response</th>
                                    <th>Decline</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = 'SELECT * FROM contact';
                                $stmt = $conn->prepare($sql);
                                $stmt->execute([]);
                                $num = 0;
                                while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $num++; ?>
                                <tr>
                                    <td><?php echo $num; ?></td>
                                    <td><?php echo $rows['id']; ?></td>
                                    <td>
                                        <?php echo $rows['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows['email']; ?>
                                    </td>
                                    <td> <?php echo $rows['message']; ?>
                                    </td>
                                    <td>17 Nov 2022</td>
                                    <td>
                                        <div class="badge badge-success">
                                            <?php echo $rows['status']; ?>
                                        </div>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-icon"><i data-feather="mail"></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-success btn-icon"><i <?php echo $rows[
                                            'status'
                                        ] == 'done'
                                            ? 'data-feather="check"'
                                            : 'data-feather="x-octagon"'; ?>></i></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-red btn-icon"><i data-feather="delete"></i></button>
                                    </td>
                                    <td>
                                        <?php if (isset($_POST['subed'])) {
                                            $id_msg = $_POST['id'];
                                            $sqlDelete =
                                                'DELETE FROM contact WHERE id=:id';
                                            $stmt = $conn->prepare($sqlDelete);
                                            $stmt->execute([
                                                ':id' => $id_msg,
                                            ]);
                                        } ?>
                                        <form method="post">
                                            <input type="hidden" name="id" value="<?php echo $rows[
                                                'id'
                                            ]; ?>">
                                            <button class="btn btn-red btn-icon" name="subed" type='submit'><i
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
    <?php require_once './footer.php'; ?>
