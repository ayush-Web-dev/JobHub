<?php

    include('authentication/authentication.php');
    include('dbcon.php');


    if(isset($_POST['logout_btn']))
    {
        //session_destroy();
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);

        // echo '<script>alert("Logged out successfully")</script>';
        header("Location: loginPage.php");
        exit(0);
    }

?>