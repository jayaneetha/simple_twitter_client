<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="userTimeline.php">User Timeline</a>
        <?php
        /*
          echo "Hello Welcome to Simple Twitter Client <br><br>";
          include_once './TwitterHandle.php';
          echo $encorded = TwitterHandle::getTweets('510644820998516738');

          $dec = json_decode($encorded);

          echo count($encoreded->statuses);

          //TwitterHandle::postTweet("Testing Phase 1");
          //echo $dec->statuses[0]->text;


          for ($index = count($encoreded->statuses) - 1; $index >= 0; $index--) {


          echo '<br>' . $tweet_id = strval($encoreded->statuses[$index]->id);
          echo '<br>' . $tweet_text = strval($encoreded->statuses[$index]->text);
          echo '<br>' . $tweet_time = strval($encoreded->statuses[$index]->created_at);
          echo '<br>' . $user_id = strval($encoreded->statuses[$index]->user->id);
          echo '<br>' . $user_name = strval($encoreded->statuses[$index]->user->name);
          echo '<br>' . $user_handle = strval($encoreded->statuses[$index]->user->screen_name);
          }


         */

//        include './OAuth.php';
//        include './User.php';
//        $o = new OAuth();
//        $u = new User();
//        $bearer_token = $o->obtain_bearer_token($o->consumer('bq8wTOty6cbhfkj5X4upSu4e7', '0buGOylhAXVsDqq1LHNigUvSfbSWSpqy2CIteASE5c1lfi9Dix'));
//       //echo  $usertimeline = $o->get_home_timeline($bearer_token);
//        //$decode = json_decode($usertimeline);
//        //echo count($decode);
////        for ($index = 0; $index < count($decode); $index++) {
////            echo '<br>';
////            echo '<br>';
////            echo '<br>';
////            print_r($decode[$index]);
////        }
//        
//        $u->load_user_data('mashable', $bearer_token);
//        include './User.php';
//        include './OAuth.php';
//        $o = new OAuth();
//        $u = new User();
//        $bearer_token = $o->obtain_bearer_token($o->consumer('bq8wTOty6cbhfkj5X4upSu4e7', '0buGOylhAXVsDqq1LHNigUvSfbSWSpqy2CIteASE5c1lfi9Dix'));
//        $u->load_user_data('mashable', $bearer_token);



        include './OAuth.php';
        $o = new OAuth();
        $bearer_token = $o->obtain_bearer_token($o->consumer('bq8wTOty6cbhfkj5X4upSu4e7', '0buGOylhAXVsDqq1LHNigUvSfbSWSpqy2CIteASE5c1lfi9Dix'));
        $o->get_home_timeline($bearer_token)
        ?>
        
    </body>
</html>
