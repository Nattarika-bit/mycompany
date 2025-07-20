<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Form</title>
</head>
<body>
    <form action="customer_insert.php" method="post">
        cust_no <br>
        <input type="text" name="cust_no"><br>

        cust_name <br>
        <input type="text" name="cust_name"><br>

        cust_street <br>
        <input type="text" name="cust_street"><br>

        cust_city <br>
        <input type="text" name="cust_city"><br>

        cust_state <br>
        <input type="text" name="cust_state"><br>

        cust_zip <br>
        <input type="text" name="cust_zip"><br>

        ship_to_name <br>
        <input type="text" name="ship_to_name"><br>

        ship_to_street <br>
        <input type="text" name="ship_to_street"><br>

        ship_to_city <br>
        <input type="text" name="ship_to_city"><br>

        ship_to_state <br>
        <input type="text" name="ship_to_state"><br>

        ship_to_zip <br>
        <input type="text" name="ship_to_zip"><br>

        credit_limit <br>
        <input type="number" name="credit_limit" step="0.01"><br>

        last_revised <br>
        <input type="date" name="last_revised"><br>

        credit_terms <br>
        <input type="text" name="credit_terms"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
