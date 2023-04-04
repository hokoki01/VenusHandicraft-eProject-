<?php
include 'connect_db.php';
include 'header.php';
?>

<br><br><br><br>
<div class="container">
    <table class="table table-hover table-bordered">
        <tbody>
            <?php
            if (isset($_GET['Id'])) {
                $product_id = mysqli_real_escape_string($connect, $_GET['Id']);
                $query = "SELECT * FROM product WHERE Id='$product_id' ";
                $query_run = mysqli_query($connect, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    $product = mysqli_fetch_array($query_run);
                    ?>
                    <div class="card-header">
                        <h4>

                            <a href="Home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <div class="row g-3">

                        <div class="col">

                            <img src='image_DTB/<?= $product['Image']; ?>' class='img-responsive' style='width:100%;border: 5px solid green;'
                                alt='Image'>
                        </div>
                        <div class="col">
                            <h5 class="card-title">


                                <div class="container">
                                    <div class="jumbotron">
                                        <!-- for page header -->
                                        <h4 style="color: green">PRODUCT NAME</h4><br>
                                            <h4 style="color: blue ;">
                                                <?= $product['Title']; ?>

                                            </h4><br><br>
                                        
                                        <h4 style="color: green">PRODUCT ATTRIBUTES</h4><br>
                                        <p style="color: #000">
                                            <?= $product['Description']; ?>
                                        </p>
                                        <br>
                                        <h4 style="color: green">SOME OUTSTANDING ARTISTS</h4><br>
                                        <a
                                            href="https://langngheviet.com.vn/lang-nghe-nghe-nhan/nghe-nhan-do-van-cuong-nguoi-phat-huy-the-manh-lang-nghe-truyen-thong.html35816">
                                            <img src="image_DTB/hkd-do-van-cuong-202022110518235.jpg"
                                                alt="nghệ nhân Đặng Ích Hoàn"
                                                style='width:20%; height : 100px; border-radius:50%;'>&ensp;&ensp;&ensp;&ensp;&ensp;
                                        </a>
                                        <a
                                            href="https://congthuong.vn/nghe-nhan-dang-ich-han-say-nghe-va-dong-gop-lon-gin-giu-nghe-130374.html">
                                            <img src="image_DTB/DIHan.jpg" alt="nghệ nhân Đặng Ích Hân"
                                                style='width:20%; height : 100px;border-radius:50%;'>&ensp;&ensp;&ensp;&ensp;&ensp;
                                        </a>
                                        <a
                                            href="https://cand.com.vn/Ly-luan/nghe-nhan-uu-tu-nguyen-ba-chau-khong-dung-tai-nang-de-truc-loi-i663619/">
                                            <img src="image_DTB/NBC.jpg" alt="nghệ nhân Nguyễn Bá Châu"
                                                style='width:20%; height : 100px;border-radius:50%;'><br><br>
                                        </a>
                                        <a
                                            href="https://congthuong.vn/nghe-nhan-nguyen-duy-hung-moi-san-pham-kim-hoan-la-mot-tac-pham-nghe-thuat-147248.html">
                                            <img src="image_DTB/NDH.jpg" alt="nghệ nhân Nguyễn Duy Hưng"
                                                style='width:20%; height : 100px;border-radius:50%;'>&ensp;&ensp;&ensp;&ensp;&ensp;
                                        </a>
                                        <a
                                            href="https://congthuong.vn/nghe-nhan-nguyen-tran-hiep-lam-giau-bang-trach-nhiem-va-dam-me-130370.html">
                                            <img src="image_DTB/NTH.jpg" alt="nghệ nhân Nguyễn Trần Hiệp"
                                                style='width:20%; height : 100px;border-radius:50%;'>&ensp;&ensp;&ensp;&ensp;&ensp;
                                        </a>
                                        <a
                                            href="https://congthuong.vn/nghe-nhan-tran-duy-mong-ban-tay-vang-nghe-kim-hoan-xu-hue-149371.html">
                                            <img src="image_DTB/TDM.jpg" alt="nghệ nhân Trần Duy Mong "
                                                style='width:20%; height : 100px;border-radius:50%;'>&ensp;&ensp;&ensp;&ensp;&ensp;
                                        </a>
                                    </div>
                                </div>

                        </div>
                        <?php
                } else {
                    echo "<h4>No Such Id Found</h4>";
                }
            }
            ?>
            </div>

        </tbody>
    </table>
</div>