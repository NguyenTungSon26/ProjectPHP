<?php
include_once("./layouts/head.php");
include_once("./layouts/header.php");
include_once("./layouts/menu.php");
include_once("./layouts/slider.php");
$cat_id = $_GET["cat_id"];
$sql = "SELECT * FROM product
        WHERE cat_id = $cat_id
        ORDER BY prd_id DESC";
$query = mysqli_query($conn, $sql);
$totals = mysqli_num_rows($query)
?>


<!--	List Product	-->
<div class="products">
    <h3><?php echo $_GET["cat_name"]; ?> (hiện có <?php echo $totals; ?> sản phẩm)</h3>
    <div class="product-list card-deck">
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="product-item card text-center">
                <a href="../product.php?prd_id=<?php echo $row["prd_id"]; ?>"><img src="../admin/public/img/products/<?php echo $row["prd_image"]; ?>"></a>
                <h4><a href="#"><?php echo $row["prd_name"]; ?></a></h4>
                <p>Giá Bán: <span><?php echo $row["prd_price"]; ?>đ</span></p>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!--	End List Product	-->

<div id="pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
    </ul>
</div>


<?php
include_once("./layouts/sidebar.php");
include_once("./layouts/footer.php");
?>