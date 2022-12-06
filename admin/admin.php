<?php
include_once("./layouts/head.php");
include_once("./layouts/header.php");
include_once("./layouts/sidebar.php");
include_once("./layouts/breadcrumb.php");

$sql = "SELECT * FROM ";

?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Trang chủ quản trị</h1>
	</div>
</div>
<!--/.row-->

<div class="row">
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="panel panel-blue panel-widget ">
			<div class="row no-padding">
				<a href="../product.php?active=product">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked bag">
							<use xlink:href="#stroked-bag"></use>
						</svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">


						<div class="large">
							<?php
							echo mysqli_num_rows(mysqli_query($conn, $sql . "product"));
							?></div>
						<div class="text-muted">Sản Phẩm</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="panel panel-orange panel-widget">
			<div class="row no-padding">
				<div class="col-sm-3 col-lg-5 widget-left">
					<svg class="glyph stroked empty-message">
						<use xlink:href="#stroked-empty-message"></use>
					</svg>
				</div>
				<div class="col-sm-9 col-lg-7 widget-right">
					<div class="large"><?php
										echo mysqli_num_rows(mysqli_query($conn, $sql . "comment"));
										?></div>
					<div class="text-muted">Bình Luận</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="panel panel-teal panel-widget">
			<div class="row no-padding">
				<a href="../user.php?active=user">
					<div class="col-sm-3 col-lg-5 widget-left">
						<svg class="glyph stroked male-user">
							<use xlink:href="#stroked-male-user"></use>
						</svg>
					</div>
					<div class="col-sm-9 col-lg-7 widget-right">
						<div class="large"><?php
											echo mysqli_num_rows(mysqli_query($conn, $sql . "user"));
											?></div>
						<div class="text-muted">Thành Viên</div>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="panel panel-red panel-widget">
			<div class="row no-padding">
				<div class="col-sm-3 col-lg-5 widget-left">
					<svg class="glyph stroked app-window-with-content">
						<use xlink:href="#stroked-app-window-with-content"></use>
					</svg>
				</div>
				<div class="col-sm-9 col-lg-7 widget-right">
					<div class="large">25.2k</div>
					<div class="text-muted">Quảng Cáo</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/.row-->
</div>
<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php include_once("./layouts/footer.php"); ?>