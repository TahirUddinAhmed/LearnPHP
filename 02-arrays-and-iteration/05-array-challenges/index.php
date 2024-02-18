<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
$numbers = [23, 11, 7, 4, 101, 77, 43];
$ArrSum = 0;
for($i = 0; $i < count($numbers); $i++) {
  $ArrSum += $numbers[$i];
}
echo '<h3>Sum Of An Array</h3>';
echo $ArrSum;


/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/
$colors = ['yellow', 'pink', 'blue', 'red', 'purple'];
rsort($colors);
array_push($colors, 'orange');

array_splice($colors, 1, 1, 'pink');
array_pop($colors);

echo '<h3>Colors Array</h3>';
echo '<pre>';
echo print_r($colors);
echo '</pre>';

$colors = ['red', 'blue', 'green', 'yellow'];

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/
$jobListings = [
  ['ID' => 1 ,'Job_title' => 'Front-End Developer', 'Company' => 'Info Teach', 'contact_email' => 'infoteach@gmail.com', 'contact_phone' => 9365910717, 'skill' => ['HTML', 'CSS', 'JS']],
  ['ID' => 1 ,'Job_title' => 'Back-End Developer', 'Company' => 'Info Teach', 'contact_email' => 'infoteach@gmail.com', 'contact_phone' => 9365910717, 'skill' => ['PHP', 'Laravel'] ],
  ['ID' => 1 ,'Job_title' => 'Data Science Developer', 'Company' => 'Info Teach', 'contact_email' => 'infoteach@gmail.com', 'contact_phone' => 9365910717, 'skill' => ['Mysql', 'NoSQL'] ],
  ['ID' => 1 ,'Job_title' => 'App Developer', 'Company' => 'Info Teach', 'contact_email' => 'infoteach@gmail.com', 'contact_phone' => 9365910717, 'skill' => ['JAVA', 'KOTLIN'] ]
];

$jobListings[] = ['ID' => 1 ,'Job_title' => 'Software Developer', 'Company' => 'Info Teach', 'contact_email' => 'infoteach@gmail.com', 'contact_phone' => 9365910717, 'skill' => ['DSA', 'Java'] ];

echo '<h3>Job Listings</h3>';
echo 'title of the second job: ' . $jobListings[1]['Job_title'];
echo '<br>';
echo 'First skill of the third job is: ' . $jobListings[2]['skill'][0];
echo '<pre>';
print_r($jobListings);
echo '</pre>';
