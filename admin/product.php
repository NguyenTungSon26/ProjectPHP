<?php
include_once("./layouts/head.php");
include_once("./layouts/header.php");
include_once("./layouts/sidebar.php");
include_once("./layouts/breadcrumb.php");

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Danh sách sản phẩm</h1>
    </div>
</div>
<!--/.row-->
<div id="toolbar" class="btn-group">
    <a href="../add_product.php" class="btn btn-success">
        <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
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
                            <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                            <th data-field="price" data-sortable="true">Giá</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Trạng thái</th>
                            <th>Danh mục</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
                        $rows_per_page = 3;
                        $per_row = $page * $rows_per_page - $rows_per_page;

                        $total_pages = ceil(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM product")) / $rows_per_page);

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

                        $sql = "SELECT * FROM product
                                        INNER JOIN category
                                        ON product.cat_id = category.cat_id
                                        ORDER BY prd_id DESC
                                        LIMIT $per_row, $rows_per_page";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td style=""><?php echo $row["prd_id"]; ?></td>
                                <td style=""><?php echo $row["prd_name"]; ?></td>
                                <td style=""><?php echo $row["prd_price"]; ?></td>
                                <td style="text-align: center"><img width="130" height="180" src="img/products/<?php echo $row["prd_image"]; ?>" /></td>
                                <td><span class="label label-<?php echo $row["prd_status"] == 1 ? "success" : "danger" ?>"><?php echo $row["prd_status"] == 1 ? "Còn Hàng" : "Hết Hàng"; ?></span></td>
                                <td><?php echo $row["cat_name"] ?></td>
                                <td class="form-group">
                                    <a href="../edit_product.php?prd_id=<?php echo $row["prd_id"]; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="../del_product.php?prd_id=<?php echo $row["prd_id"]; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
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
                                <li class="page-item <?php echo $value == $page ? 'active' : '' ?>"><a class="page-link" href="../product.php?page=<?php echo $value; ?>"><?php echo $value; ?></a></li>
                        <?php
                            }
                        }

                        ?>




                        <!-- <?php
                                for ($i = 0; $i < count($list_pages); $i++) {
                                ?>
                                
                                <li class="page-item <?php echo $list_pages[$i] == $page ? 'active' : '' ?>"><a class="page-link" href="../product.php?page=<?php
                                                                                                                                                            if ($list_pages[$i] == '...' && $list_pages[$i + 1] == $left) {
                                                                                                                                                                echo $left - 1;
                                                                                                                                                            } elseif ($list_pages[$i] == '...' && $list_pages[$i - 1] == $right) {
                                                                                                                                                                echo $right + 1;
                                                                                                                                                            } else {
                                                                                                                                                                echo $list_pages[$i];
                                                                                                                                                            }
                                                                                                                                                            ?>">
                                    <?php echo $list_pages[$i]; ?></a></li>
                                    
                                
                                <?php } ?>  -->
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
<?php
include_once("./layouts/foodter.php");
?>