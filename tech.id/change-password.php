<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<section>
		<header>
		<a href="#"><img src="logo.png" class="logo"></a>
           
		   <ul>
			   <li><a href="index.html">Home</a></li>
			   <li><a href="FT.html">Future Technology</a></li>
			   <li><a href="tech_t.php">Technology Type</a></li>
			   <li><a href="about.html">About</a></li>
			   <li><a href="contact.html">Contact</a></li>
			   <li><a href="index.php">Login</a></li>
		   </ul>
		</header>
		<div class="content">
			<div class="textBox">
				<h2>Change Password</h2>
				<br>
				<br>
				<br>
				<br>
    <form action="change-p.php" method="post">
     	<h2>Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Old Password</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Old Password">
     	       <br>

     	<label>New Password</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="New Password">
     	       <br>

     	<label>Confirm New Password</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Confirm New Password">
     	       <br>

     	<button type="submit">CHANGE</button>
          <a href="home.php" class="ca">HOME</a>
     </form>
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