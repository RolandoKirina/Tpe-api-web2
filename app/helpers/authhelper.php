<?php

 class Authhelper {
    
    function gettoken(){
        $auth = $this->Getauthheader(); // [0] Bearer , [1] header.payload.signature
        $auth = explode(" ", $auth);
        if($auth[0]!="Bearer" || count($auth) != 2){
            return array(); 

        }
        $token = explode(".", $auth[1]);
        $header = $token[0];
        $payload = $token[1];
        $signature = $token[2];

        $keytoken = getkeytoken();

        $new_signature = hash_hmac('SHA256', "$header.$payload", "$keytoken", true);
        $new_signature = base64url_encode($new_signature);
        if($signature!=$new_signature)
            return array();

        $payload = json_decode(base64_decode($payload));
        if(!isset($payload->exp) || $payload->exp<time())
            return array();
        
        return $payload;
    }

    function Islogged(){
        $payload = $this->gettoken();
        if(isset($payload->id))
            return true;
        else
            return false;
    }

    function Getauthheader(){
        $header = "";
        if(isset($_SERVER['HTTP_AUTHORIZATION']))
            $header = $_SERVER['HTTP_AUTHORIZATION'];
        if(isset($_SERVER['REDIRECT_HTTP_AUTHORIZATION']))
            $header = $_SERVER['REDIRECT_HTTP_AUTHORIZATION'];
        return $header;
    }
    
 }

?>