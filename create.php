<?php
require_once "core/init.php";
$validate = new Validate();
$post = new Post();
if(empty(Session::get('nama'))){
    Redirect::to('index');
}
if(Input::get('btn_publish')){
    $validate->check([
        'title' => [
            'required'  => true,
            'min'       => 5,
            'max'       => 30
            ],
        'dateBlog' => [
            'required'  => true
            ],
        'content' => [
            'required'  => true,
            'min'       => 10,
            ],
        'tag' => [
            'required'  => true,
            'min'       => 5,
            'max'       => 20,
            ]
    ]);

    if($validate->passed()){
        $create = $post->insertData('tb_blog',[
            'title'     => Input::get('title'),
            'dateBlog'  => Input::get('dateBlog'),
            'content'   => Input::get('content'),
            'tag'       => Input::get('tag')
        ]);
        if($create){
            Redirect::to("index");
        }
    }
}

require_once "template/header.php";
?>
<div class="container">
<?php if(!$validate->passed()){ ?>
        <div class="error">
            <ul>
        <?php   $variable = $validate->errors();
                foreach ($variable as $key => $value) { ?>
                    <li><?= $value; ?></li>
         <?php  } ?>
            </ul>
        </div>
  <?php } ?>
    <h2 class="center">Create Page :</h2>
    <form  class="form-create" action="" method="post">
        <div class="form-group">
            <label> Date :</label>
            <input type="date" name="dateBlog">
        </div>
        <div class="form-group">
            <label> Title :</label>
            <input type="text" name="title">
        </div>
        <div class="form-group">
            <label>Content :</label>
            <textarea id="editor" class="ckeditor" name="content" cols="100" rows="50"></textarea>
        </div>
        <div class="form-group">
            <label>Tag :</label>
            <input type="text" name="tag">
        </div>
        <div class="form-group">
            <input type="submit" value="Publish" name="btn_publish">
        </div>
    </form>
</div>
<?php
require_once "template/footer.php";
?>