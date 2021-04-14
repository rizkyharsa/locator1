<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
box-sizing: unset;
width: 720px;
}

*:focus {
    outline: none;
}
body {
font-family: Arial;
background-color: #3498DB;
padding: 50px;
}
.register {
margin: 20px auto;
width: 300px;
}
.register-screen {
background-color: #FFF;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #777;
}

.register-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: left;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 30px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 500px;
transition: border .5s;
height: 20px;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #21325A;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 30px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 500px;
  height: 20px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #2980B9;
}

.register-link {
  font-size: 14px;
  color: #21325A;
  display: block;
    margin-top: 12px;
}
h1{
	color: #21325A;
}


</style>
</head>
<body>
  <form action="registerAdmin.php" method="POST">
    <div class="register">
        <div class="register-screen">
            <div class="app-title">
                <h1>UUM Locator</h1>
            </div>

            <div class="register-form">
                <div class="control-group">
                <input type="text" class="register-field" placeholder="Name" name="name">
                </div>

                <div class="control-group">
                <input type="text" class="register-field" placeholder="Email" name="email">
                </div>

                <div class="control-group">
                <input type="password" class="register-field" placeholder="Password" name="password">
                </div>

                <div class="control-group">
                <input type="text" class="register-field" placeholder="Address" name="address">
                </div>

                <button type="submit" class="btn">Register</button>
                <a class="register-link" href="#">Already have an account?</a>
                <a class="register-link" href="login.php">Login</a>
            </div>
        </div>
    </div>
  </form>
</body>
</html>
