<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Game
 *
 * @author Derrick
 */
class Game {
    var $position;
    
    // constructor 
    function __construct($squares) 
    {
        $game = "---------";
        
        // checks to see if game is currently active
        if (!empty($squares))
        {
            $game = $squares;
        }
        $this->position = str_split($game);
    }
    
    // win algorithm
    function winner($token)
    {
        for ($col = 0; $col < 3; $col++) 
        {
            if ($this->position[$col] == $token && 
                $this->position[$col + 3] == $token && 
                $this->position[$col + 6] == $token) 
            {
                return true;
            }
        }
        
        for ($row = 0; $row < 9; $row += 3) 
        {
            if ($this->position[$row] == $token && 
                $this->position[$row + 1] == $token && 
                $this->position[$row + 2]) 
            {
                return true;
            }
        }
    }
    
    // displays board
    function display()
    {
        echo '<table colspan="3" style="font-size:large; font-weight:bold" width="400" height="200">';
        echo '<tr>';
        for ($pos = 0; $pos < 9; $pos++)
        {
            echo $this->show_cell($pos);
            if ($pos %3 == 2)
            {
                echo '</tr><tr>';
            }
        }
        echo '</tr>';
        echo '</table>';
    }
    
    // determines which game piece to show
    function show_cell($which)
    {
        $token = $this->position[$which];
        if ($token <> '-')
        {
            return '<td>' . $token . '</td>';
        }
            
        $this->newposition = $this->position;
        $this->newposition[$which] = 'o';
        $move = implode($this->newposition);
        $link = '?board=' . $move;
        return '<td><a href="' . $link . '">-</a></td>';
    }
    
   
}


