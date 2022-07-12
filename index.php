
<?php
$insert = false;
if(isset($_POST['name'])){
$server = 'localhost';
$username = 'root';
$password = '';

$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("Connection is faild dut to".mysqli_connect_error());
}
//echo "File is submitted"
$name = $_POST["name"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$desc = $_POST["desc"];

$sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;

if($con->query($sql) == true){

    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";

}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="London image">
    <div class="container">
        <h1>Welcome to London Trip from</h1>
        <p>Enter your details and submit this From to confirm to participation in th Trip</p>
        <?php 
        if($insert == true){
         echo " <p class='submitmsg'>Thank you for submitting your from.We are happy to see you joining for the London Trip
         </p>";}

        ?>
               
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any question"></textarea>
   
            <button class="btn">Submit</button>
  
        </form>
     </div>
     <script src="indux.js"></script>
  
</body>
</html>