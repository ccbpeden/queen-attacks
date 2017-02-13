<?php
    class Queen {
        function canAttack($input)
        {
            if ($input[0] == $input[2] && $input[1] == $input[3])
            {
                return false;
            }
        }
    }
?>
