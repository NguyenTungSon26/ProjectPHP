<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<form role="search">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search">
		</div>
	</form>
	<ul class="nav menu">
		<li class="<?php if (isset($_GET["active"]) && $_GET["active"] == "admin") {
						echo "active";
					} ?>"><a href="../admin.php?active=admin"><svg class="glyph stroked dashboard-dial">
					<use xlink:href="#stroked-dashboard-dial"></use>
				</svg> Dashboard</a></li>
		<li class="<?php if (isset($_GET["active"]) && $_GET["active"] == "user") {
						echo "active";
					} ?>"><a href="../user.php?active=user"><svg class="glyph stroked male user ">
					<use xlink:href="#stroked-male-user" />
				</svg>Quản lý thành viên</a></li>
		<li class="<?php if (isset($_GET["active"]) && $_GET["active"] == "category") {
						echo "active";
					} ?>"><a href="../category.php?active=category"><svg class="glyph stroked open folder">
					<use xlink:href="#stroked-open-folder" />
				</svg>Quản lý danh mục</a></li>
		<li class="<?php if (isset($_GET["active"]) && $_GET["active"] == "product") {
						echo "active";
					} ?>"><a href="../product.php?active=product"><svg class="glyph stroked bag">
					<use xlink:href="#stroked-bag"></use>
				</svg>Quản lý sản phẩm</a></li>
		<li class="<?php if (isset($_GET["active"]) && $_GET["active"] == "comment") {
						echo "active";
					} ?>"><a href="../comment.php?active=comment"><svg class="glyph stroked two messages">
					<use xlink:href="#stroked-two-messages" />
				</svg> Quản lý bình luận</a></li>
		<li class="<?php if (isset($_GET["active"]) && $_GET["active"] == "ads") {
						echo "active";
					} ?>"><a href="../ads.php?active=ads"><svg class="glyph stroked chain">
					<use xlink:href="#stroked-chain" />
				</svg> Quản lý quảng cáo</a></li>
		<li class="<?php if (isset($_GET["active"]) && $_GET["active"] == "setting") {
						echo "active";
					} ?>"><a href="../setting.php?active=setting"><svg class="glyph stroked gear">
					<use xlink:href="#stroked-gear" />
				</svg> Cấu hình</a></li>
	</ul>

</div>
<!--/.sidebar-->