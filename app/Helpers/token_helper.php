<?php

function cookies_token($string)
{
    // Set the encryption key
    $key = 'lajarin2023';

    // Set the encryption method to AES-256-CBC
    $method = 'AES-256-CBC';

    // Generate an initialization vector (IV)
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

    // Encrypt the plaintext string
    $ciphertext = openssl_encrypt($string, $method, $key, OPENSSL_RAW_DATA, $iv);

    // Concatenate the IV and ciphertext and store them as the encrypted message
    $encrypted_message = $iv . $ciphertext;

    // Use base64 encoding to make the encrypted message safe to transmit over the web
    $encrypted_message_base64 = base64_encode($encrypted_message);

    return $encrypted_message_base64;
}