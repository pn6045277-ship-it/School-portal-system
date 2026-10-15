        <?php
        include("connect.php");
        session_start();

        $message = null;
        if (isset($_POST["sign_up"])) {
          $name = filter_input(
            INPUT_POST,
            "students_name",
            FILTER_SANITIZE_SPECIAL_CHARS
          );
          $username = filter_input(
            INPUT_POST,
            "students_username",
            FILTER_SANITIZE_SPECIAL_CHARS
          );
          $email = filter_input(
            INPUT_POST,
            "email",
            FILTER_VALIDATE_EMAIL
          );
          $password = $_POST["password"];
          $password_2 = $_POST["password_2"];
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $radio = isset($_POST["role"]);
          $radio = $_POST["role"];
          if (empty($name)) {
            $message = "Please all fields.";
          } elseif (empty($username)) {
            $message = "Fill in your username";
          } elseif (empty($password)) {
            $message = "Fill in your password";
          } elseif (empty($password_2)) {
            $message = "Please confirm your password";
          } elseif (!isset($_POST["role"])) {
            $message = "Please select your role";
          } elseif ($password !== $password_2) {
            $message = "Password mismatch.";
          } else {

            try {
              $sql = "INSERT INTO users (username,email,password,role)
            VALUES('$username','$email','$hash','$radio')";
              mysqli_query($connection, $sql);
              $letter = trim(strtoupper(substr($username, 0, 1)));
              $_SESSION["username"] = $letter;
              $_SESSION["name"] = $username;
              $_SESSION["password"] = $hash;
              header("Location: home.php");
              exit;
            } catch (mysqli_sql_exception) {
              echo "Duplicate entry<br>";
            }
            $message = "registered";
          }
        }
        
        mysqli_close($connection);
