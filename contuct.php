<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com//c73176f163.js" crossorigin="anonymous"></script>
</head>
<style>
    #nav{
        background-color: #000000;
    }
    ul li a{
        color: white;
        text-decoration: none;
    }
    img{
        width: 100%;
        height: 100%;
    }
    .bg-img{
        background-image: url("images/bg.jpg");
        background-position: center;
        height: 100%;
        width: 100%;
        background-size: auto ;
    }
    a:hover{
        background-color: white;
    }
    .fdiv{
        background: #ffffff;
        width:170px;
        margin-left: auto;
        margin-right: auto;
    }
    .txt{
        background-color: #1b1e21;
        color: white;
    }
  .form-group{
      line-height: 5px;
    }


</style>
<body class="bg-info">
<div>
    <h1 class="container-fluid bg-info text-white text-center p-3 mb-0">Get your test from Megdine</h1>
    <div class="link">
    <ul id="nav" style="list-style: none;color: #ffffff"class="nav-pills navbar list-group list-group-horizontal p-2 mt-0 mx-auto justify-content-center">
        <li class="mr-3 nav-item active"><a href="homepage.php"><b>Home</b></a></li>
        <li class="mr-3 nav-item"><a href="services.php"><b>Services</b></a></li>
        <li class="mr-3 nav-item"><a href="about.php"><b>About Us</b></a></li>
        <li class="mr-3 nav-item"><a class="nav-link active" href="contuct.php"><b>Contact Us</b> </a></li>
    </ul>
    </div>
</div>
<div class="bg-img">
    <div class="fdiv flex-column" style="line-height: 1pt">

    <form action=""method="post" class="was-validated">
        <input type="name" name="name" placeholder="Enter your name" class="form-group form-control"style="background-color: #1b1e21;color: white"required >
        <input type="email"name="name" placeholder="Enter your email"class="form-group form-control"style="background-color: #1b1e21;color: white"required>
        <textarea name="Type message" id="" cols="30" rows="10" class="txt form-group form-control"placeholder="Enter message"style="height: 100px; background-color: #1b1e21;color: white"required></textarea>

        <input type="submit" value="Send message" class="form-group form-control text-white"style="background-color: grey" >
    </form>
    </div>
    <?php include "footer.php"?>
</div>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>