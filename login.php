<?php
require_once "core/init.php";
$user = new Users();
$validate = new Validate();
if(Input::get('btn_login')){
    $validate->check([
        'username' => [
            'required'  => true
            ],
        'password' => [
            'required'  => true
            ]
    ]);
    if($validate->passed()){
        $login = $user->login('tb_user', Input::get('username'), Input::get('password'));
        if($login){
            Session::set('nama',Input::get('username'));
            Redirect::to('index');
        }
    }
    
}
require_once "template/header.php";
?>
<div class="container">
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

<?php
    if(Input::get('btn_login')){
    if(!$login){ ?>
        <div class="error">
            <ul>
                <li>username atau password salah !</li>
            </ul>
        </div>
<?php    } 
    }?>
    <h2 class="center">Login Page :</h2>
    <form  class="form-login" action="" method="post">
        <input type="text" name="username" placeholder="Email :">
        <input type="password" name="password" placeholder="Password :">
        <input type="submit" value="Login" name="btn_login">
    </form>
</div>
<?php
require_once "template/footer.php";
?>