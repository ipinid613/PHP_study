<?php
    // 만 나이 계산기
    function age_calculator($year, $month, $day, $b_year, $b_month, $b_day){
        if ($b_month < $month){
            $age = $year-$b_year;
        } elseif ($b_month = $month){
            if ($b_day < $day){
                $age = $year-$b_year;
            } else {
                $age = $year-$b_year-1;
            }
        } else{
            $age = $year-$b_year-1;
        }
        return $age;
    }

    print age_calculator(2021,8,11,1995,6,13);