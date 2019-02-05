<?php

    //Валидация email
    function is_email($val){
        if (!filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            echo "E-mail адрес '$email_b' указан неверно.\n";
            return false;
        }
    }

    //Валидация homepage
    function is_url($val){
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            die('Not a valid URL');
        }
        return true;
    }

    //Валидация captcha
    function is_captcha_right($val){
        session_start();
        if(isset($val) & !empty($val)){
            if($val == $_SESSION['code']){
                return true;
            }else{
                echo "Invalid captcha";
                return false;
            }
        }
    }

    //Валидация message
    function is_message($val){
        //Удаляем html tags
        strip_tags($val);
        return true;
    }
