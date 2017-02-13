<?php
    class Queen {
        function canAttack($input)
        {
            $queenx = $input[0];
            $queeny = $input[1];
            $targetx = $input[2];
            $targety = $input[3];
            if ($queenx == $targetx && $queeny == $targety)
            {
                return false;
            }
            elseif ($queenx == $targetx || $queeny == $targety)
            {
                return true;
            } else
                {
                if ($queenx > $targetx)
                {
                    $resultx = $queenx - $targetx;
                }
                else $resultx = $targetx - $queenx;
                if ($queeny > $targety)
                {
                    $resulty = $queeny - $targety;
                }
                else $resulty = $targety - $queeny;
                if ($resultx == $resulty)
                {
                    return true;
                } else
                {
                    return false;
                }
            }
        }
    }
?>
