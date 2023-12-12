<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="../Header/style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../Footer/style.css" />

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Forget Password</title>
</head>

<body>

<header>    <?php include '../Header/index.php'; ?>
</header>

<div class="topic">
    forget password
</div>

<div>
    <img src="images/watermark.png" class="water-mark">
</div>

<div >
    <center>
    <form name="forgetpswd-form" action="index.php" method="post" class="form-container">

        <div class="el-01">
            <p>Enter your E-mail/Mobile number :</p>
        </div>


          <div class="el-02">
              <input type="text" name="E-mail/Mobile number" class="t1">
          </div>
          <div class="el-03">
              <button type="submit" class="b1">Confirm</button>
        </div>


        <div class="el-04">
            <p >Enter the 4 number verification code :</p>
        </div>


        <div class="el-05">
            <input type="number" name="v-code" class="t2">
        </div>
            <div class="el-06">
                <button type="submit" class="b2">Confirm</button>
            </div>


        <div class="el-07">
            <p class="ptag">Verification code will be at your E-mail inbox or messages.</p>
        </div>


        <div class="el-08">
            <p >Enter a new password :</p>
        </div>
        <div class="el-09">
            <input type="password" name="E-mail/Mobile number" class="t3">
        </div>


        <div class="el-10">
            <p>Confirm password :</p>
        </div>
        <div class="el-11">
            <input type="password" name="E-mail/Mobile number" class="t4">
        </div>

        
        <div class="el-12">
            <button type="submit" class="b3">Clear</button>
            <button type="reset" class="b4">Confirm</button>

        </div>

        <div></div>



    </form>
    </center>
  </div>
</div>

<footer>
    <?php include '../Footer/index.php'; ?>
</footer>

</body>
</html>
