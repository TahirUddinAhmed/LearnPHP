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
    'tags' => ['User Experience', 'Wireframing', 'Prototyping', 'Web Development']
  ],
  [
    'id' => 5,
    'title' => 'Customer Service Representative',
    'description' => 'We are looking for a friendly customer service representative to assist customers and resolve issues.',
    'salary' => 40000,
    'location' => 'New York',
    'tags' => []
  ],
];

function formatSalary($salary)
{
  return '₹' . number_format($salary, 2);
}

function highlightTags($tags, $searchTerm)
{
  $tagsArray = implode(', ', $tags);
  return str_replace($searchTerm, "<span class='bg-yellow-200'>$searchTerm</span>", $tagsArray);
}

function calculateAverageSalary($listings)
{
  $totalSalary = 0;
  $count = count($listings);

  // Calculate the total salary
  foreach ($listings as $job) {
    $totalSalary += $job['salary'];
  }

  // Calculate the average salary
  $averageSalary = ($count > 0) ? $totalSalary / $count : 0;

  return formatSalary($averageSalary);
}

function filterListingByLocation($listings, $location) {
  // return array_filter($listings, function ($job) use ($location) {
  //   return strcasecmp($job['location'], $location) === 0;
  // });
  $filteredListing = [];

  foreach($listings as $job) {
    if(strcasecmp($job['location'], $location) === 0) {
      $filteredListing[] = $job;
    }
  }

  return $filteredListing;
}

// check if location query string is there
if(isset($_GET['location'])) {
  $location = $_GET['location'];

  $filteredListings = filterListingByLocation($listings, $location);
} else {
  $filteredListings = $listings;
}

// if(isset($_GET['filter'])) {
//   $location = $_GET['location'];

//    $filteredListing = filterListingByLocation($listings, $location);
// } else {
//   $filteredListing = $listings;
// }
  

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
    <!-- <div class="container mx-auto mt-2">
      <h2>Filter listing by Location</h2>
      <form action="" method="GET" class="mt-2">
        <select name="location" class="p-2">
          <option value="default">Choose Location</option>
          <?php foreach($listings as $job) : ?>
              <option value="<?= $job['location'] ?>"><?= $job['location'] ?></option>
          <?php endforeach; ?>
        </select>

        <input type="submit" name="filter" value="Filter" class="bg-blue-700 text-white p-2">
      </form>
    </div> -->
    <div class="bg-green-100 rounded-lg shadow-md p-6 my-6">
      <h2 class="text-2xl font-semibold mb-4">Average Salary: <?= calculateAverageSalary($listings)  ?></h2>
    </div>
    <!-- Output -->
    <?php foreach ($filteredListings as $index => $job) : ?>
      <div class="md my-4">
        <div class="rounded-lg shadow-md <?= $index % 2 === 0 ? 'bg-blue-100' : 'bg-white'; ?>">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
            <p class="text-gray-700 text-lg mt-2"><?= $job['description'] ?></p>
            <ul class="mt-4">
              <li class="mb-2">
                <strong>Salary:</strong> <?= formatSalary($job['salary']) ?>
              </li>
              <li class="mb-2">
                <strong>Location:</strong> <?= $job['location'] ?>

                <span class="text-xs text-white <?= $job['location'] === 'New York' ? 'bg-blue-500' : 'bg-green-500'; ?> rounded-full px-2 py-1 ml-2"><?= $job['location'] === 'New York' ? 'Local' : 'Remote'; ?></span>
              </li>
              <?php if (!empty($job['tags'])) : ?>
                <li class="mb-2">
                  <strong>Tags:</strong> <?= highlightTags($job['tags'], 'Development') ?>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>