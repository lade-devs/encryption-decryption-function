<?php

class encrypDecryp{

    public function encryptValue($value){

        $iv   = '{CustomIV}';
        $salt = '{CustomSalt}';

        $encrypted = openssl_encrypt(
            $value, 'aes-256-cbc', $salt, null, $iv
        );

        return $encrypted;
    }

    public function decryptValue($value){

        $components    = explode( ':', $value );
        $iv            = '{CustomIV}';
        $encrypted_msg = $components[0];
        $salt          = '{CustomSalt}';

        $decrypted_msg = openssl_decrypt(
            $encrypted_msg, 'aes-256-cbc', $salt, null, $iv
        );

        return $decrypted_msg;

    }

}