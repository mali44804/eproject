<?php
include "includes/header.php";
include "includes/topbar.php";
include "includes/sidebar.php";

?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
    <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <h2 class="mb-3">Add Cases</h2>
    <div class="form-group">
      <label for="case">Add Case</label>
      <input type="text" id="case"  class="form-control mb-3">
      <input type="submit" name="submit" class="w-10 btn btn-success"> 
    </div>
    <h2 class="mt-4">Add Lawyer</h2>
            <div class="form-group row mb-4">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <label for="name" class="form-label">Lawyer name</label>
                    <input type="text" class="form-control form-control-user" id="name"
                        placeholder="Enter lawyer Name" name="name" required>
                </div>
                <div class="col-sm-6 mt-4">
                <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                 </div>
            </div>
            <div class="form-group row mb-4">
              <div class="col-sm-6 mb-3 mb-sm-0"> 
              <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-user" id="email"
                    placeholder="Email Address" name="email" required>
                    </div>
                    <div class="col-sm-6 ">
                    <label for="Phone" class="form-label">Phone</label>
                <input type="phone" class="form-control form-control-user" id="phone"
                    placeholder="Phone No" name="phone" required>
                    </div>
            </div>
            <div class="mb-3">
  <label for="formFileMultiple" class="form-label">Enter lawyer picture</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>

                
            </div>
            <div class="mb-3 form-group w-100">
              
            <label for="Address" class="form-label">Address</label>
                <textarea type="text" class="form-control form-control-user " id="Address"
                    placeholder="Enter Lawyer address" name="Address" rows="3" required></textarea>    
                    
</div>
            <!-- <a class="btn btn-primary btn-user btn-block" name="register">
                Register Account
            </a> -->
            <input type="submit" class="btn btn-success btn-user w-75 btn-block mb-5" name="register" >
    </div>

</div>

</div>

<?php
// include("includes/footer.php");
?>
</body>

</html>