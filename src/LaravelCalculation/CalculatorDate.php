<?php

namespace LaravelCalculation;

class CalculatorDate
{
    public static function getAge($date)
    {
        $date = new \DateTime($date);
        $now = new \DateTime();
        $interval = $now->diff($date);

        return $interval->y;
    }
}
