<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OAuth
 *
 * @author thejan rajapakshe email: coder[dot]clix[at]gmail[dot]com
 */
class OAuth {

    function consumer($key, $secret) {
        $raw_url_encode_key = rawurlencode($key);
        $raw_url_encode_secret = rawurlencode($secret);
        $bearer_token_credentials = $raw_url_encode_key . ":" . $raw_url_encode_secret;
        return $base64encoded_bearer_token_credentials = base64_encode($bearer_token_credentials);
    }

    function obtain_bearer_token($base64encoded_bearer_token_credentials) {
        $data = array('grant_type' => "client_credentials");
        $options = array(
            'http' => array(
                'method' => "POST",
                'header' => "Authorization: Basic " . $base64encoded_bearer_token_credentials . "Content-Type: application/x-www-form-urlencoded;charset=UTF-8",
                'content' => http_build_query($data)
            ),
        );
        $url = 'https://api.twitter.com/oauth2/token';
        $context = stream_context_create($options);
        $result = file_get_contents($url, FALSE, $context);
        $decoded = json_decode($result);
        return $access_token = $decoded->access_token;
    }

    function get_user_timeline($bearer_token) {
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=Jayaneetha&count=100&since_id=518158555300786178";
        $options = array(
            'http' => array(
                'method' => "GET",
                'header' => "Authorization: Bearer " . $bearer_token,
            ),
        );
        $context = stream_context_create($options);
        return $result = file_get_contents($url, FALSE, $context);
    }

//    function get_home_timeline($bearer_token) {
//        $url = "https://api.twitter.com/1.1/statuses/home_timeline.json";
//        $options = array(
//            'http' => array(
//                'method' => "GET",
//                'header' => "Authorization: OAuth " . $bearer_token,
//            ),
//        );
//        $context = stream_context_create($options);
//        return $result = file_get_contents($url, FALSE, $context);
//    }
    function get_home_timeline($bearer_token) {
        $url = "https://api.twitter.com/1.1/statuses/home_timeline.json";
        $mt = microtime();
        $rand = mt_rand();
        $oauth_nonce = md5($mt . $rand);
//        $options = array(
//            'http' => array(
//                'method' => "GET",
//                'header' => 'Authorization: OAuth '
//                . 'oauth_consumer_key="bq8wTOty6cbhfkj5X4upSu4e7", '
//                . 'oauth_nonce="b5e37b3973b4f177ee682310960e1a67", '
//                . 'oauth_signature="8Noik%2FMjwkQVhgy8OSKeVHZPL1g%3D", '
//                . 'oauth_signature_method="HMAC-SHA1", '
//                . 'oauth_timestamp="1412578978", '
//                . 'oauth_token="218770908-nv2znH21EFqcl0ARBjbWSEfGlGJ8B3cnTBbgXGlV", '
//                . 'oauth_version="1.0"',
//            ),
//        );
        $options = array(
            'http' => array(
                'method' => "GET",
                'header' => 'Authorization: OAuth '
                . 'oauth_consumer_key="bq8wTOty6cbhfkj5X4upSu4e7", '
                . 'oauth_nonce="eef80b01aaf579b71eb608cf2caaaf37", '
                . 'oauth_signature="O6%2Fo6mKVF2uwel1kUOcJTGIREuQ%3D", '
                . 'oauth_signature_method="HMAC-SHA1", '
                . 'oauth_timestamp="1412584669", '
                . 'oauth_token="218770908-nv2znH21EFqcl0ARBjbWSEfGlGJ8B3cnTBbgXGlV", '
                . 'oauth_version="1.0"',
            ),
        );
        $context = stream_context_create($options);
        echo $result = file_get_contents($url, FALSE, $context);
    }

}
