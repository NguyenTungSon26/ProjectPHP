<?php
include_once("./layouts/head.php");
include_once("./layouts/header.php");
include_once("./layouts/menu.php");
include_once("./layouts/slider.php");
?>

<!--	Feature Product	-->
<div class="products">
    <h3>Sản phẩm nổi bật</h3>
    <div class="product-list card-deck">
        <?php
        $sql = "SELECT * FROM product
                WHERE prd_featured = 1
                ORDER BY prd_id DESC
                LIMIT 6";
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
<!--	End Feature Product	-->


<!--	Latest Product	-->
<div class="products">
    <h3>Sản phẩm mới</h3>
    <div class="product-list card-deck">
        <?php
        $sql = "SELECT * FROM product
                ORDER BY prd_id DESC
                LIMIT 6";
        $query = mysqli_query($conn, $sql);
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
<!--	End Latest Product	-->

<?php
include_once("./layouts/sidebar.php");
include_once("./layouts/footer.php");
?>