<?php
    if (!isset($_COOKIE['userID'])) {
        header("Location: ../login_page/login-form.php");
    }
?>