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
    
    function __construct($squares) 
    {
        $this->position = str_split($squares);
    }
    
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
        
        for ($row = 0; $row < 9; $row+= 3) 
        {
            if ($this->position[$row] == $token && 
                $this->position[$row + 1] == $token && 
                $this->position[$row + 2]) 
            {
                return true;
            }
        }
    }
}