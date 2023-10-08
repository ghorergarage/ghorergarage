<?php
 
 require_once 'db_connection.php';
 $sql= "SELECT * FROM products";
 $all_product= $connection->query($sql)
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ghorer Garage</title>

        <!-- custom css link -->
        <link rel="stylesheet" type="text/css" href="./buyp.css">
        <script src="script.js" defer></script>
        <script src="https://unpkg.com/phosphor-icons"></script>
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- header start -->
    <header>
        
        <a href="/user_front_page.html" class="logo"><img src="img/Picture1.png" width="270" height="60"> </a>
       

        <ul class="navbar">
            <li><a href="/ghorergarage/user_front_page.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <nav>
        <div class="icons">
             <div class="search">
                <input type="text" class="search-box" placeholder="Search...">
                <button class="search-btn"><i class="ph-magnifying-glass-bold"></i></button>
                <button class="close-btn"><i class='bx bx-x'></i></button>
             
            <a href="#"><i class='bx bxs-user-circle' ></i></a>
            <a href="#" class="cartbox">My cart</a>
            </div>
        </div>
    </nav>
    <style>
        .cartbox{
            text-decoration: none;
            border: 1px solid black;
            padding: 5px 10px;
        }
    </style>
    </header>
    <!-- Shop start -->
    <section class="shop" id="shop">
        
        <div class="container">
        <?php
            while($row= mysqli_fetch_assoc($all_product)){
        ?>
            <div class="box">
                <img src="../uploaded_img/<?php echo $row["image"];?>" alt="">
                <h3><?php echo $row["name"];?></h3>
                <h5>Price: <?php echo $row["price"];?>/-</h5>
                <div class="cart">
                <a href="#">Add to cart<i class='bx bxs-cart' ></i></a>
                </div>
            </div>
            <?php
            }
        ?>  
        </div>
         

    </section>
    <!-- about -->
    <section class="about" id="about">
        <div class="about-content">
            <h2>About</h2>
            <p>fewwwwwwwwwwwwwwwwwww
                fewwwwwwwwwwwwwwwwwwwfew
                fewwwwwwwwwwwwwwwwwfewww
                fewewewewewewewewewewewewewew
            </p>
        </div>
    </section>
    <!-- contact starter -->
    <section class="contact" id="contact">
        <div class="main-contact">
            <div class="contact-content">
            <li><a href="#Home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#faq">Faq</a></li>
            <li><a href="#contact">Contact</a></li>
            </div>
            <div class="contact-content">
                <li><a href="#">Store Policy</a></li>
                <li><a href="#">Payment Methods</a></li>
            </div>

            <div class="contact-content">
                <li><a href="#">Contact</a></li>
                <li><a href="#">Tele: 01746-585025</a></li>
            </div>

            <div class="contact-content">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
            </div>
         </div>
         <div class="action">
            <form>
                <input type="email" name="email" placeholder="Your email" required>
                <input type="submit" name="submit" value="Submit" required>
            </form>
         </div>
    </section>
</head>
</html>