<?php
    \controllers\accessController::controlAccess();
    if(isset($_POST['register'])){
        \controllers\accessController::signUp(uniqid($_POST['id']),$_POST['name'],$_POST['password'],$_POST['email']);
    }
?>

<section class="containerAccess itemsFlex alignCenter justCenter">
    <div class="wrap">
        <form method="post" class="itemsFlex alignCenter justCenter flexWrap marginDownSmall">
            <input type="text" name="name" id="name" placeholder="Seu nome..." autocomplete="off" />
            <input type="text" name="email" id="email" placeholder="Seu email..." autocomplete="off" />
            <input type="password" name="password" id="password" placeholder="Sua senha..." />
            <input type="hidden" name="id" id="id" />
            <button type="submit" name="register" id="register" class="w30">Create Account</button>
        </form>
        <div class="textRight">
            <p>Already have an account? <a href="<?php echo BASE; ?>login">SignIn!</a></p>
        </div>
    </div>
</section>