<div class="form-logout">
    <form action="login.php"
          method="POST">

        <button type="submit" name="logout" id="logout">
            Logout
            <i class="fas fa-sign-out-alt"></i>
        </button>

    </form>
</div>

<?php
    if (isset($_POST['login'])){
        session_start();
        echo '<script>alert("Login Realizado!")</script>';
    }
?>