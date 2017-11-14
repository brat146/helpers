<?php

function getCalendarForMonth($month, $year)
{
    $arMonthDay = array();
    $currentDayUnixTime = strtotime(date("{$year}-{$month}-01"));
    $currentMonth = date('m', $currentDayUnixTime);
    $dayWeekIndex = 1;
    $weekIndex = 1;
    while($month == $currentMonth) {
        $currentDayWeekNumber = date("N", $currentDayUnixTime);
        if($currentDayWeekNumber == $dayWeekIndex) {
            $arMonthDay[$weekIndex][$dayWeekIndex] = date('d', $currentDayUnixTime);
            $currentDayUnixTime = strtotime("+1 day", $currentDayUnixTime);
            $currentMonth = date('m', $currentDayUnixTime);
        }
        else {
            $arMonthDay[$weekIndex][$dayWeekIndex] = "";
        }

        if($dayWeekIndex == 7) {
            $weekIndex++;
            $dayWeekIndex = 1;
        }
        else {
            $dayWeekIndex++;
        }
    }
    if(!empty($arMonthDay[$weekIndex])) {
        $arMonthDay[$weekIndex] = array_pad($arMonthDay[$weekIndex], 7, "");
    }
    return $arMonthDay;
}