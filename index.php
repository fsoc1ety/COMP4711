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
            $hoursworked = 10;
            $rate = 12;
            $total = $hoursworked * $rate;
            echo 'You owe me '.$total;
            
            
            switch (name)
            {
                case 'Jim': $answer = 'great'; break;
                case 'George': $answer ='unknown'; break;
                default: $answer = 'unknown';
            }
            
            if ($hoursworked > 40)
            {
                $total = $hoursworked * $rate * 1.5;
            }
            else
            {
                $total = $hourworked * $rate;
            }
            echo ($total > 0) ? 'You owe me '.$total : "You're welcome";
        ?>
    </body>
</html>
