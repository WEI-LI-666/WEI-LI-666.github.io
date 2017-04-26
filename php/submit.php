
<!-- saved from url=(0065)http://demos.webicode.com/html/zap/one-pages-demos/php/submit.php -->
<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

	//send email
    mail("arpk156258@outlook.com", "This is an email from:" .$email, $message);
}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script language="javascript" type="text/javascript">
		window.alert("Sent Successfuly.");
	</script>
</head>
<body>

</body>
</html>