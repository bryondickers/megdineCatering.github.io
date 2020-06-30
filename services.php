<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

</head>
<style>

    #nav{
        background-color: #000000;
    }
    img{
        height:200px;
        margin-right: 5%;
        margin-left: 5%;

    }
    #lft{
        margin-top: 0px;
    }
    .li{
        column-count: 2;
    }
    #he{
        font-family: Charm;
    }
    ul li a{
        color: white;
        text-decoration: none;
    }
    ul li a:hover{
        background-color: white;
    }

</style>
<body class="bg-info" style="font-size:2vmax;">
<div>
    <h1 class="container-fluid bg-info text-white text-center p-3 mb-0"style="font-size: 5vmax;"><b><i>Get your test from Megdine</i></b></h1>
    <div class="link">
<ul id="nav" style="list-style: none;color: #ffffff"class="navbar nav-pills list-group list-group-horizontal p-2 mt-0 mx-auto justify-content-center">

    <li class="mr-3 nav-item active"><a href="homepage.php"><b>Home</b></a></li>
    <li class="mr-3 nav-item "><a class="nav-link active" href="services.php"><b>Services</b></a></li>
    <li class="mr-3 nav-item"><a href="about.php"><b>About Us</b></a></li>
    <li class="mr-3 nav-item"><a href="contuct.php"><b>Contact Us</b> </a></li>
</ul>
    </div>

</div>
<div class="container bg-dark text-white">
    <img class="mx-auto d-block container-fluid" src="images/services.jpg" alt="">
    <h2 id="he" class="container-fluid bg-success pt-2 pb-2 text-center mb-0 text-light"style="font-size: 6vw;"><b>Exquisite Catering Services</b></h2>
</div>
  <div class="container bg-dark text-white mt-0 pb-1">
    <ul class="li pl-5">
        <li> Corporate events</li>
        <li>AGM Catering</li>
        <li>Cocktail Events</li>
        <li>High Tea Events</li>
        <li>Office Meal Deliveries</li>
        <li>Wedding Celebrations</li>
        <li>Birthday Parties</li>
        <li>Ruracio Celebrations</li>
        <li>Baby Showers</li>
        <li>Bridal Parties</li>
        <li>Graduation Parties</li>
        <li>Chama Gatherings</li>
        <li>House Paties</li>
    </ul>
      <?php include "footer.php"?>
  </div>
  </div>
</body>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>