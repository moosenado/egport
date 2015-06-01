<?php include('header.php'); 

$formOutput = "";
$from = "";
$message = "";
$email = "";
$name = "";
$err = "";

$namePat = "/^[a-z ,.'-]+$/i";
$emailPat = "/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";

$validateArray = array();

if(isset($_POST['submit'])){

	require_once "Mail.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$from = $name . ' ' . '<' . $email . '>';
	$message = $_POST['message'];

	if (empty($name) || empty($email) || empty($message)){
		$err .= "Those fields are empty!";

	}elseif(!preg_match($namePat, $name)){
		array_push($validateArray, "Is that really your name?");
		
	}elseif(!preg_match($emailPat, $email)){
		array_push($validateArray, "Check your email again.");
		
	}else{

	$to = "egrabish@gmail.com";
	$subject = "EG Form Submission";

	$host = "ssl://mail.stem.arvixe.com";
	$port = "465";
	$username = "test@egrabishtest.com";
	$password = "egrabishtest";

	$headers = array ('From' => $from,
		'To' => $to,
		'Subject' => $subject);

	$smtp = Mail::factory('smtp',
		array ('host' => $host,
			'port' => $port,
			'auth' => true,
			'username' => $username,
			'password' => $password));

	$body = $message;

	$mail = $smtp->send($to, $headers, $body);

	$formOutput = "Thanks! I will be in touch soon.";

	}
}

?>

	<main role="main">

		<div class="innerTitle">
			<h1 class="center titlePadding"><i class="fa fa-envelope" id="fapadding"></i> Contact Me</h1>
		</div>

		<div id="formStyle">

			<span><p><?php echo $err . '<br />'; ?></p></span>
			<span><p><?php foreach($validateArray as $key => $value){ echo $value . '<br />' ; } ?></p></span>
			<span id="formoutput"><p><?php echo $formOutput; ?></p></span>

			<form method="post" action="">

				<p>
					<label class="lbl">Name</label>
					<br />
					<input type="text" name="name" id="Name" value="<?php echo $name; ?>" class="textinput" />
				</p>
				<p>
					<label class="lbl">Email</label>
					<br />
					<input type="text" name="email" id="Email" value="<?php echo $email; ?>" class="textinput"/>
				</p>
				<p>
					<label class="lbl">Message</label>
					<br />
					<textarea name="message" id="message" rows="8" class="textinput"><?php echo $message; ?></textarea>
				</p>

				<p>
					<input type="submit" name="submit" id="button" value="Submit" class="btn"/>
					<input type="reset" name="reset" id="button" value="Reset" class="btn"/>
				</p>
			</form>

		</div>
		
	</main>

</body>

</html>