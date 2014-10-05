<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TwitterHandle
 *
 * @author thejan rajapakshe email: coder[dot]clix[at]gmail[dot]com
 */
class TwitterHandle {

    static function getTweets($since_id) {
        ini_set('display_errors', 1);
        ini_set('precision', 35);
        require_once('TwitterAPIExchange.php');
        //require_once('Database.php');
        /** Set access tokens here - see: https://dev.twitter.com/apps/ * */
        include 'settings.php';

        /** Perform a GET request and echo the response * */
        /** Note: Set the GET field BEFORE calling buildOauth(); * */
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        //$url = 'https://api.twitter.com/1.1/statuses/home_timeline.json';

        //$getfield = '?q=@jayaneetha&result_type=recent&count=100';
        $getfield = '?q=%40jayaneetha&result_type=recent&count=100';
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange($settings);
        return $jsonText = $twitter->setGetfield($getfield)
                ->buildOauth($url, $requestMethod)
                ->performRequest();

        //return $encoreded = json_decode($jsonText);
    }

    static function postTweet($tweet) {

        ini_set('display_errors', 1);
        ini_set('precision', 35);
        require_once('TwitterAPIExchange.php');

        /** Set access tokens here - see: https://dev.twitter.com/apps/ * */
        $settings = array(
            'oauth_access_token' => "218770908-nv2znH21EFqcl0ARBjbWSEfGlGJ8B3cnTBbgXGlV",
            'oauth_access_token_secret' => "dkrXoPhCGV6ojSCp6XM4Hqaz4M5OGHlLP0mBTxMnjDvBv",
            'consumer_key' => "bq8wTOty6cbhfkj5X4upSu4e7",
            'consumer_secret' => "0buGOylhAXVsDqq1LHNigUvSfbSWSpqy2CIteASE5c1lfi9Dix"
        );
        /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ * */
        $url = 'https://api.twitter.com/1.1/statuses/update.json';
        $requestMethod = 'POST';

        /** POST fields required by the URL above. See relevant docs as above * */
        $postfields = array(
            'status' => $tweet
        );

        /** Perform a POST request and echo the response * */
        $twitter = new TwitterAPIExchange($settings);
        echo $twitter->buildOauth($url, $requestMethod)
                ->setPostfields($postfields)
                ->performRequest();
    }

    static function reTweet($tweetID) {

        ini_set('display_errors', 1);
        ini_set('precision', 35);
        require_once('TwitterAPIExchange.php');

        /** Set access tokens here - see: https://dev.twitter.com/apps/ * */
        $settings = array(
            'oauth_access_token' => "218770908-nv2znH21EFqcl0ARBjbWSEfGlGJ8B3cnTBbgXGlV",
            'oauth_access_token_secret' => "dkrXoPhCGV6ojSCp6XM4Hqaz4M5OGHlLP0mBTxMnjDvBv",
            'consumer_key' => "bq8wTOty6cbhfkj5X4upSu4e7",
            'consumer_secret' => "0buGOylhAXVsDqq1LHNigUvSfbSWSpqy2CIteASE5c1lfi9Dix"
        );

        /** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ * */
        $url = 'https://api.twitter.com/1.1/statuses/retweet/' . $tweetID . '.json';
        $requestMethod = 'POST';

        /** POST fields required by the URL above. See relevant docs as above * */
        $postfields = array(
        );

        /** Perform a POST request and echo the response * */
        $twitter = new TwitterAPIExchange($settings);
        echo $twitter->buildOauth($url, $requestMethod)
                ->setPostfields($postfields)
                ->performRequest();
    }

}
