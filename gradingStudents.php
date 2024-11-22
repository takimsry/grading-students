<?php

function gradingStudents($grades) {
  $numberOfStudents = array_shift($grades);

  if ($numberOfStudents < 1 || $numberOfStudents > 60) {
    echo "Number of students must be between 1 and 60";
    exit;
  }

  if (count($grades) != $numberOfStudents) {
    echo "Number of grades must be equal to number of students";
    exit;
  }

  $roundedGrades = [];

  foreach ($grades as $grade) {
    if ($grade < 0 || $grade > 100) {
      echo "Grade must be between 0 and 100";
      exit;
    } else if ($grade < 38) {
      $roundedGrades[] = $grade;
    } else {
      $nextMultipleOf5 = ceil($grade / 5) * 5;
      
      if ($nextMultipleOf5 - $grade < 3) {
        $roundedGrades[] = $nextMultipleOf5;
      } else {
        $roundedGrades[] = $grade;
      }
    }
  }

  return $roundedGrades;
}

$finalGrades = gradingStudents([4, 73, 67, 38, 33]);

foreach ($finalGrades as $finalGrade) {
  echo $finalGrade . "\n";
}

?>