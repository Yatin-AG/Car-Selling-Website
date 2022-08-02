<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>

<html>

<head>

    <title>HOME</title>

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <h1><mark>Hello,you can choose the cars here. <?php echo $_SESSION['name']; ?></mark></h1>

     <a href="logout.php">Logout</a>
     </br><a href="contact.php">Contact Us</a>

</body>

</html>

<?php 

}else{

     header("Location: index.php");

     exit();

}

 ?>