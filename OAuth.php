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

    function get_home_timeline($bearer_token) {
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=Jayaneetha&count=100";
        $options = array(
            'http' => array(
                'method' => "GET",
                'header' => "Authorization: Bearer " . $bearer_token,
            ),
        );
        $context = stream_context_create($options);
        return $result = file_get_contents($url, FALSE, $context);
    }

}
