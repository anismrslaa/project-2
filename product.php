<html>
<head>
    <meta charset ="utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>QUE.QU</title>
    <link rel ="stylesheet" type="text/css" href ="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <!-- sidebar-->
    <input type="checkbox" id="check">
    <div class="sidebar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="support.php">Support</a></li>
            <li><a href="about.php">about</a></li>
        </ul>
    </div>
    <!-- Header-->
    <header>
        <div class="container">
            <h1><a href="home.php">Que.Qu</a></h1>
             <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="about.php">about</a></li>
            </ul>
            <!-- menu mobile -->
            <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
        </div>
        
    </header>
    <!-- Contein-->
    <!--Category-->
    <div class="section">
        <div class="container">
            <h3>Category</h3>
            <div class="box">
            <a href="cake.php">
                <div class="col-5">
                    <img src="images/cake.png" width="50px" style="margin-bottom: 5px;">
                    <p>Cake</p>
                </div>
            </a>
            <a href="cupcake.php">
                <div class="col-5">
                    <img src="images/cupcake.png" width="50px" style="margin-bottom: 5px;">
                    <p>cupcake</p>
                </div>
            </a>
            <a href="birthday.php">
                <div class="col-5">
                    <img src="images/hbd.png" width="50px" style="margin-bottom: 5px;">
                    <p>Birthday</p>
                </div>
            </a>
            </div>
        </div>
    </div>
     <!--Menu Favorit-->
     <div class="catalog">
            <div class="wrapper">
                <h3>Menu Favorit</h3>
            </div>
            <div class="wrapper">
                <div class="catalog-item">
                    <img src="images/cake1.jpg" alt="">
                    <div class="desc">
                        <div class="title">
                        <h5>Cheesecake</h5>
                    </div>
                    <div class="price">
                        <h6>Rp100.000<h6>
                    </div>
                    </div>   
                </div>
                <div class="catalog-item">
                    <img src="images/cake3.jpg" alt="">
                    <div class="desc">
                        <div class="title">
                        <h5>Chocolate Twins Signature</h5>
                    </div>
                    <div class="price">
                        <h6>Rp200.000<h6> 
                    </div>
                    </div>
                </div>
                <div class="catalog-item">
                    <img src="images/cupcake11.jpg" alt="">
                    <div class="desc">
                        <div class="title">
                        <h5>Caramel Hot Fudge</h5>
                    </div>
                    <div class="price">
                        <h6>Rp150.000<h6>
                    </div>
                    </div>
                </div>
                <div class="catalog-item">
                    <img src="images/hbd5.jpg" alt="">
                    <div class="desc">
                         <div class="title">
                        <h5>Black Forest</h5>
                    </div>
                    <div class="price">
                        <h6>Rp300.000<h6>
                    </div>
                    </div> 
                </div>

            </div>
    </div>
    <!-- Footer-->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2022 - Que.Qu.</small>
        </div>
    </footer>
</body>
</html>