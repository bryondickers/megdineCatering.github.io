<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <title>Title</title>
</head>
<style>
    #nav{
        background-color: #000000;
    }
    p, li{
        position: relative;
    }
    .divone{
        height: 400px;
        padding-left: 50px;
        margin-left:30px ;
    }
    .divtwo{
        height: 400px;
    }
    ul li a{
        color: white;
        text-decoration: none;
    }
    a:hover{
        background-color: white;
    }


</style>
<body class="bg-info">
<div class="bg-info">
    <h1 class=" container-fluid bg-info text-white text-center p-3 mb-0"style="font-size: 5vmax;"><b><i>Get your test from Megdine</i></b></h1>
    <div class="link">
    <ul id="nav" style="list-style: none;color: #ffffff"class="navbar nav-pills list-group list-group-horizontal p-2 mt-0 mx-auto justify-content-center">
        <li class="mr-3 nav-item active"><a href="homepage.php"><b>Home</b></a></li>
        <li class="mr-3 nav-item"><a href="services.php"><b>Services</b></a></li>
        <li class="mr-3 nav-item"><a class="nav-link active" href="about.php"><b>About Us</b></a></li>
        <li class="mr-3 nav-item"><a href="contuct.php"><b>Contact Us</b> </a></li>
    </ul>
</div>
    <div class="colum container bg-info w-auto h-auto row col ml-auto mr-auto">
        <div class="colone container bg-white col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 w-50 float-left ">
            <h3 class="font-italic font-weight-bold" style="font-size: 5vmax;" ><u>About Megdine</u></h3>
            <p class="text-left">Megdine is a company that deals with foodstaffs. We majorly focus on ceremonies and parties.
                We have a group of qualified chefs with each focusing on his area of specification hence having admirable teamwork cooperation
                i.e <ul class="align-content-center justify-content-center">
            <li>Souf chef</li>
            <li>Butcher chef</li>
            <li>vegetable chef</li>
            <li>Pastry chef</li>
            <li>Pantry chef etc</li></ul>
            The team is being lead with their executive chief, who badget and control all the activity in a ceremony
            </p>
        </div>

    <div class="coltwo bg-secondary col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 container w-50 float-right text-white" >
        <h3 class="font-weight-bold font-italic"style="font-size: 5vmax;"><u>What we do</u></h3>
        <p>We coordinate the preparation, creation, delivery and presentation of food for clients. We also do non food related responsibilities
        like <i><b>decoration, clean-up and tent set-up.
                </b> </i>Catering has been our passion for the past five years and we gro by the feedback of our client. We do different type of catering
        shown below; <ul class="align-content-center justify-content-center">
            <li>Wedding Catering</li>
            <li>Concession Catering</li>
            <li>Coporate catering</li>
            <li>Social Event Catering</li></ul></p>
    </div>
    </div>
    <?php include "footer.php"?>
</div>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>