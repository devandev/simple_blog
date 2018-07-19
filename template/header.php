<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/js/ckeditor/contents.css">
    <title>Document</title>
</head>
<body>
<header>
    <div class="wraper">
    <?php if(empty(Session::get('nama'))){ ?> 
        <div class="btn-login">
            <a href="login.php">Login</a>
        </div>
    <?php } ?>
    <?php if(!empty(Session::get('nama'))){ ?>   
        <div class="btn-logout">
            <a href="logout.php">Logout</a>
        </div>
    <?php } ?>
    </div>
    <?php if(!empty(Session::get('nama'))){ ?>
        <div class="create-post">
            <a href="create.php">Add Post</a>
        </div>
    <?php } ?>
    <div class="header-description">
        <h1 class="title">The <span class="stabillo">Name</span> Of the Blog</h1>
        <h5 class="code">This blog is create by [] and Love</h5>
    </div>
</header>
<div class="btn-toggle">
    <a href="#">&equiv;</a>
</div>
<nav>
    <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="aboutme">my Porpolio</a></li>
        <li><a href="logout.php">about Me</a></li>
    </ul>
</nav>