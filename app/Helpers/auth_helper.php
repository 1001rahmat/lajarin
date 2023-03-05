<?php
if (!function_exists('isLoggedIn')) {
    function isLoggedIn()
    {
        $CI =& get_instance();
        return $CI->session->isLoggedIn();
    }
}