<?php
session_start();
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
    <?php
    include('config.php');
    if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $email_search = "SELECT * from `attorney-registration` where email = '$email'";
      $query = mysqli_query($con,$email_search);
      $email_count = mysqli_num_rows($query);
      if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $pass_decode = password_verify($password,$db_pass);
        if($pass_decode){
          echo "Login succ";
          ?>
          <!-- <script>location.replace("index.php");</script> -->
          <?php
        }else{
          echo "Incorrect Password";
        }
      }else{
        echo "Invalid email";
      }
    }
    
    ?>

    <div class="card mb-3">
      <div class="row g-0 d-flex align-items-center">
        <div class="col-lg-4 d-none d-lg-flex">
          <img src="img/login.jpg" alt="Trendy Pants and Shoes"
            class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
        </div>
        <div class="col-lg-8">
          <div class="card-body py-5 px-md-5">
            <h1 style="text-align: center;font-family: sans-serif;">Attorney Login</h1>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"> 
              <!-- Email input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example1">Email address</label>
                <input type="email" name="email" id="form2Example1" class="form-control" />
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example2">Password</label>
                <input type="password" name="password" id="form2Example2" class="form-control" />
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
              <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 w-100">Sign in</button>
  
              <a href="attorneyregister.php"><h5 style="text-align: center;">Don't have account</h5></a>
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