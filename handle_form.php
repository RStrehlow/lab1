<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.5 - handle_form.php #4

$name = $_REQUEST['first_name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];

// Print the submitted information:
//if ( !empty($_POST['first_name']) && !empty($_POST['last_namme']) && !empty($_POST['phone']) && !empty($_POST['email']) 
//	&& !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['gender']) && !empty($_POST['age'])  && !empty($_POST['comments'])  ) {
	echo "<p>Thank you, <strong>{$_POST['first_name']}</strong>, for the following comments:</p>
<pre>{$_POST['comments']}</pre>
<p>We will reply to you at <em>{$_POST['email']}</em>.</p>\n";
//} else { // Missing form value.
//	echo '<p>Please go back and fill out the form again.</p>';
//}
?>
</body>
</html>