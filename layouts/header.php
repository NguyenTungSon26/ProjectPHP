<body>

    <!--	Header	-->
    <div id="header">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                    <h1><a href="../"><img class="img-fluid" src="images/logo.png"></a></h1>
                </div>
                <div id="search" class="col-lg-6 col-md-6 col-sm-12">
                    <form action="../search.php" class="form-inline">
                        <input name="keyword" class="form-control mt-3" type="search" placeholder="Tìm kiếm" aria-label="Search">
                        <button class="btn btn-danger mt-3" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                    <a class="mt-4 mr-2" href="../cart.php">giỏ hàng</a><span class="mt-3">
                        <?php

                        if (isset($_SESSION["cart"])) {
                            if (isset($_POST["qty"])) {
                                foreach ($_POST["qty"] as $prd_id => $qty) {
                                    $_SESSION["cart"][$prd_id] = $qty;
                                }
                            }
                            $total = 0;
                            foreach ($_SESSION["cart"] as $qty) {
                                $total += $qty;
                            }
                            echo $total;
                        } else {
                            echo 0;
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!--	End Header	-->