<?php

function redirect_authenticated_user ($user, $path)
{
    if (isset($user) ) {
        header('Location: ' . $path);
    }
}

function redirect_not_authenticated_user ( $user, $path ){

    if (!isset($user)) {
        header('Location: ' . $path);
    }

}


function redirect_all(){

    switch ($_SESSION['user']['user_level']) {
        case '0':
            header('Location:' . PAGE3);
            break;
        case '1':
            header('Location:' . ADMIN);
            break;
        case '2':
            header('Location:' . PAGE2);
            break;
        case '3':
            header('Location:' . MAINFOODPAGE_ALT);
            break;
    }
}


function redirect_auth_user_level($field, $user_level, $path)
{

    if (isset($_SESSION['user'])) {

        if ($field === $user_level) {
            header('Location:' . $path);
        }
    }

}

function redirect_not_admin()
{

    if (isset($_SESSION['user'])) {

        if ($_SESSION['user']['user_level'] === '0') {
            header('Location:' . PAGE3);
        } else if ($_SESSION['user']['user_level'] === '2') {
            header('Location:' . PAGE2);
        } else if ($_SESSION['user']['user_level'] === '3') {
            header('Location:' . MAINFOODPAGE_ALT);
        }
    }
}

function redirect_cashiers_customers(){

    if (isset($_SESSION['user'])) {

        if ($_SESSION['user']['user_level'] === '0') {
            header('Location:' . PAGE3);
        } else if ($_SESSION['user']['user_level'] === '3') {
            header('Location:' . MAINFOODPAGE_ALT);
        }
    }
}

function redirect_hr_accoutant(){

    if (isset($_SESSION['user'])) {

        if ($_SESSION['user']['user_level'] === '2') {
            header('Location:' . PAGE2);
        } else if ($_SESSION['user']['user_level'] === '3') {
            header('Location:' . MAINFOODPAGE_ALT);
        }
    }

}