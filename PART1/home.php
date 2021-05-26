<!DOCTYPE html>
<html>
<head>

<title>Registration and Login Page</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
</head>
<body>
<?php

$FullName = $Username = $Password = $ConfirmPassword = $Email = $Phone = $DateOfBirth = $SocialSecurityNumber = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $FullName = test_input($_POST["Full Name"]);
    $Username = test_input($_POST["User Name"]);
    $Password = test_input($_POST["Password"]);
    $ConfirmPassword = test_input($_POST["Confirm Password"]);
    $Email = test_input($_POST["Email"]);
    $Phone = test_input($_POST["Phone number"]);
    $DateOfBirth = test_input($_POST["Date Of Birth"]);
    $SocialSecurityNumber = test_input($_POST["Social Security Number"]);
}

?>
<div class="main-block">
   <div class="left-part">
   <i class="cap"></i>
   <h1>Register for your account</h1>

   
   </div>
   <form method="POST" action="safe.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   <div class="title">
   <i class="fas fa-pencil-alt"></i> 
         
          <h2>Please fill in this form to create an account.</h2>
        </div>
        <div class="info">
        <?php

        echo $FullName;
        echo $Username;
        echo $Password;
        echo $ConfirmPassword;
        echo $Email;
        echo $Phone;
        echo $DateOfBirth;
        echo $SocialSecurityNumber   ;

         ?>

          <input class="fname" type="text" name="FullName" placeholder="Full name" required>
          <input type="text" name="Username" placeholder="Username" required>
          <input type="password" name="Password" placeholder="Password" required>
          <input type="password" name="Confirm Password" placeholder="Confirm Password" required>
          <input type="email" name="Email" placeholder="Email" required>
          <input type="tel" name="Phone number" placeholder="Phone number" required>
          <input type="date" name="date of birth" placeholder="Date Of Birth">
          <input type="number" name="social security number" placeholder="Social Security Number">
          
        </div>
        
        <button type="submit" href="/">Submit</button>
      </form>
    </div>
  </body>
</html>

   </div>

  </form>
 
  </div>
     
 </body>

</html>