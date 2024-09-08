<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bites.css">
    <link rel="icon" type="/image/png" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Norwood</title>
</head>
<body>
    <section>
        
        <header>
            <div class="hi">
         
                <a href="" class="logo"><img src="images/logo1.png" alt="logo" style="width: 120px;"></a>
                <h1>Norwood International</h1>
            </div>
            
            <ul>
                <li><a href="admin-index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="supplier.php">Suppliers</a></li>
                <li><a href="employee.php">Employees</a></li>
                <li><a href="delivery.html">Delivery</a></li>
                <li><a href="feedback.php">Feedback</a></li>
            </ul>
        </header>

        <div class="products">
            <h1>Snacks</h1>
            <?php
            include 'config.php'; 

            $result = mysqli_query($conn, "SELECT * FROM tbl_product WHERE category='snacks'");

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="product-item">';
                echo '<img src="uploaded/' . $row['image'] . '" alt="' . htmlspecialchars($row['name']) . '">';
                echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                echo '<p>Price: $' . htmlspecialchars($row['price']) . '</p>';
                echo '<div class="cart-controls">';
                echo '<label for="quantity' . $row['id'] . '">Quantity: </label>';
                echo '<input type="number" id="quantity' . $row['id'] . '" name="quantity' . $row['id'] . '" value="1" min="1">';
                echo '<button class="add-to-cart">Add Cart</button>';
                echo '</div>';
                echo '</div>';
            }

            ?>
        </div>

    </section>

    <footer class="footer">
        <div class="social">
            <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp" style="color: #000000;"></i></a>
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook" style="color: #000000;"></i></a>
            <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-solid fa-envelope" style="color: #000000;"></i></a>                    
        </div>
        <p align="center"> © Copyright Norwood.lk 2023. All rights reserved</p>
        <p align="center"> Established in 2022</p>
        <p align="center"> Privacy Policy | Terms of Service | Contact Us</p>
        <br>
    </footer>

</body>
</html>