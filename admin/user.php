<?php
include_once("./layouts/head.php");
include_once("./layouts/header.php");
include_once("./layouts/sidebar.php");
include_once("./layouts/breadcrumb.php");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Danh sách thành viên</h1>
    </div>
</div>
<!--/.row-->
<div id="toolbar" class="btn-group">
    <a href="../add_user.php" class="btn btn-success">
        <i class="glyphicon glyphicon-plus"></i> Thêm thành viên
    </a>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table data-toolbar="#toolbar" data-toggle="table">

                    <thead>
                        <tr>
                            <th data-field="id" data-sortable="true">ID</th>
                            <th data-field="name" data-sortable="true">Họ & Tên</th>
                            <th data-field="price" data-sortable="true">Email</th>
                            <th>Quyền</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
                        $rows_per_page = 3;
                        $per_row = $page * $rows_per_page - $rows_per_page;

                        $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user")) / $rows_per_page);

                        $list_pages = array();
                        $delta = 2;
                        $left = $page - $delta;
                        $right = $page + $delta;
                        for ($i = 1; $i <= $total_pages; $i++) {
                            if (
                                $i == 1 ||
                                $i == $total_pages ||
                                $i == $page ||
                                ($i >= $left) && ($i <= $right)
                            ) {
                                $list_pages[] = $i;
                            } elseif (
                                $i == $left - 1 ||
                                $i == $right + 1
                            ) {
                                $list_pages[] = "...";
                            }
                        }

                        $sql = "SELECT * FROM user
                                        ORDER BY user_id ASC
                                        LIMIT $per_row, $rows_per_page";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td style=""><?php echo $row["user_id"]; ?></td>
                                <td style=""><?php echo $row["user_full"]; ?></td>
                                <td style=""><?php echo $row["user_mail"]; ?></td>
                                <td><span class="label label-danger"><?php echo $row["user_level"] == 1 ? "admin" : "member"; ?></span></td>
                                <td class="form-group">
                                    <a href="thanhvien-edit.html" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="/" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                        foreach ($list_pages as $value) {
                            if ($value == "...") {
                        ?>
                                <li class="page-item <?php echo $value == $page ? 'active' : '' ?>"><span><?php echo $value; ?></span></li>
                            <?php
                            } else {

                            ?>
                                <li class="page-item <?php echo $value == $page ? 'active' : '' ?>"><a class="page-link" href="../user.php?page=<?php echo $value; ?>"><?php echo $value; ?></a></li>
                        <?php
                            }
                        }

                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
</div>
<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
</body>

</html>