<?php

/**
 * simple method to encrypt or decrypt a plain text string
 * initialization vector(IV) has to be the same when encrypting and decrypting
 * 
 * @param string $action: can be 'encrypt' or 'decrypt'
 * @param string $string: string to encrypt or decrypt
 *
 * @return string
 */
function encrypt_decrypt($action, $string)
{
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = 'mister123'; //can change this
    $secret_iv = 'mister1234'; //can change this

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}
$data = "";
$result = "";
//encrypt
if (isset($_POST['encrypt'])) {
    $data = $_POST['text'];

    $plain_txt = $data;
    $encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
    $result = $encrypted_txt;
    $action = 'Encrypt';
    $read = 'readonly';
    $button = '<button name="encrypt" onclick="copyText()" class="btn btn-success">Copy Result</button>';
}
//decrypt
if (isset($_POST['decrypt'])) {
    $data = $_POST['text'];

    $plain_txt = $data;
    $decrypted_txt = encrypt_decrypt('decrypt', $plain_txt);
    $result = $decrypted_txt;
    $action = 'Decrypt';
    $read = 'readonly';
    $button = '<button name="decrypt" onclick="copyText()" class="btn btn-success">Copy Result</button>';
}
