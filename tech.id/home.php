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
     
     <section>
     <header>
            <a href="#"><img src="logo.png" class="logo"></a>
           
          
        </header>
    <div class="content">
<div class="textBox">
    
     <h2>Hello, <?php echo $_SESSION['name']; ?></h2>
     <nav class="home-nav">
     	<a href="change-password.php">Change Password</a>
        <a href="logout.php">Logout</a>

        <a href="index.html">Home</a>
     </nav>
     </div>
     </div>
     </section>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>