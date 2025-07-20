
<?php
include("config.php");

$sql = "SELECT * FROM customers";
$result = mysqli_query($conn, $sql);

echo "<a href='customer_form.php'>New Customer</a>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>cust_no</th>";
echo "<th>cust_name</th>";
echo "<th>cust_street</th>";
echo "<th>cust_city</th>";
echo "<th>cust_state</th>";
echo "<th>cust_zip</th>";
echo "<th>ship_to_name</th>";
echo "<th>ship_to_street</th>";
echo "<th>ship_to_city</th>";
echo "<th>ship_to_state</th>";
echo "<th>ship_to_zip</th>";
echo "<th>credit_limit</th>";
echo "<th>last_revised</th>";
echo "<th>credit_terms</th>";
echo "<th>EDIT</th>";
echo "<th>DELETE</th>";
echo "</tr>";

while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>" . $row['cust_no'] . "</td>";
    echo "<td>" . $row['cust_name'] . "</td>";
    echo "<td>" . $row['cust_street'] . "</td>";
    echo "<td>" . $row['cust_city'] . "</td>";
    echo "<td>" . $row['cust_state'] . "</td>";
    echo "<td>" . $row['cust_zip'] . "</td>";
    echo "<td>" . $row['ship_to_name'] . "</td>";
    echo "<td>" . $row['ship_to_street'] . "</td>";
    echo "<td>" . $row['ship_to_city'] . "</td>";
    echo "<td>" . $row['ship_to_state'] . "</td>";
    echo "<td>" . $row['ship_to_zip'] . "</td>";
    echo "<td>" . $row['credit_limit'] . "</td>";
    echo "<td>" . $row['last_revised'] . "</td>";
    echo "<td>" . $row['credit_terms'] . "</td>";
    echo "<td><a href='customer_edit.php?cust_no=" . $row['cust_no'] . "'>EDIT</a></td>";
    echo "<td><a href='customer_delete.php?cust_no=" . $row['cust_no'] . "'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
