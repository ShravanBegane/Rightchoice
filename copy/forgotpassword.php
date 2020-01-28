<!DOCTYPE html>
<html>
  <head>
    <title>RightChoice</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
  <head>
</head>
<body>
<div class="login-page">
  <div class="form" >
    <img class="img-responsive user-logo" src="https://internal.rightchoice.io/layouts/v7/resources/Images/vtiger.png">
    <!-- form class="register-form">
           <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->
<?php if (isset($_GET['login']))
{
?>	
<div style="color: red;">Invalid credentials </div>

<?php } ?>

    <form class="login-form" action="fp1.php" method="post">
        <input type="text" placeholder="Username" required type="text" name="username" id="user_name">
	<input type="email" placeholder="Email" required type="text" name="emailId" id="user_name">
        <button id="submit" type="submit" name="form_submitted" class="btn btn-success login_comx1">Submit</button><br/><br/>
        <button id="button" type="button" name="submit" class="login_comx2" value="Please enter details and submit"><a href="signin.php" style="color:#000;text-decoration:none;">Back</a></button>
    </form>
  </div>
</div>
<style type="text/css">
  
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
   background: url(https://internal.rightchoice.io/copy/login_bg1.jpg);
  width: 360px;
  padding: 1% 0 0;
  margin: auto;
}
    .user-logo {
    height: 110px;
    margin: 0 auto;
    padding-top: 0px;
    padding-bottom: 10px;
}
.img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: block;
    max-width: 100%;
    height: auto;
    }

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button success {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button default {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #fff;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.btn {
    display: inline-block;
    padding: 15px 110px;
    border-radius: 1px;
}


.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.app-footer p {
      width: 100%;
    text-align: center;
    background: #FBFBFB;
    margin-bottom: 1px;
    padding: 4px 0;
    border-top: 1px solid #DDDDDD;
    margin-top: 0px;
    position:fixed;
   left:0px;
   bottom:0px;
   height:30px;
   width:100%;
        }
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: url('login_bg1.jpg')no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
/* background: #76b852;*/ /* fallback for old browsers */
  /*background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);*/*/
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

/*******************************Shruti******************************************/
.login_comx1
{
    width: 100%;
    box-shadow: 0px 1px 0px 1px #011c32;
    padding:12px;
    background-color: #1291f9;
    font-weight:600;
}


.btn-success:hover {
    color: #fff;
    background-color: #2874f0;
    border-color: #011c32;
}
.btn-success {
    border-color: #011c32;
}
.btn-success:active:hover
{
    background-color: #2874f0;
    color: #011c32;
}

.login_comx2 a
{
    color:#2874f0!important;
    font-weight: 600;
    padding: 0px;
}

.login_comx2 {
    width: 100%;
    background-color: #fff;
    border: #fff;
    padding: 0px;
}

.btn-success {
color: #fff;
background-color: #1391F9!important;
border-color: #011c32!important;
box-shadow: 0px 1px 0px 1px #011c32;
}


/*******************************Shruti******************************************/
</style>
<script type="text/javascript">
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
<footer class="app-footer">
  <p>
    Powered by RightChoice - &nbsp;&nbsp;© 2020&nbsp;&nbsp;|
    <a href="http://internal.rightchoice.io" target="_blank">RightChoice</a>&nbsp;|&nbsp;
    <a href="#" target="_blank">Privacy Policy</a>
  </p>

</body>
</html>