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
            // loads Game class
            require_once("Game.php"); 
            
            // gets request from browser
            $game = new Game(filter_input(INPUT_GET, 'board'));
            
            // displays gameboard
            $game->display();

            if ($game->winner('x'))
            {
                echo 'You win. Lucky guess!';
            }
            else if ($game->winner('o'))
            {
                echo 'I win. Muhahahaha';
            }
            else
            {
                echo 'No winer yet, but you are losing.';
            }
        ?>
    </body>
</html>
