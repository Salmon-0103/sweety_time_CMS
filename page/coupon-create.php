<?php

require_once("../db_connect.php");
include("../function/login_status_inspect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增優惠券</title>
    <?php include("../css/css_Joe.php"); ?>
    <style>
        .coupon-input_bar{
            /* width: 1000px; */
        }
        .coupon-submit-btn{
            width: 300px;
        }
    </style>
</head>

<body>
    <?php include("../modules/dashboard-header_Joe.php"); ?>

    <div class="container-fluid d-flex flex-row px-4">

        <?php include("../modules/dashboard-sidebar_Joe.php"); ?>

        <div class="main col neumorphic p-5">
            <div class="container">
            <div class="mb-4 row d-flex justify-content-center">
                    <div class="col-8 col-xl-10 d-flex justify-content-center">
                        <h2>新增優惠券</h2>
                    </div>
                </div>
                <form action="../function/doCreateCoupon.php" method="post">
                    <div class="mb-2 row d-flex justify-content-center">
                        <div class="col-8 col-xl-10">
                            <label class="form-label text-dark fw-bold" for="name">優惠券名稱</label>
                            <input type="text" class="form-control form-control-custom coupon-input_bar " name="name" required>
                        </div>
                    </div>
                    <div class="mb-2 row d-flex justify-content-center">
                        <div class="col-8 col-xl-10">
                            <label class="form-label text-dark fw-bold mt-3" for="discount_rate">折扣率%</label>
                            <input type="number" class="form-control form-control-custom coupon-input_bar" id="score" name="discount_rate" min="0" max="100" step="1" required>
                        </div>
                    </div>
                    <div class="mb-2 row d-flex justify-content-center">
                        <div class="col-8 col-xl-10">
                            <label class="form-label text-dark fw-bold mt-3" for="start_time">啟用日</label>
                            <input type="date" class="form-control form-control-custom coupon-input_bar" name="start_time" required>
                        </div>
                    </div>
                    <div class="mb-2 row d-flex justify-content-center">
                        <div class="col-8 col-xl-10">
                            <label class="form-label text-dark fw-bold mt-3" for="end_date">到期日(未填則視為永久有效)</label>
                            <input type="date" class="form-control form-control-custom coupon-input_bar" name="end_date">
                        </div> 
                    </div>
                    <div class="mb-2 row d-flex justify-content-center">
                        <div class="col-8 col-xl-10">
                            <label class="form-label  text-dark fw-bold mt-3 me-3">啟用狀態</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form-control-custom" type="radio" name="activation" value="1" checked>
                                <label class="form-check-label form-control-custom" for="activation">啟用</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form-control-custom" type="radio" name="activation" value="0">
                                <label class="form-check-label form-control-custom" for="activation">停用</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 row d-flex justify-content-center">
                        <div class="col-8 col-xl-10 d-flex justify-content-center">
                            <button class="btn btn-neumorphic coupon-submit-btn" type="submit">新增他！</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <?php include("../js.php"); ?>
    
    <!-- 顯示新增成功or失敗訊息 -->
    <!-- 有時間可以用中介頁面來避免使用GET -->
    <!-- 有時間可以用別的設計取代alert -->
    <?php
        if (isset($_GET['message'])) {
            $message = htmlspecialchars($_GET['message']);
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    ?>
</body>
</html>