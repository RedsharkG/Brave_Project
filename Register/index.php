<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Sign Up Form</title>
  <style>
    body {
       font-family: 'Nudista', sans-serif;
            background: linear-gradient(90deg, #140040 13.46%, #000 89.19%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
    }

    #signupForm {
      width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff00;
      border-radius: 5px;
    }

    #signupForm h1 {
      text-align: center;
      color: #ffffff;
      margin-bottom: 20px;
    }

    #signupForm label {
      display: block;
      margin-bottom: 5px;
      color: #ffffff;
    }

    .name-group {
      display: flex;
      gap: 20px;
    }

    .name-group input {
      flex: 1;
      height: 40px;
      border-radius: 20px;
      padding: 10px;
      box-sizing: border-box;
    }

    .age-gender-group {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }

    .gender-options {
      display: flex;
      gap: 10px;
    }

    .gender-options label {
      display: flex;
      align-items: center;
      margin-right: 10px;
    }

    .gender-options input {
      margin-right: 5px;
    }

    #signupForm input[type="number"],
    #signupForm input[type="email"],
    #signupForm input[type="password"],
    #signupForm input[type="text"] {
      width: 100%;
      height: 40px;
      border: 1px solid #cccccc;
      border-radius: 20px;
      padding: 10px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    #signupForm .button-group {
      display: flex;
      justify-content: center;
      /* Align items to the center */
      margin-top: 15px;
      /* Added margin to separate buttons */
    }

    #signupForm button[type="submit"],
    #signupForm button[type="reset"] {
      width: 15%;
      /* Adjusted width to allow some gap */
      height: 40px;
      border: none;
      border-radius: 20px;
      cursor: pointer;
    }

    #signupForm button[type="submit"] {
      background-color:#BA3902;
      color: #ffffff;
    }

    #signupForm button[type="submit"]:hover {
      background-color: #0056b3;
    }

    #signupForm button[type="reset"] {
      background-color:#BA3902;
      color: #ffffff;
    }
  
    #signupForm div {
  text-align: center;
  color: #ffffff;
    }
    
  </style>
</head>

<body>
  <form id="signupForm">
    <div class="name-group">
      <label for="firstName">FIRST NAME:</label>
      <input type="text" id="firstName" name="firstName" required>
      <!-- Add label for Last Name -->
      <label for="lastName">SECOND NAME:</label>
      <input type="text" id="lastName" name="lastName" required>
    </div>
    <br>
    <div class="age-gender-group">

      <label for="age">AGE:</label>
      <input type="number" id="age" name="age" required>
        GENDER:
      <div class="gender-options">
        <label>
          <input type="radio" name="gender" value="male" required> M
        </label>
        <label>
          <input type="radio" name="gender" value="female" required> F
        </label>
      </div>
    </div>

    <label for="address">ADDRESS:</label>
    <input type="text" id="address" name="address" required>
    <label for="email">E-MAIL:</label>
    <input type="email" id="email" name="email" required>
    <label for="postalCode">POSTAL CODE:</label>
    <input type="text" id="postalCode" name="postalCode" required>
    <label for="password">CREATE A PASSWORD:</label>
    <input type="password" id="password" name="password" required>
    <label for="confirmPassword">CONFIRM PASSWORD:</label>
    <input type="password" id="confirmPassword" name="confirmPassword" required>

    <!-- Button Group Container -->
    <div class="button-group">
      <button type="submit">CANCEL</button>
      <button type="reset">SUBMIT</button>
    </div>
    <div>
      <p>Already have an account? login</p>
    </div>
  </form>
</body>

</html>