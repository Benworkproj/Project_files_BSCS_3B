<?php

function redirect_authenticated_user ($user, $path)
{
    if (isset($user)) {
        header('Location: ' . $path);
    }
}

function redirect_not_authenticated_user ( $user, $path ){

    if (!isset($user)) {
        header('Location: ' . $path);
    }

}