<?php
    $name = $email = $message =$submit ="";
    $nameErr = $emailErr =$messageErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["name"])){
               echo $nameErr ="Please enter name";
            }else{
                $name = valida($_POST["name"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$name)){
                    echo $nameErr= "please enter name";
                }
            }

            if (empty($_POST["email"])){
                echo $emailErr = "Email is required";
            }else{
                $email = valida($_POST["email"]);
                if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo $emailErr = "please enter email";
                }
                }
            if (empty($_POST["message"])){
                echo $messageErr="Message is required";
            }
            else{
                $message= valida($_POST["message"]);
            }
        }



    function valida($data){
        stripslashes($data);
        htmlspecialchars($data);
        trim($data);
        return $data;
    }


?>



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
   span{
        color: #ff1e00;
        font-size:8pt;
        margin-top: 0px;
       margin-bottom: 25vh;
    }

</style>
<body class="bg-info"style="font-size: 2vmax;">
<div>
    <h1 class="container-fluid bg-info text-white text-center p-3 mb-0"style="font-size: 5vmax;"><b><i>Get your test from Megdine</i></b></h1>
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
    <div class="fdiv flex-column" style="line-height: 0pt">

    <form action="mail.php"method="post" >
        <input type="text" name="name" placeholder="Enter your name" class="form-group form-control"style="background-color: #1b1e21;color: white;font-size: 2vmax;margin-bottom: 5px;">
        <span style="font-size: 2vmax;"><?php echo $nameErr;?></span>
        <input type="email"name="email" placeholder="Enter your email"class="form-group form-control"style="background-color: #1b1e21;color: white;font-size: 2vmax;margin-bottom: 5px;margin-top: 15px;">
        <span style="font-size: 2vmax;"> <?php echo $emailErr;?></span>
        <textarea name="message" id="" cols="30" rows="10" class="txt form-group form-control"placeholder="Enter message"style="height: 100px; margin-top: 15px;margin-bottom: 5px; background: #1b1e21;color: white; font-size: 2vmax"></textarea>
        <span style="font-size: 2vmax;"><?php echo $messageErr ;?></span>
        <input type="submit"name="submit" value="Send message" class="form-group form-control text-white"style="background-color: grey; font-size: 2vmax;margin-top: 15px;" >
        <span></span>
    </form>
    </div>
    <?php include "footer.php"?>
</div>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>