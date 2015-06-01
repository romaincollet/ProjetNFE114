<html>
<head>
	<title>Login Form</title>
</head>
<body>

<p>Please type your email and 'test' password to login</p>

<div style="text-align: center">
<?php 
  $this->load->helper('form');
  echo form_open('projet');
  echo "Email : ".form_input('email', 'test@cnam-nfe114.fr');
  echo "Password : ".form_password('password');
  echo form_submit('mysubmit', 'Submit');
?>
  </form>
</div>

</body>
</html>