<?php
  session_start();
if (!isset($_SESSION["name"])) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STUDENTS PORTAL</title>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <header class="home_page">
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
    <div class="nav_bar">
      <a href="#">Home</a>
      <a href="#">Academics</a>
      <a href="#">Admissions</a>
      <a href="#">News</a>
      <a href="#" id="no_margin">Contact</a>
    </div>
    <div class="search_icon">
      <button type="button"> <i class="fa-solid fa-magnifying-glass"></i></button>
    </div>
    <div class="name_letter">
      <!-- <h2 class="first_letter"><?php echo $_SESSION["username"] ?></h2>
      <h3 class="user_name_display"><?php echo $_SESSION["name"] ?></h3> -->
      <a href="logout.php"  id="logout_btn">Log out</a>
    </div>
  </header>
  <main class="home_background">
    <div class="container_background">
      <div class="flex_container">
        <div class="school_description">
          <h2 class="wel_message">Welcome to</h2>
          <h1 class="description_sch">Bingwa Secondary School.</h1>
          <ul>
            <li id="no_decoration_li">Discipline</li>
            <li>Knowledge</li>
            <li>Success</li>
          </ul>
          <p class="describe">We provide quality education,
            build character and prepare our students for a brighter future.
          </p>
          <div class="button_links">
            <a href="#" id="explore">Explore Our School</a>
            <a href="#" id="contact">Contact Us</a>
          </div>

        </div>
        <div class="log_image">
          <img src="Pictures/logo.png">
        </div>
      </div>
    </div>
  </main>
</body>

</html>
