<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("enactus", $connection);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
$query = mysql_query("insert into enactus(name, email, msg) values ('$name', '$email', '$msg')");
}
mysql_close($connection); 
?>
<?php
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("enactus", $connection);
$f=0;
$name = $email = $msg = $error = "";
if (isset($_POST['submit'])) {
	if(empty($_POST["msg"])) {$error = "Please enter your message";}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {$error = "Invalid Email format"; }
	else {$msg = test_input($_POST["msg"]);}
	if(empty($_POST["email"])) {$error = "Email ID is required";} 
	else {$email = test_input($_POST["email"]);}
    if(empty($_POST["name"])) {$error = "Name is required";} 
	else {$name = test_input($_POST["name"]);}
	if(empty($error)){
$query = mysql_query("insert into enactus(name, email, msg) values ('$name', '$email', '$msg')");
$f=1;
	}
}
mysql_close($connection); 
?>
<div id="schedule-page" class="page">
    <div class="border" data-position="top"></div>
    <div class="border" data-position="right"></div>
    <div class="border" data-position="left"></div>
    <div class="border" data-position="bottom"></div>
    <div class="vertical-container">
        <div class="vertical-content">
            <div class="container">
			
			<div id="heading">Contact Us</div>
			
			<div id="text">If you are interested in collaborating with us or have any queries, feedback or suggestions regarding our projects, feel free to contact us. We'd love to hear from you!</div>

			<div id="alt_contact">
				about the members that can be contacted or alternative contact information
                </div>			
                
				<form class="nl-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" target="_top" accept-charset="UTF-8">		
				<legend style="text-align:center;font-size:25px;color:#ff6600;text-transform:uppercase;">Get in touch!</legend>
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="email" name="email" placeholder="Email Address"><br>
                    <input type="textarea" name="msg" placeholder="Message"><br>
					<button class="nl-submit" type="submit" name="submit" data-send-text="Sending...">Submit</button>					
                </form>
				<?php if(empty($error) && $f==1){ ?>
                    <p class="success">Thanks! We will be in touch asap :)</p>
					<?php } else{ ?>
                    <p class="error"><?php echo $error;?></p>
					<?php }?>
            </div>
        </div>
    </div>
</div>


