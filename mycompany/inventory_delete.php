<?php
    include("config.php");

    $old_item_no = $_GET["old_item_no"];

    $sql = "DELETE FROM inventory WHERE item_no = '$old_item_no'";

    if(mysqli_query($conn,$sql))
    {
        echo "<script> alert ('ลบข้อมูลเรียบร้อย'); window.location.href = 'inventory_list.php' </script>";
    }
?>  