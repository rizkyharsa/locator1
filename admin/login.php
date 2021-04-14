<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    
    body {
      font-family: Arial;
      background-color: #3498DB;
      padding: 100px;
      background-image: url('images/uum.jpg');
      background-repeat: no-repeat;
      background-size: cover;

    }

    .login-screen {
      background-color: #FFF;
      padding: 100px;
      border-radius: 5px
    }

    .app-title {
      text-align: center;
      color: #777;
    }

    .login-form {
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
      line-height: 4px;
      padding: 19px 0;
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

    .login-link {
      font-size: 14px;
      color: #21325A;
      display: block;
      margin-top: 12px;
    }

    h1 {
      color: #21325A;
    }
  </style>
</head>

<body>
  <form action="loginAdmin.php" method="POST">
    <div class="login-screen">
      <div class="app-title">
        <h1>UUM Locator</h1>
      </div>

      <div class="login-form">
        <div class="control-group">
          <input type="text" class="login-field" value="" placeholder="Email" name="email">
          <label class="login-field-icon fui-user" for="login-name"></label>
        </div>

        <div class="control-group">
          <input type="password" class="login-field" value="" placeholder="Password" name="password">
          <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>
        
        <button type="submit" class="btn" name="login">Login</button>
        <a class="login-link" href="register.php">Register new account</a>
        <a class="login-link" href="#">Forgot password</a>
      </div>
    </div>
  </form>
</body>

</html>