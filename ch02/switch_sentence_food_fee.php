<!-- 급식비 계산하기 -->
<?php
// 초등 1학년 급식 3만원, 학년 증가시 5천원 증가
$food_fee = 30000;
$add_food_fee = 5000;
$school_grade = 1;

switch ($school_grade) {
    case 1:
        $food_fee = 30000;
        break;
    case 2:
        $food_fee += $add_food_fee * 1;
        break;
    case 3:
        $food_fee += $add_food_fee * 2;
        break;
    case 4:
        $food_fee += $add_food_fee * 3;
        break;
    case 5:
        $food_fee += $add_food_fee * 4;
        break;
    case 6:
        $food_fee += $add_food_fee * 5;
        break;
}
print $food_fee;
?>