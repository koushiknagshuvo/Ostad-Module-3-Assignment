<?php 

function calculateAverageGrades($studentGrades) {
    $averages = array();

    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $average = $total / count($grades);
        $averages[$student] = $average;
    }

    return $averages;
}

$studentGrades = array(
    'Student 1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student 2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student 3' => array('Math' => 75, 'English' => 84, 'Science' => 88)
);

$averageGrades = calculateAverageGrades($studentGrades);

foreach ($averageGrades as $student => $average) {
    echo "$student's Average Grade: $average\n";
}