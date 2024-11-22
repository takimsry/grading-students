# Grading Students Function - PHP

## About the Code

This PHP script automates the process of rounding students' grades based on a given grading policy. The rules for rounding are as follows:

1. If the grade is below 38, it is not rounded, as it is considered a failing grade.
2. If the grade is 38 or higher:
   - If the difference between the grade and the next multiple of 5 is less than 3, the grade is rounded up to the next multiple of 5.
   - If the difference is 3 or more, the grade remains unchanged.

The program accepts an array of student grades, where the first element represents the number of students, and the following elements represent each student's grade.

## How It Works

### Step-by-step process:
1. The first number in the array is read as the number of students.
2. The script checks if the number of students is within the allowed range (1 to 60).
3. The script verifies that the number of grades matches the number of students.
4. The script checks if the grade is within the allowed range (1 to 100).
5. The grades are processed, and each grade is rounded according to the specified rules.
6. The rounded grades are returned.

## How to Run

1. Clone the repository or download the PHP file.
2. Ensure you have PHP installed on your system.
3. To run the script:
   - Open a terminal/command prompt.
   - Navigate to the directory where the `gradingStudents.php` file is located.
   - Run the following command:
     ```bash
     php gradingStudents.php
     ```
4. The output will be printed in the terminal.

## Example Input & Output

### Input:
Function input:
```
[4, 73, 67, 38, 33]
```

### Output:
Function return:
```
[75, 67, 40, 33]
```

Printed:
```
75
67
40
33
```

You can also check a screenshot of the output below:

![Output Screenshot](https://github.com/takimsry/grading-students/blob/master/screenshots/output.png)