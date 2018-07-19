<?php
require_once 'core/init.php';
$post = new Post();
$id = $_GET['id'];
$result = $post->selectFilter('tb_blog','id',$id);
require_once "template/header.php";
?>

<div class="form-container">
    <form class="form-search" action="" method="post">
        <input type="search" name="search" class="input-search" placeholder="Search...">
        <input type="submit" value="Search" class="btn-search" name="btn-search">
    </form>
</div>
<div class="container">
    <?php require_once "template/sidebar.php"; ?>
    <div class="section">
        <?php foreach ($result as $key => $value) { ?>
        <h1><?= $value['title'];?></h1>
        <label class="code date"><?= $value['dateBlog'];?>,<a href="#">Ivan</a></label>
        <p><?= $value['content'];?></p>
        <?php } ?>
    </div>
</div>
<?php
require_once "template/footer.php";
    
