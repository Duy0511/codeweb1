<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
<?php require_once 'ketnoi.php'?>
<?php
if (isset($_POST['add'])) {
  
  $user = mysqli_real_escape_string($conn, $_POST['user']);// gan giu lieu vao $user
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);
  $sql = mysqli_query($conn, "select * from signup where username='$user' && password='$pass'"); //kiem tra du lieu gan nhung gia tri bang con so
  $num = mysqli_num_rows($sql);// kiem tra nhung gia tri ton tai bang cac xem so
  $row = mysqli_fetch_assoc($sql);// tra ve bang mot mang gia tri
  if ($num > 0) { // neu lon hon 0 thi dung du lieu
    $row = mysqli_fetch_assoc($sql);
    $_SESSION['USERNAME'] = $row['username'];
    header("location: ./Musicpage/index.html");
  } else {
    $msg = "Please Enter Valid details !";
  }
}
$conn->close();
?>
<div class="login-page">
  <div class="form">

    <form method="POST" action="">
      <lottie-player src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"  background="transparent"  speed="1"  style="justify-content: center;" loop  autoplay></lottie-player>
      <input name="user" type="text" placeholder="&#xf007;  username"/>
      <input name="pass" type="text" id="password" placeholder="&#xf023;  password"/>
      <i class="fas fa-eye" onclick="show()"></i> 
      <br>
      <div  class="error">
        <?php echo $msg; ?>
      </div>
      <br>
      <button name="add" >LOGIN</button>
      <p class="message"></p>
    </form>

    <form class="login-form">
      <button type="button" onclick="window.location.href='signup.php'">SIGN UP</button>
    </form>
  </div>
</div>

  <script>
    function show(){
      var password = document.getElementById("password");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
  </script>
</body>
</html>

