<?php
$listings = [
  [
    'id' => 1,
    'title' => 'Software Engineer',
    'description' => 'We are seeking a skilled software engineer to develop high-quality software solutions.',
    'salary' => 80000,
    'location' => 'San Francisco',
    'tags' => ['Software Development', 'Java', 'Python']
  ],
  [
    'id' => 2,
    'title' => 'Marketing Specialist',
    'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
    'salary' => 60000,
    'location' => 'New York',
    'tags' => ['Digital Marketing', 'Social Media', 'SEO']
  ],
  [
    'id' => 3,
    'title' => 'Accountant',
    'description' => 'We are hiring an experienced accountant to handle financial transactions and ensure compliance.',
    'salary' => 55000,
    'location' => 'Chicago',
    'tags' => ['Accounting', 'Bookkeeping', 'Financial Reporting']
  ],
  [
    'id' => 4,
    'title' => 'UX Designer',
    'description' => 'We are seeking a talented UX designer to create intuitive and visually appealing user interfaces.',
    'salary' => 70000,
    'location' => 'Seattle',
    'tags' => ['User Experience', 'Wireframing', 'Prototyping']
  ],
  [
    'id' => 5,
    'title' => 'Customer Service Representative',
    'description' => 'We are looking for a friendly customer service representative to assist customers and resolve issues.',
    'salary' => 40000,
    'location' => 'New York',
    'tags' => ['Customer Support', 'Communication', 'Problem Solving']
  ],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Job Listings</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Job Listings</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <!-- Output -->
    <div class="md my-4">
      <div class="bg-white rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold">Software Engineer</h2>
          <p class="text-gray-700 text-lg mt-2">We are seeking a skilled software engineer to develop high-quality software solutions.</p>
          <ul class="mt-4">
            <li class="mb-2">
              <strong>Salary:</strong> $80,000
            </li>
            <li class="mb-2">
              <strong>Location:</strong> San Francisco
            </li>
            <li class="mb-2">
              <strong>Tags:</strong> Software Development, Java, Python
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="md my-4">
      <div class="bg-white rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold">Marketing Specialist</h2>
          <p class="text-gray-700 text-lg mt-2">We are looking for a marketing specialist to develop and implement effective marketing strategies.</p>
          <ul class="mt-4">
            <li class="mb-2">
              <strong>Salary:</strong> $60,000
            </li>
            <li class="mb-2">
              <strong>Location:</strong> New York
            </li>
            <li class="mb-2">
              <strong>Tags:</strong> Digital Marketing, Social Media, SEO
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>

</html>