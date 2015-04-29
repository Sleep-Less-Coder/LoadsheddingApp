<?php

class Helpers
{
    public static function convert_to_ampm($time)
    {
        // return time with am/pm from 24hr time like 23:00:00
        return date("g:i a", strtotime($time));
    }
}