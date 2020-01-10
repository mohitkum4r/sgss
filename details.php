<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600&display=swap" rel="stylesheet">
  <link href="css/styles1.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Sign up | SGSS</title>
  <header class="top-bar">
    <span class="logo">
      <img class="header-image" src="assets/logo_p.png" alt="Government of Andra Pradesh"></img>
    </span>
    <span class="branding">
      <h1 class="header-text">
        Government of Andra Pradesh <br />
        ఆంధ్రప్రదేశ్ ప్రభుత్వం </br>
      </h1>
    </span>
    <span class="nav-bar">
      <h2>
        Students Grievance Support System
        <span class="nav">
          <span class="dropdown">
            <button class="dropbtn"><i class="material-icons-outlined md-18">menu</i></button>
            <div class="dropdown-content">
              <a href="#">About</a>
              <a href="#">Contact</a>
              <a href="#">More</a>
            </div>
          </span>
          <a class="nav-links" href="help.php"><i class="material-icons-outlined md-18">help_outline</i></a>
          <a class="nav-links" href="../home.html"><i class="material-icons-outlined md-18">home</i></a>
        </span>
      </h2>
    </span>
  </header>
  <div class="heading">
    <span class="page-head">
      Sign up
    </span>
  </div>
</head>

<body>
  <div class="container-special">
    <form action="register.php" onsubmit="return checkPass(this);" method="POST">

      Name:<br> <input type="text" class="text-box" name="name" value="" readonly></input><br />
      Age:<br> <input type="number" class="num-box" name="age" value="" readonly></input><br />
      Gender:<br>
      <select class="categories-list" name="sex" readonly>
        <option class="" value="Male">Male</option>
        <option class="" value="Female">Female</option>
        <option class="" value="Other">Other</option>
      </select>
      <br />
      University:<br> <input type="text" class="text-box" name="univ" value="" readonly></input><br />
      College:<br> <input type="text" class="text-box" name="clg" value="" readonly></input><br />
      Department:<br> <input type="text" class="text-box" name="dept" value="" readonly></input><br />
      E-Mail:<br> <input type="email" class="text-box" name="mail" value="" readonly></input><br />
      Mobile:<br> <input type="tel" class="text-pass" name="mob" value="" readonly></input><br />
      Password:<br> <input id="orp" type="password" class="text-pass" value="" name="pwd" readonly></input><br>
      Re-enter password:<br> <input id="dup" type="password" class="text-pass" value="" name="cpwd" readonly></input><br>
    </form>
  </div>
</body>
<footer class="footer">
  <div class="quick-links">
    <p>
      <a href="../home.html">Home</a> |
      <a href="Contact.html">Contact</a> |
      <a href="Feedback.html">Feedback</a> |
      <a href="privacy.html">Privacy</a>
    </p>
  </div>
  <div class="contents">
    <p class="footer-text">
      The Student Grievance Support System (SGSS) portal is used for the Students to report their Grievance and issues if they affected by some difficulties. Student can report their Complaints under University/College/Department levels based on their Complaints the Action will be taken by the Committee Members.

A committee member will read the Students Complaints and they validate the complaints.based on the validation committee member will mark it read, spam, reply through email, and the Complaints will be taken to the  Head if the issues go on serious. The Head will take action under the Government of AP.
    </p>
  </div>
  <div class="copyright-notes">
    <span class="copyight-info">
      &copy; All rights reserved. 2019-2020, Government of AP.
    </span c>
  </div>
</footer>

<script>
  function checkPass(signUpForm) {
    if (signUpForm.pwd.value == signUpForm.cpwd.value) {
    } else {
      alert("Password and confirm passwords are different.");
      return false;
    }
    if ((signUpForm.pwd.value).length >= 6) {
    } else {
      alert("Password should contain atleast six characters.");
      return false;
    }
    if (signUpForm.age.value >= 15) {
      return true;
    } else {
      alert("Go away kid!");
      return false;
    }
  }
</script>

</html>
