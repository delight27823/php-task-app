<?php
include 'database/config.php';

// IMPORTANT: force database selection
$conn->select_db("productsdb");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
</head>
<body>
    <h1 style="text-align:center;color:purple;">Product Catalog</h1>

    <table border="1" style="margin:auto;">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["ProductName"]."</td>";
                echo "<td>".$row["Price"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No products found</td></tr>";
        }
        ?>

    </table>
</body>
</html>
