<?php
include 'header.php';
session_start();
include 'connect_db.php';
?>

<body>
    <style>
        body {
            padding-top: 100px;
            text-align: center;
        }
    </style>
    <div class="container">
        <table class="table table-hover table-bordered">
            <tbody>

                <div class="row">

                    <!-- <div class="col-sm-4"> -->
                        <?php

                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM artist where Id = 1 ");
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>


                            <div class="container mt-3">
                                <div class="card" style="width:400px">
                                    <img class="card-img-top" src="Image_DTB/10.jpg" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row["name"]; ?>
                                        </h4>
                                        
                                </div>
                                <!--  -->
                            </div>
                            <?php
                            $i++;
                        }
                        ?>

<!-- 
                    </div>
                    <div class="col-sm-4"> -->
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM artist where Id = 2");
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="container mt-3">
                                <div class="card" style="width:400px">
                                    <img class="card-img-top" src="Image_DTB/10.jpg" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row["name"]; ?>
                                        </h4>
                                        
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <?php
                            $i++;
                        }
                        ?>

                    <!-- </div> -->
                    <!-- <div class="col-sm-4"> -->
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM artist where Id = 3");
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="container mt-3">
                                <div class="card" style="width:400px">
                                    <img class="card-img-top" src="Image_DTB/10.jpg" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row["name"]; ?>
                                        </h4>
                                        
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                        
                    <!-- </div> -->
                    <!-- <div class="col-sm-4"> -->
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM artist where Id = 4");
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="container mt-3">
                                <div class="card" style="width:400px">
                                    <img class="card-img-top" src="Image_DTB/10.jpg" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row["name"]; ?>
                                        </h4>
                                        
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <!-- <div class="col-sm-4"> -->
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM artist where Id = 5");
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="container mt-3">
                                <div class="card" style="width:400px">
                                    <img class="card-img-top" src="Image_DTB/10.jpg" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row["name"]; ?>
                                        </h4>
                                       
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                    <!-- </div> -->
                    <!-- <div class="col-sm-4"> -->
                        <?php
                        $count = 0;
                        $result = mysqli_query($connect, "SELECT *FROM artist where Id = 6");
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <div class="container mt-3">
                                <div class="card" style="width:400px">
                                    <img class="card-img-top" src="Image_DTB/10.jpg" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row["name"]; ?>
                                        </h4>
                                        
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <?php
                            $i++;
                        }
                        ?>
                    <!-- </div> -->
                </div>
            </tbody>
        </table>
    </div>
    <?php
    include 'footer.php';
    ?>