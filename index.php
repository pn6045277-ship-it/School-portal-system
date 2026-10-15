<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STUDENTS PORTAL</title>
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <header>
    <div class="school_name">
      <img src="Pictures/logo.png">
      <div class="sch_name">
        <h1>Bingwa Secondary School</h1>
        <ul>
          <li id="no_decoration_li">Discipline</li>
          <li>Knowledge</li>
          <li>Success</li>
        </ul>
      </div>
    </div>
    <div class="login_link">
      <p class="login_paragraph">Already have an account?
        <a href="#"> Login</a>
      </p>
    </div>
  </header>
  <main>
    <div class="form_container">
      <div class="flex_section">
        <form action="register.php" method="post" id="sign_up">
          <div class="flex_image">

            <div>
              <h2 class="create_account">Create Your Account</h2>
              <p class="fill_in_details">Fill in the form below to Register.</p>
            </div>
            <img src="Pictures/logo.png" alt="SCHOOL LOGO">
          </div>
          <input type="text" name="students_name" placeholder="Full Name">
          <input type="text" name="students_username" placeholder="Username">
          <input type="email" name="email" placeholder="Email Address">
          <input type="password" name="password" placeholder="Password">
          <input type="password" name="password_2" placeholder="Confirm Password">
          <p class="role_par">Select your Role:</p>
          <input type="radio" name="role" id="teacher" value="Teacher">
          <label for="teacher">Teacher</label>
          <input type="radio" name="role" id="student" value="Student">
          <label for="student">Student</label>
          <button type="submit" name="sign_up">Sign Up</button>
          <p class="have_account">Already have an account?
            <button type="button" id="log">Login</button>
          </p>
        </form>
        <form action="register.php" method="post" id="login">
          <div class="flex_image">

            <div>
              <h2 class="create_account">Welcome Back!</h2>
              <p class="fill_in_details">Login to your account.</p>
            </div>
            <img src="Pictures/logo.png" alt="SCHOOL LOGO">
          </div>
          <input type="email" name="email" placeholder="Email / Username">
          <input type="password" name="password" placeholder="Password">
          <input type="checkbox" value="remember_me" name="remember" id="remember">
          <label for="remember">Remember Me</label>
          <label class="forgot_password"><a href="#"> Forgot Password?</a></label>
          <button type="submit" name="sign_up">Login</button>
          <h3 class="have_account">OR</h3>
          <button type="button" id="register">Create an Account</button>
          <p class="foot">&COPY; 2026 Bingwa Secondary School.All Rights Reserved.</p>
        </form>
        <div class="blue_section">
          <h2>Join</h2>
          <h2>Bingwa</h2>
          <h2>Family</h2>
          <div class="center_img">
            <img src="Pictures/logo.png" alt="SCHOOL LOGO">
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="script.js"></script>
</body>

</html>