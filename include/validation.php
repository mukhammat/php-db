<?php

    //Валидация email
    function is_email($val){
        return filter_var($val, FILTER_VALIDATE_EMAIL);
    }

    //Валидация homepage
    function is_url($val){
        return filter_var($url, FILTER_VALIDATE_URL);
    }

    //Валидация captcha
    function is_captcha_right($val){
        session_start();
        return (!empty($val) && $val == $_SESSION['code']);
    }

    //Валидация message
    function is_message($val){
        return  strip_tags($val) == $val;
    }