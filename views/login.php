<?php
    \controllers\accessController::controlAccess();
    if(isset($_POST['login'])){
        \models\accessModel::signIn($_POST['email'],$_POST['password']);
    }
?>

<section class="containerAccess itemsFlex alignCenter justCenter">
    <div class="wrap">
        <form method="post" class="itemsFlex alignCenter justCenter flexWrap marginDownSmall">
            <input type="text" name="email" id="email" placeholder="Seu email..." autocomplete="off" />
            <input type="password" name="password" id="password" placeholder="Sua senha..." />
            <button type="submit" name="login" id="login" class="w30">Logar</button>
        </form>
        <div class="textRight">
            <p>Don't have an account? <a href="<?php echo BASE; ?>register">Create!</a></p>
        </div>
    </div>
</section>