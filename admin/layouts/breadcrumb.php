<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="../admin.php?active=admin"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <?php if (isset($_GET["active"]) && $_GET["active"] == "admin") { ?><li>Trang chủ quản trị</li> <?php } ?>
            <?php if (isset($_GET["active"]) && $_GET["active"] == "user") { ?><li>Danh sách thành viên</li> <?php } ?>
            <?php if (isset($_GET["active"]) && $_GET["active"] == "category") { ?><li>Quản lý danh mục</li> <?php } ?>
            <?php if (isset($_GET["active"]) && $_GET["active"] == "product") { ?><li>Danh sách sản phẩm</li> <?php } ?>
            <?php if (isset($_GET["active"]) && $_GET["active"] == "comment") { ?><li>Danh sách comment</li> <?php } ?>
            <?php if (isset($_GET["active"]) && $_GET["active"] == "ads") { ?><li>Danh sách quảng cáo</li> <?php } ?>
            <?php if (isset($_GET["active"]) && $_GET["active"] == "setting") { ?><li>cài đặtn</li> <?php } ?>
        </ol>
    </div>
    <!--/.row-->