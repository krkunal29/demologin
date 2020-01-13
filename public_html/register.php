<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="register, signup">

    <title>User Registration</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="../assets/css/core.min.css" rel="stylesheet">
    <link href="../assets/css/app.min.css" rel="stylesheet">
    <link href="../assets/css/style.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
    <style media="screen">
      .error{
        color:red;
      }
    </style>
  </head>

  <body class="min-h-fullscreen bg-img center-vh p-20" style="background-image: url(assets/img/bg/b.jpg);" data-overlay="7">

    <div class="card card-round card-shadowed px-50 py-30 w-400px mb-0" style="max-width: 100%;">
      <h5 class="text-uppercase">Sign up</h5>
      <br>

      <form method="POST" id="userreg" data-provide="validation" class="">
        <div class="form-group">
          <label for="username">First Name</label>
            <input type="text" class="form-control" name="fname" id="fname" data-provide="tooltip" data-placement="top" title="User's First Name" onkeypress="return AlphaBets(event,this)"   required>

        </div>
        <div class="form-group">
          <label for="username">Middle Name</label>
          <input type="text" class="form-control" id="mname" name="mname" data-provide="tooltip" data-placement="top" title="User's Middle Name " onkeypress="return AlphaBets(event,this)" required>

        </div>
        <div class="form-group">
                    <label for="username">Last Name</label>
          <input type="text" class="form-control" id="lname" name="lname" data-provide="tooltip" data-placement="top" title="User's Last Name " onkeypress="return AlphaBets(event,this)" required>

        </div>

        <div class="form-group">
          <label for="email">Email Id</label>
          <span id="email-availability" style="float:right;"></span>
          <input type="email" class="form-control" id="email" name="email" data-provide="tooltip" data-placement="top" title="User's EmailId Example:sample@gmail.com" onchange="checkEmailAvailability(this.value);"  required autocomplete="off">


        </div>

        <div class="form-group">
            <label for="password">Password</label>
          <input type="password" class="form-control" data-provide="tooltip" data-placement="top"  id="pwd" name="pwd" required>

        </div>
        <div class="form-group">
            <label for="password">Confirme Password</label>
          <input type="password" class="form-control" data-provide="tooltip" data-placement="top" id="cpwd" name="cpwd" required>

        </div>
        <div class="form-group">
          <label for="password-conf">User Role</label>
          <span id="cname-availability" style="float:right;"></span>
          <select class="form-control" name="userrole" id="userrole">
              <option value="">Select Users</option>
          <option value="1">Users</option>
          <option value="2">Admin</option>
          </select>

        </div>
        <div class="form-group">
          <label for="password-conf">Contact Number</label>
          <!-- onblur="phonenumber(this);" -->
          <input type="text" class="form-control" id="phone"  name="phone" maxlength="10" minlength="10" onkeypress="return isNumberKey(event)" data-provide="tooltip" data-placement="top" title="User's Contact Number Example:9898989898"   required>

          <!-- <span id="msgid"></span> -->
        </div>
        <br>
        <button class="btn btn-bold btn-block btn-primary" type="submit">Register</button>
      </form>

      <!-- <hr class="w-30px"> -->

      <p class="text-center text-muted fs-13 mt-20">Already have an account? <a class="text-primary fw-500" href="login.php">Sign in</a></p>
    </div>

    <!-- Scripts -->
    <script src="../assets/js/core.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
    <script src="../js/jquery.validate.js"></script>
    <script src="../validate/register_validate.js"></script>
    <script src="../js/register.js"></script>
    <script src="../js/validations.js"></script>

  </body>
</html>
