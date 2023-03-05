<?php

function submit_token($string = null)
{
    // create 10 char Random String, only uppercase and numbers
    $characters = 'ABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomString;
}