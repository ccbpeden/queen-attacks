<?php
    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {

        function test_samePosition()
        {
            $test_Queen = new Queen;
            $input = [2,2,2,2];

            $result = $test_Queen->canAttack($input);
            $this->assertEquals(false, $result);
        }
    }
?>
