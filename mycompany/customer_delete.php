<?php
    include("config.php");

    $cust_no = $_GET["cust_no"];

    $sql = "DELETE FROM customer WHERE cust_no = '$cust_no'";

    if(mysqli_query($conn, $sql)) 
    {
        echo "<script> alert('ลบข้อมูลเรียบร้อย'); window.location.href = 'customer_list.php' </script>";
    } 
?>