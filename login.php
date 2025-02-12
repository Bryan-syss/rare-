<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container" id="signup" style="display: none;">
    <h1 class="form-title">Add Student</h1>
    <form action="register.php" method="post">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" placeholder="first name" required>
        <label for="fName">first name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="Last name" required>
        <label for="lName">Lastname</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" placeholder="password" name="password" required>
        <label for="password">Password</label>
      </div>
      
      <div class="input-group">
        <i class="fas fa-phone"></i>
        <input type="number" id="phone" name="phone" placeholder="Phone number" required>
        <label for="phone">Phone number</label>
      </div>
      <div class="input-group">
        <i class="fa fa-venus"></i>
        <input type="gender" id="gender" name="gender" placeholder="Gender" required>
        <label for="gender">Gender</label>
      </div>
      <input type="submit" class="btn" value="Add Student" name="signUp">
      <p class="or">
        -------or-------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      
    </form>
    <div class="links">
      <p>Already Have Account ?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>



  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form action="register.php" method="post">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" placeholder="password" required>
        <label for="password">Password</label>
      </div>
      
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="Sign In" name="signIn">
      <p class="or">
        -------or-------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      
    </form>
    <div class="links">
      <p>Dont't have account yet ?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>
  <script src="login.js"></script>
</body>
</html>