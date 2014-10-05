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

    public function __construct($id, $name, $screen_name, $location, $description, $url, $is_protected, $followers_count, $friends_count, $listed_count, $favourites_count, $time_zone, $verified, $profile_image) {
        $this->id = $id;
        $this->name = $name;
        $this->screen_name = $screen_name;
        $this->location = $location;
        $this->description = $description;
        $this->url = $url;
        $this->is_protected = $is_protected;
        $this->followers_count = $followers_count;
        $this->friends_count = $friends_count;
        $this->listed_count = $listed_count;
        $this->favourites_count = $favourites_count;
        $this->time_zone = $time_zone;
        $this->verified = $verified;
        $this->profile_image = $profile_image;
    }

}
