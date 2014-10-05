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
        <?php
        include './OAuth.php';
        $o = new OAuth();
        $bearer_token = $o->obtain_bearer_token($o->consumer('bq8wTOty6cbhfkj5X4upSu4e7', '0buGOylhAXVsDqq1LHNigUvSfbSWSpqy2CIteASE5c1lfi9Dix'));
        $usertimeline = $o->get_home_timeline($bearer_token);
        $decode = json_decode($usertimeline);
        echo count($decode);
        for ($index = 0; $index < count($decode); $index++) {
            echo '<br>' . $decode[$index]->text;
        }
        ?>
    </body>
</html>
