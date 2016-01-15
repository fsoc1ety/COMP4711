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
            $position = filter_input(INPUT_GET, 'board');
            $squares = str_split($position);
            
            if (winner('x', $squares)) {
                echo 'You win.';
            } else if (winner('o', $squares)) {
                echo 'I win.';
            } else {
                echo 'No winner yet.';
            }

        function winner($token,$position)
            {
                for($row=0; $row<3; $row++)
                {
                    $result = true;
                    for($col=0; $col<3; $col++)
                    {
                        if ($position[3*$row+$col] != $token)
                        {
                            $result = false;
                        }
                    }
                }
            }
        ?>
    </body>
</html>
