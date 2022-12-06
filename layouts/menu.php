<!--	Body	-->
<div id="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav>
                    <div id="menu" class="collapse navbar-collapse">
                        <ul>
                            <?php
                            $sql = "SELECT * FROM category
                                ORDER BY cat_id ASC";
                            $query = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <li class="menu-item"><a href="../category.php?cat_id=<?php echo $row["cat_id"]; ?>&cat_name=<?php echo $row["cat_name"]; ?>"><?php echo $row["cat_name"]; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div id="main" class="col-lg-8 col-md-12 col-sm-12">