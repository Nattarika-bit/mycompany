<?php
include("config.php");

if (isset($_POST["submit"])) {
    if (
        !empty($_POST['cust_no']) &&
        !empty($_POST['cust_name']) &&
        !empty($_POST['cust_street']) &&
        !empty($_POST['cust_city']) &&
        !empty($_POST['cust_state']) &&
        !empty($_POST['cust_zip']) &&
        !empty($_POST['ship_to_name']) &&
        !empty($_POST['ship_to_street']) &&
        !empty($_POST['ship_to_city']) &&
        !empty($_POST['ship_to_state']) &&
        !empty($_POST['ship_to_zip']) &&
        !empty($_POST['credit_limit']) &&
        !empty($_POST['last_revised']) &&
        !empty($_POST['credit_terms'])
    ) {
        // รับค่าจากฟอร์ม
        $cust_no = $_POST['cust_no'];
        $cust_name = $_POST['cust_name'];
        $cust_street = $_POST['cust_street'];
        $cust_city = $_POST['cust_city'];
        $cust_state = $_POST['cust_state'];
        $cust_zip = $_POST['cust_zip'];
        $ship_to_name = $_POST['ship_to_name'];
        $ship_to_street = $_POST['ship_to_street'];
        $ship_to_city = $_POST['ship_to_city'];
        $ship_to_state = $_POST['ship_to_state'];
        $ship_to_zip = $_POST['ship_to_zip'];
        $credit_limit = $_POST['credit_limit'];
        $last_revised = $_POST['last_revised'];
        $credit_terms = $_POST['credit_terms'];

        // ตรวจสอบว่ามี cust_no ซ้ำหรือไม่
        $sql = "SELECT * FROM customer WHERE cust_no = '$cust_no'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if ($row && $row['cust_no'] == $cust_no) {
            echo "<script> alert('มี cust_no นี้แล้ว'); history.back(); </script>";
        } else {
            // บันทึกข้อมูลใหม่
            $sql = "INSERT INTO customer (
                        cust_no, cust_name, cust_street, cust_city, cust_state, cust_zip,
                        ship_to_name, ship_to_street, ship_to_city, ship_to_state, ship_to_zip,
                        credit_limit, last_revised, credit_terms
                    ) VALUES (
                        '$cust_no', '$cust_name', '$cust_street', '$cust_city', '$cust_state', '$cust_zip',
                        '$ship_to_name', '$ship_to_street', '$ship_to_city', '$ship_to_state', '$ship_to_zip',
                        '$credit_limit', '$last_revised', '$credit_terms'
                    )";

            if (mysqli_query($conn, $sql)) {
                echo "<script> alert('บันทึกข้อมูลเรียบร้อย'); window.location.href = 'customer_list.php'; </script>";
            } else {
                echo "<script> alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล'); history.back(); </script>";
            }
        }
    } else {
        echo "<script> alert('กรอกข้อมูลไม่ครบ'); history.back(); </script>";
    }
}
?>
