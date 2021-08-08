<script type="text/javascript">

function validation()
{
  var username= document.getElementById("username");
  var password= document.getElementById("password");
 
  if (username.value.trim()=="") {
    document.getElementById("usernameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usernameErr").innerHTML=  "";
  }


  if(password.value.trim()=="")
  {
    document.getElementById("passwordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(password.value.length<8)
    {
    document.getElementById("passwordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("passwordErr").innerHTML= "";
    }
}

return true;

}


function checkUsername()
{
    var username= document.getElementById("username");

  if (username.value.trim()=="") {
    document.getElementById("usernameErr").innerHTML=  "* User Name is required";
    return false;
  }
  else {
    document.getElementById("usernameErr").innerHTML=  "";
  }
}

function checkPassword()
{
    var password= document.getElementById("password");
  if(password.value.trim()=="")
  {
    document.getElementById("passwordErr").innerHTML= "*Password is requied";
    return false;
  }
  else {
    if(password.value.length<8)
    {
    document.getElementById("passwordErr").innerHTML= "*Password must not be less than eight (8) characters";
      return false;
    }
    else {
      document.getElementById("passwordErr").innerHTML= "";
    }
}
}

</script>


<?php 
include 'header.php';
if(isset($_POST['submit']))
{
echo $_POST['username'];
echo $_POST['password'];
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
    .error {color: #FF0000;}
    </style>
</head>
<body>

<form  style="border:2px;  padding: 1em;" onclick="return validation()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
  <h2>Login</h2>

  Username: 
  <input type="text" onkeypress="checkUsername()" onblur="checkUsername()" name="username" id="username" placeholder="Enter Username" class="form-control">
  
  <span  id="usernameErr" class="error">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
  <br>
  Password:
  <input type="password"  onkeydown="checkPassword()" onblur="checkPassword()" name="password" id="password" placeholder="Enter Password" class="form-control" >
  
  <span  id="passwordErr" class="error">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
  <br>

  <input type="submit" name="submit" value="Submit" class="btn btn-info">
</form>

</body>
</html>
