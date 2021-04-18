<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="signUpTest.css">

<body>

  <div id="gradient-border">

    <form id="regForm" action="signUpProcessingTest.php">
      <h1><u>Register</u></h1>

      <div class="tab">
        <h2>Select Username and Password:</h2>
        <h3><u>Username</u></h3>
        <p><input type="text" name="username" placeholder="Username..."  /></p>

        <h3><u>Password</u></h3>
        <p><input type="password" name="password" placeholder="Password..." /></p>

        <h3><u>Confirm Password</u></h3>
        <p><input type="password" name="confirmPassword" placeholder="Confirm Password..." /></p>
      </div>

      <div class="tab">
        <h2>Welcome! Can We Have Your Name?</h2>
        <h3><u>First Name</u></h3>
        <p><input type="text" name="first_name" placeholder="Enter Your First Name..." /></p>

        <h3><u>Last Name</u></h3>
        <p><input type="text" name="last_name" placeholder="Enter Your Last Name..." /></p>

      </div>

      <div class="tab">
        <h2>Wonderful! How Would We Contact You?</h2>

        <h3><u>Phone Number</u></h3>
        <p><input type="text" name="phone_number" placeholder="Enter Your Cell Phone Number..." /></p>

        <h3><u>Email</u></h3>
        <p><input type="text" name="email" placeholder="Email..."  /></p>

      </div>
      <div class="tab">
        <h2>Okay and Where Exactly Do You Live?</h2>

        <h3><u>Country</u></h3>
        <p><input type="text" name="country" placeholder="Select Your Country..."/></p>

        <h3><u>City</u></h3>
        <p><input type="text" name="city" placeholder="Enter Your City..." /></p>

        <h3><u>State</u></h3>
        <p><input type="text" name="state" placeholder="State..." /></p>

        <h3><u>Address</u></h3>
        <p><input type="text" name="address" placeholder="Enter Your Address..." /></p>

      </div>

      <div style="overflow:auto;">
        <div>
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>

  </div>
  </form>

  <script src="signUpTest.js">

  </script>

</body>

</html>
