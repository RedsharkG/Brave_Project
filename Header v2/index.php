<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" />
    <title>Header</title>
</head>
<body>

<div class="header-nav">
<div class="logo">
    <img src="../Logo%20with%20Name.png" alt="Logo with name" class="header-logo"/>
</div>

    <div class = "header-links">
    <a href="../Home/index.php" class="anchor"> Home </a>
    <a href="../About us/index.php" class="anchor"> About us </a>
    <a href="../Contact%20Us/index.php" class="anchor"> Contact  </a>
    <a href="../Help/index.php" class="anchor"> Help </a>
    </div>

    <div class="dropdown">
        <button class="dropbtn"> Services </button>
        <div class="dropdown-content">
            <a href="#">Login</a>
            <a href="#">Register</a>
            <a href="#">Size Chart</a>
        </div>
    </div>

    <div class = "search">

        <input type="text" placeholder="Search" name="search" />
        <button class = "right-arrow"> &rarr; </button>

    </div>


</div>

</body>
</html>