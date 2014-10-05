<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tweet
 *
 * @author thejan rajapakshe email: coder[dot]clix[at]gmail[dot]com
 */
class Tweet {

    var $created;
    var $id;
    var $text;
    var $in_reply_to_status_id;
    var $in_reply_to_user_id;
    var $user;
    var $geo;
    var $coordinates;
    var $place;
    var $contributors;
    var $retweet_count;
    var $favorite_count;
    var $favorited;
    var $retweeted;
    var $hashtags;
    var $user_mensions;
    

    public function __construct($created, $id, $text, $in_reply_to_status_id, $in_reply_to_user_id, $user, $geo, $coordinates, $place, $contributors, $retweet_count, $favorite_count, $favorited, $retweeted) {
        $this->created = $created;
        $this->id = $id;
        $this->text = $text;
        $this->in_reply_to_status_id = $in_reply_to_status_id;
        $this->in_reply_to_user_id = $in_reply_to_user_id;
        $this->user = $user;
        $this->geo = $geo;
        $this->coordinates = $coordinates;
        $this->place = $place;
        $this->contributors = $contributors;
        $this->retweet_count = $retweet_count;
        $this->favorite_count = $favorite_count;
        $this->favorited = $favorited;
        $this->retweeted = $retweeted;
    }

    public function __toString() {
        ;
    }

}
