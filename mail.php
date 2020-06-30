<?php
 if (isset($_POST["submit"])){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $msg = $_POST["message"];

    $to ="bryondickers@gmail.com";
    $subject = "Catering message";
    $message = "Name: ".$name."\n". "Client email: ".$email."\n"."Message from client: "."\n\n".$msg;
    $header = "From: ".$email;

    if (mail($to, $subject,$message,$header)){
        echo "<h4 id='alert'></h4>" ;
    }
    else{
        echo "<h4 id='dangeralert'></h4>";
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>array</title>
</head>
<body>
</body>
<script>
    document.getElementById('alert')window.alert("Message sent,Thank you <?php echo $name?> you'll recieve ou feedback");
    document.getElementById('dangeralert')window.alert("Something went wrong, confirm the inputs");

</script>
</html>
