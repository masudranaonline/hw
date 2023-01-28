<?php

echo "Write a program that can say the name of Month by receiving 1 to 12";
echo "<br>";
echo "<br>";

function month($month_no)
{
    if ($month_no == 1) {
        echo "January";
    } elseif ($month_no == 2) {
        echo "Feburary";
    } elseif ($month_no == 3) {
        echo "March";
    } elseif ($month_no == 4) {
        echo "April";
    } elseif ($month_no == 5) {
        echo "May";
    } elseif ($month_no == 6) {
        echo "Jun";
    } elseif ($month_no == 7) {
        echo "July";
    } elseif ($month_no == 8) {
        echo "August";
    } elseif ($month_no == 9) {
        echo "September";
    } elseif ($month_no == 10) {
        echo "Octobor";
    } elseif ($month_no == 11) {
        echo "November";
    } elseif ($month_no == 12) {
        echo "December";
    } else
        echo "Month Error!";
}
month(1);

echo "<br>";
echo "<br>";
echo "<br>";


$month = 12;

switch ($month) {
    case ($month == 1):
        echo "January";
        break;
    case ($month == 2):
        echo "February";
        break;
    case ($month == 3):
        echo "March";
        break;
    case ($month == 4):
        echo "April";
        break;
    case ($month == 5):
        echo "May";
        break;
    case ($month == 6):
        echo "Jun";
        break;
    case ($month == 7):
        echo "July";
        break;
    case ($month == 8):
        echo "August";
        break;
    case ($month == 9):
        echo "September";
        break;
    case ($month == 10):
        echo "October";
        break;
    case ($month == 11):
        echo "November";
        break;
    case ($month == 12):
        echo "December";
        break;
    default:
        echo "Month Error!";
}
