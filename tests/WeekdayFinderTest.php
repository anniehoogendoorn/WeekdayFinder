<?php

    require_once 'src/WeekdayFinder.php';

    class WeekdayTest extends PHPUnit_Framework_TestCase
    {
        function test_WeekDay()
        {
            //Arrange
            $test_weekdayFinder = new WeekdayFinder;
            $input = "08/14/2015";

            //Act
            $result = $test_weekdayFinder->getWeekday($input);

            //Assert
            $this->assertEquals("Friday", $result);
        }
    }

?>
