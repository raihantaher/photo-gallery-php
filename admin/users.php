<?php include("includes/header.php"); ?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php include("includes/top_nav.php") ?>

            <?php include("includes/side_nav.php") ?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User Page
                            <small>All about users</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Users
                            </li>
                        </ol>
                        <p>

                            <?php

                            $result = User::find_all_users();

                            foreach($result as $row){
                                echo $row->username."<br>";
                            }

                            ?>
                        </p>
                        <p>_________________</p>
                        <p>
                            <?php

                            $res = User::find_by_id(1);

                            echo $res->username;


                            ?>
                        </p>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>