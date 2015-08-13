<?php

    class WeekdayFinder
    {

        function getWeekday($user_input)
        {
            //Converts user input to array
            $date = explode("/", $user_input);

            //Insert array to appropriate are to format to julian day
            $jul_date = cal_to_jd(CAL_GREGORIAN, (int)$date[0], (int)$date[1],
            (int)$date[2]);

            //Whats the date?
            $output = jddayofweek($jul_date, 1);

            return $output;
        }
    }
 ?>
