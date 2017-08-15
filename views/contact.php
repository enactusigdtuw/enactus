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
                    <input type="text" name="name" placeholder="Name" required><br>
                    <input type="email" name="email" placeholder="Email Address" required><br>
                    <input type="textarea" name="msg" placeholder="Message" required><br>
					<button class="nl-submit" type="submit" name="submit">Submit</button>
                </form>				
            </div>
        </div>
    </div>
</div>
