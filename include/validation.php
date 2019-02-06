<?php

    //Валидация email
    function is_email($val){
        if (!filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
            return json_encode (array ('success' => true));
        } else {
            return json_encode (array ('success' => false));
        }
    }

    //Валидация homepage
    function is_url($val){
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            die('Not a valid URL');
        }
        return json_encode (array ('success' => true));
    }

    //Валидация captcha
    function is_captcha_right($val){
        session_start();
        return (!empty($val) && $val == $_SESSION['code']);
    }

    //Валидация message
    function is_message($val){
        return json_encode (array ('success' => true));
    }
