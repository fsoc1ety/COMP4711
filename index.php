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
            $name = 'Jim';
            $what = 'geek';
            $level =10;
            echo 'Hi, my name '.$name,'. and I am a level '.$level.'
            '.$what;
            echo '<br/>';
            $hoursworked = filter_input(INPUT_GET, 'hours');
            $rate = 12;
            $total = $hoursworked * $rate;
            
            if ($hoursworked > 40)
            {
                $total = $hoursworked * $rate * 1.5;
            }
            else
            {
                $total = $hoursworked * $rate;
            }
            echo ($total > 0) ? 'You owe me '.$total : " You're welcome";
        ?>
    </body>
</html>
