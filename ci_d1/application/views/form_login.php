<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

//header("location: http://localhost/login/index.php/member/login");
}
?>
<head>
<title>Login Form</title>
<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: #fff;">หน้าหลัก</a>
  </div>
</div>
</nav>


<?php
if (isset($logout_message)) {
echo "<div class='message'>";
echo $logout_message;
echo "</div>";
}
?>
<?php
if (isset($message_display)) {
echo "<div class='message'>";
echo $message_display;
echo "</div>";
}
?>


	<center>
<h2>Login Form</h2></center>
<hr/>
<?php echo form_open('member/user_login_process'); ?>
<?php
echo "<div class='error_msg'>";
if (isset($error_message)) {
echo $error_message;
}
echo validation_errors();
echo "</div>";
?>
<center>
<label>Username :</label>
<input type="text" name="username" id="name" placeholder="username"/><br /><br />
<label>Password :</label>
<input type="password" name="password" id="password" placeholder="password"/><br/><br />
<input type="submit" value=" Login " name="submit"/><br />
</center>
</div>
</div>
</body>
</html>