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

<div class="form-box">
    <form name="Form"  action="" method="post">

    <p class="el-01">Enter your E-mail/Mobile number:</p><br>
    <input class="el-02" type="text" name="E-mail/Mobile number">
    <button class="el-03" type="submit">Confirm</button>

    <br><br>

    <p class="el-04">Enter the 4 number verification code:</p><br>
    <input class="el-05" type="number" name="v-code">
    <button class="el-06" type="submit">Confirm</button><br>

    <br><br>

    <p class="el-07">Verification code will be at your E-mail inbox or messages.</p>
    <br><br><br>

    <p class="el-08">Enter a new password:</p><br>
    <input class="el-10" type="password" name="E-mail/Mobile number">

    <br><br>

    <p class="el-09">Confirm password:</p><br>
    <input class="el-10" type="password" name="E-mail/Mobile number"><br><br>
    <button class="el-11" type="submit">Confirm</button>
    <button class="el-12" type="submit">Confirm</button>

    </form>

</div>



<footer>
    <?php include '../Footer/index.php'; ?>
</footer>

</body>
</html>
