<?php 
$koneksi = new mysqli('localhost','root','','usport');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login & Sign Up Form Concept</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="login/css/style.css">
</head>

<body>
    <div class="cotn_principal">
        <div class="cont_centrar">
            <div class="cont_login">
                <div class="cont_info_log_sign_up">
                    <div class="col_md_login">
                        <div class="cont_ba_opcitiy">
                            <h2>LOGIN</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                        </div>
                    </div>
                    <div class="col_md_sign_up">
                        <div class="cont_ba_opcitiy">
                            <h2>SIGN UP</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                        </div>
                    </div>
                </div>
                <div class="cont_back_info">
                    <div class="cont_img_back_grey">
                        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                    </div>
                </div>
                <div class="cont_forms">
                    <div class="cont_img_back_">
                        <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                    </div>
                    <form method="POST">
                      <div class="cont_form_login">
                          <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                          <h2>LOGIN</h2>
                          <input type="text" placeholder="Email/username" name="email" />
                          <input type="password" placeholder="Password" name="password" />
                          <button class="btn_login" onclick="cambiar_login()" name="login">LOGIN</button>
                      </div>
                    </form>

                    <form method="POST">
                      <div class="cont_form_sign_up">
                          <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                          <h2>SIGN UP</h2>
                          <input type="text" placeholder="Email" name="email" />
                          <input type="text" placeholder="Username" name="username" />
                          <input type="password" placeholder="Password" name="password" />
                          <input type="password" placeholder="Confirm Password" name="confirm-password" />
                          <button class="btn_sign_up" onclick="cambiar_sign_up()" name="register">SIGN UP</button>
                      </div>
                  </form>

                </div>
            </div>
        </div>
    </div>


    <script src="login/js/index.js"></script>
<!-- Untuk form pendaftaran -->
    <?php

      if (isset($_POST['register'])) {
        $email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING);
        $confirm = filter_input(INPUT_POST, 'confirm-password', FILTER_SANITIZE_STRING);

        if ($password != $confirm) {
          echo"password berbeda";
          header('location: login.php');
          return;
        }

        $sql = "INSERT INTO user (username, email, password) VALUES('$username','$email','$password')";
        $query = mysqli_query($koneksi,$sql);

        //ketika query sudah berhasil disimpan maka akan beralih ke halaman login
        if($query){
            header("location: login.php");
        }else{
           echo mysqli_error($koneksi);
      }

    }

?>

<!-- untuk form login -->
<?php 
    if (isset($_POST['login'])) {
        echo$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING );
        echo$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM user WHERE (username = '$email' OR email = '$email') AND password='$password'";
        $query = mysqli_query($koneksi,$sql); 

        $rowCount = mysqli_num_rows($query);

        //bind parameter ke query
        if ($rowCount == 0) {
            echo "<h3>gagal login</h3>";
            // header("location: login.php");
        } else {
            header("location: home.php");

        }
    }
 ?>

</body>

</html>