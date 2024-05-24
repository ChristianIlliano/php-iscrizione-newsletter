<?php

function check_dot_snail() {

    if (isset($_POST['email'])) {
        $email = $_POST["email"];
    
        if (str_contains($email, '.') && str_contains($email, '@')) {
            echo "<span class='alert-primary'>Accesso consentito</span>";
        } else {
            echo "<span class='alert-danger'>Accesso negato</span>";
        }
    }

}

?>