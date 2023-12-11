<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" />
    <title> Header </title>
</head>
<body>

<header class="header-container">

    <img src="../Logo%20with%20Name.png" alt="logo with name" class="header-image"/>

    <div class = "search">

        <input type = "text" placeholder="Search.." name="search" class="search-box"/>
    </div>




    <div class = "header-nav">

        <a href="../Home/index.php" class = "anchor"> Home </a>
        <a href="../Our Team/index.php" class = "anchor"> Our Team </a>
        <a href="../Help/index.php" class = "anchor"> Help </a>
        <a href="../Contact Us/index.php" class = "anchor"> Contact </a>
<!--        <a href="../Services/index.php">  </a>-->

        <div class="dropdown">
            <button class="dropbtn"> Services </button>
            <div class="dropdown-content">
                <a href="#">Login</a>
                <a href="#">Register</a>
                <a href="#">Size Chart</a>
            </div>
        </div>





</header>
</body>
</html>