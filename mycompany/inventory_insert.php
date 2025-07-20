<?php
    include("config.php");
    if(isset($_POST["submit"]))
    {
        if(!empty($_POST['item_no'])&&
            !empty($_POST['item_name'])&&
            !empty($_POST['price'])&&
            !empty($_POST['location'])&&
            !empty($_POST['qty_on_hand'])&&
            !empty($_POST['reorder_pt']))
        {
            $item_no = $_POST['item_no'];
            $item_name = $_POST['item_name'];
            $price = $_POST['price'];
            $location = $_POST['location'];
            $qty_on_hand = $_POST['qty_on_hand'];
            $reorder_pt = $_POST['reorder_pt'];
            $sql = "SELECT * FROM inventory WHERE item_no = '$item_no'"; 
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);

            if($row['item_no'] == $item_no)
            {
                 echo "<script> alert ('มี item_no นี้แล้ว'); history.back(); </script>";
            }
            else
            {
                $sql = "INSERT INTO inventory(item_no, item_name, price, location, qty_on_hand, reorder_pt) 
                                    VALUES ('$item_no','$item_name','$price ','$location','$qty_on_hand','$reorder_pt')";
                            
                            if(mysqli_query($conn,$sql))
                            {
                                echo "<script> alert ('บันทึกข้อมูลเรียบร้อย'); window.location.href = 'inventory_list.php'; </script>";
                            }
            }

            
        

        }
        else
        {
            echo "<script> alert ('กรอกข้อมูลไม่ครบ'); history.back(); </script>";
        }
    }
?>