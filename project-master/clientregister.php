<?php
session_start();
?>
<?php
include 'config.php';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $message = $_POST['message'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
  $email_query = "SELECT * from `client-registration` where email = '$email'";
  $query = mysqli_query($con,$email_query);
  $emailcount = mysqli_num_rows($query);
  if($emailcount>0){
    ?><script>alert("email already exist")</script>
        <?php
  }
  else{
    if($password === $cpassword){
      $insert_query = "INSERT INTO `client-registration` (name, age, email, phone, address, city, state, zip, message, password, cpassword) VALUES('$name','$age','$email','$phone','$address','$city','$state','$zip','$message','$pass','$cpass')";
      $iquery = mysqli_query($con,$insert_query);
      if($iquery){
        ?><script>alert("Inserted succ")</script>
        <?php
      }else{
        ?><script>alert("Insert unsucc")</script>
        <?php
      }
    }
    else{
      echo "Password is not matching";
    }
  }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-image-vertical {
position: relative;
overflow: hidden;
background-repeat: no-repeat;
background-position: right center;
background-size: auto 100%;
}

@media (min-width: 1025px) {
.h-custom-2 {
height: 100%;
}
}
    </style>
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link
          href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap"
          rel="stylesheet">
  
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  
      <!-- Libraries Stylesheet -->
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
      <!-- boostrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(212, 218, 222);">
  <!-- Section: Design Block -->
  <div class="container mt-5">
<section class=" text-center text-lg-start">
    <style>
      .rounded-t-5 {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
      }
  
      @media (min-width: 992px) {
        .rounded-tr-lg-0 {
          border-top-right-radius: 0;
        }
  
        .rounded-bl-lg-5 {
          border-bottom-left-radius: 0.5rem;
        }
      }
    </style>
    <div class="card mb-3">
      <div class="row g-0 d-flex align-items-center">
        <div class="col-lg-4 d-none d-lg-flex">
          <img src="img/login.jpg" alt="Trendy Pants and Shoes"
            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-8">
          <div class="card-body py-5 px-md-5">
            
            <h1 style="text-align: center;text-transform: uppercase;font-family: sans-serif;">Client Register</h1>
            <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
              <!-- name input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example1">Name</label>
                <input type="text" name="name" id="form2Example1" class="form-control" required/>
              </div>
              <!-- Age input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example1">Age</label>
                <input type="number" name="age" id="form2Example1" class="form-control" required/>
              </div>
             
              <!-- Email input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" name="email" id="form2Example1" class="form-control" required/>
              </div>
              <!-- Phone input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example1">Phone no</label>
                <input type="tel" name="phone" id="form2Example1" class="form-control" required/>
              </div>
              <!-- Address input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example1">Address</label>
                <input type="text" name="address" id="form2Example1" class="form-control" required/>
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="inputCity" required>
              </div>
              <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select" name="state" required>
                  <option>Sindh</option>
                  <option>Balochistan</option>
                  <option>Punjab</option>
                  <option>KPK</option>
                  <option>Gilgit</option>
                  <option>Kashmir</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" name="zip" class="form-control" id="inputZip" required>
              </div>
              
              <!-- Message input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Message</label>
                <textarea class="form-control" type="text" name = "message" aria-label="With textarea"></textarea>
              </div>
              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Password</label>
                <input type="password" name= "password" id="form2Example2" class="form-control" required/>
              </div>
              <!--Confirm Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Confirm Password</label>
                <input type="password" name="cpassword" id="form2Example2" class="form-control" required/>
              </div>
  
              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                  </div>
                </div>
  
                <div class="col">
                  <!-- Simple link -->
                  <a href="#!">Forgot password?</a>
                </div>
              </div>
  
              <!-- Submit button -->
              <button type="submit" name = "submit" class="btn btn-primary btn-block mb-4 w-100">Register</button>

              <a href="clientlogin.php"><h5 style="text-align: center;">Already have account</h5></a>
            </form>
  
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!-- Section: Design Block -->
</body>
</html>