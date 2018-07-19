<?php
require_once 'core/init.php';
$post = new Post();
$validate = new Validate();
$title = $_GET['title'];
$result = $post->selectSearch('tb_blog',$title);
$validate->check([
    'search' => [
        'required'  => true
        ]
]);

if(Input::get('btn_search')){
    if($validate->passed()){
        Redirect::to('search','title',Input::get('search'));
    }
}
require_once "template/header.php";
?>
<div class="form-container">
<?php if(Input::get('btn_search')) {?>
<?php   if(!$validate->passed()){ ?>
        <div class="error">
            <ul>
<?php   $variable = $validate->errors();
        foreach ($variable as $key => $value) { ?>
                <li><?= $value;?></li>
<?php   } ?>
            </ul>
        </div>
<?php } ?>
<?php } ?>
    <form class="form-search" action="" method="post">
        <input type="search" name="search" class="input-search" placeholder="Search...">
        <input type="submit" value="Search" class="btn-search" name="btn_search">
    </form>
</div>
<div class="container">
    <?php require_once "template/sidebar.php"; ?>
    <?php if(!empty($result)){ ?>
        <?php foreach($result as $key => $value){ ?>
        <div class="section">
        <?php if(!empty(Session::get('nama'))){ ?>
            <div class="wraper">
                <div class="btn-update">
                    <a href="update.php?id=<?= $value['id'];?>">Update</a>
                </div>
                <div class="btn-delete">
                    <a href="delete.php?id=<?= $value['id'];?>">Delete</a>
                </div>
            </div>
        <?php } ?>
            <div class="post-title">
                <h1><?= $value['title'];?></h1>
            </div>
            <label class="code date"><?= $value['dateBlog'];?>,<a href="#">Ivan</a></label>
            <div class="content-post">
                <?= $post->excerpt($value['content']);?>
            </div>
            
            <div class='btn-readmore'>
                <span class="readM">
                    <a href="single.php?id=<?= $value['id']?>">Read More &raquo;</a>
                </span>
            </div>
            <hr class="batas-list">
        </div>
    <?php 
        }
    }else{ ?>
        <div class="error">
            <ul>
                <li>Data Tidak Di temukan !</li>
            </ul>
        </div>  
<?php } ?>
</div>
<?php
require_once "template/footer.php";
    
