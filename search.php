<?php
include_once("./layouts/head.php");
include_once("./layouts/header.php");
include_once("./layouts/menu.php");
include_once("./layouts/slider.php");

$keyword = $_GET["keyword"];
$arr_keyword = explode(" ", $keyword);
$str_keyword = "%" . implode("%", $arr_keyword) . "%";

?>


<!--	List Product	-->
<div class="products">
    <div id="search-result">Kết quả tìm kiếm với sản phẩm <span><?php echo $keyword; ?></span></div>
    <div class="product-list card-deck">
        <?php
        $sql = "SELECT * FROM product
            WHERE prd_name LIKE '$str_keyword'";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>

            <div class="product-item card text-center">
                <a href="../product.php?prd_id=<?php echo $row["prd_id"]; ?>"><img src="../admin/public/img/products/<?php echo $row["prd_image"]; ?>"></a>
                <h4><a href="../product.php?prd_id=<?php echo $row["prd_id"]; ?>"><?php echo $row["prd_name"]; ?></a></h4>
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