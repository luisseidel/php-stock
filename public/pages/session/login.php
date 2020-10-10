<div class="login">
    <form action="./public/pages/session/logout.php"
        method="POST">

        <input type="text" placeholder="Login (email@email.com)" name="email">
        <input type="password" placeholder="Senha" name="senha">

        <button type="submit" name="login" id="login">
            Login
            <i class="fas fa-sign-in-alt"></i>
        </button>
    </form>
</div>

<?php
    if (isset($_POST['logout'])){
        session_destroy();
        echo '<script>alert("Você saiu!")</script>';
    }
?>