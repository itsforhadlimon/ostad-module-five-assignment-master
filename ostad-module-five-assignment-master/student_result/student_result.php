<?php

function calculateResult($math,$english,$physics,$biology,$chemistry)  {

    //Validation for marks is it under 100 and upper or equal 0
    if ($math<0 || $math>100 || $english<0 || $english>100
    || $physics<0 || $physics>100 || $biology<0 || $biology>100 ||
    $chemistry <0 || $chemistry>100) {
        echo "Invalid Result";
        return;
    }


    // check if any subject mark will below 33 the student will be failed
    if ($math< 33 || $english< 33 || $physics< 33 || $biology<33 ||
    $chemistry < 33 ) {
        echo "Failed\n";
        return;
    }


    //calculate the average number
    $totalMarks = $math+$english+$physics+$biology+$chemistry;
    $averageMarks = $totalMarks/5;



    //calculate grading
    switch ($averageMarks) {
        case $averageMarks>=80:
            $grade = "A+";
            break;

        case $averageMarks >= 70:
            $grade = "A";
            break;
        case $averageMarks >= 60:
            $grade = "A-";
            break;
        case $averageMarks >= 50:
            $grade = "B";
            break;
        case $averageMarks >= 40:
            $grade = "C";
            break;
        case $averageMarks >= 33:
            $grade = "D";
            break;
        default:
            $grade = "F";

    }


    // Output result
    echo "Total marks: $totalMarks\n";
    echo "Average marks: $averageMarks\n";
    echo "Grade: $grade\n";

}




calculateResult(80,50,36,69,80);
