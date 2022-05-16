<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Data Base</title>
</head>
<body>
    <form action = "insert.php" method = "post">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label>First name</label>
      <input type="text" class="form-control" name ="fname"  id="fname" placeholder="First name">
    </div>
    <div class="col-md-4 mb-3">
      <label>Last name</label>
      <input type="text" class="form-control" name ="lname" id="lname" placeholder="Last name">
    </div>
    <div class="col-md-4 mb-3">
      <label>Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="username">@</span>
        </div>
        <input type="text" class="form-control" name ="username" id="username" placeholder="Username">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>City</label>
      <input type="text" class="form-control" name ="city" id="city" placeholder="City">
    </div>
    <div class="col-md-6 mb-3">
      <label>District</label>
      <input type="text" class="form-control" name ="district" id="district" placeholder="District">
    </div>
   
  </div>
  <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="Male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="Female"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="Others"
                    />Others</label
                  >
                </div>
  <button class="btn btn-primary" type="submit" name = "submit">Submit form</button>
</form>


    

</body>
</html>