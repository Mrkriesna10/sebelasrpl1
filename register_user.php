<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style/register.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="proses_register_user.php" method="POST">
      <div class="input-box">
        <input type="text" name="username" placeholder="Username" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <div class="input-box">
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
      </div>
      <div class="input-box">
        <input type="number" name="no_telepon" placeholder="Nomor Telepon" required>
      </div>
      <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea>
        <br><br>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login_user.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>