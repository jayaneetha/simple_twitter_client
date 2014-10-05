<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author thejan rajapakshe email: coder[dot]clix[at]gmail[dot]com
 */
class User {

    var $id;
    var $name;
    var $screen_name;
    var $location;
    var $description;
    var $url;
    var $is_protected;
    var $followers_count;
    var $friends_count;
    var $listed_count;
    var $favourites_count;
    var $time_zone;
    var $verified;
    var $profile_image;

    public function __construct() {
        
    }

    function load_user_data($id, $bearer_token) {
        $url = "https://api.twitter.com/1.1/users/show.json?screen_name=" . $id;
        $options = array(
            'http' => array(
                'method' => "GET",
                'header' => "Authorization: Bearer " . $bearer_token,
            ),
        );
        $context = stream_context_create($options);
        $result = file_get_contents($url, FALSE, $context);
        $decode = json_decode($result);
        
        $this->id = $decode->id;
        $this->name = $decode->name;
        $this->screen_name = $decode->screen_name;
        $this->location = $decode->location;
        $this->description = $decode->description;
        $this->url = $decode->url;
        $this->is_protected = $decode->protected;
        $this->followers_count = $decode->followers_count;
        $this->friends_count = $decode->friends_count;
        $this->listed_count = $decode->listed_count;
        $this->favourites_count = $decode->favourites_count;
        $this->time_zone = $decode->time_zone;
        $this->verified = $decode->verified;
        $this->profile_image = $decode->profile_image_url;
    }

}
