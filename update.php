<?php
require_once "core/init.php";
$post = new Post();
$id = $_GET['id'];
if(empty(Session::get('nama'))){
    Redirect::to('index');
}
$result = $post->selectFilter('tb_blog','id',$id);
if(Input::get('btn_update')){
    $update = $post->updateData('tb_blog',$id,[
        'title'     => Input::get('title'),
        'dateBlog'  => Input::get('dateBlog'),
        'content'   => Input::get('content'),
        'tag'       => Input::get('tag')
    ]);
    
    if($update){
        Redirect::to("single",'id',Input::get('id'));
    }
}
require_once "template/header.php";
?>
<div class="container">
    <h2 class="center">Edit Page :</h2>
    <?php foreach($result as $key => $value){ ?>
        <form  class="form-create" action="" method="post">
            <div class="form-group">
                <label> Date :</label>
                <input type="date" name="dateBlog" value="<?= $value['dateBlog'];?>">
            </div>
            <div class="form-group">
                <label> Title :</label>
                <input type="text" name="title" value="<?= $value['title'];?>">
            </div>
            <div class="form-group">
                <label>Content :</label>
                <textarea name="content" cols="100" rows="50"><?= $value['content'];?></textarea>
            </div>
            <div class="form-group">
                <label> tag :</label>
                <input type="text" name="tag" value="<?= $value['tag'];?>">
            </div>
            <div class="form-group">
                <input type="submit" value="Update" name="btn_update">
            </div>
        </form>
    <?php } ?>
</div>
<?php
require_once "template/footer.php";
?>