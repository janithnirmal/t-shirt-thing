<?php

class email_server {
    public static function emailSave($email) {
        $_SESSION['email'] = $email;
    }

    public static function get_email() {
        if (isset($_SESSION['email'])) {
            return $_SESSION['email'];
        } else {
            return null;
        }
    }
}
