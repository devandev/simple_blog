<?php
require_once "core/init.php";
if(empty(Session::get('nama'))){
    Redirect::to('index');
}
$id = $_GET['id'];
$post = new Post();
$delete = $post->deleteData('tb_blog',$id);
if($delete){
    Redirect::to('index');
}
