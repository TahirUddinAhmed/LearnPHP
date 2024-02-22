<?php

// $favouriteColor = 'red';
// $secondFavouriteColor = 'yellow';

// $color = isset($favouriteColor) ? $favouriteColor : 'blue';

// $color = $favouriteColor ?? 'blue';

// $color = isset($favouriteColor) ? $favouriteColor : (isset($secondFavouriteColor) ? $secondFavouriteColor : 'blue');

$color = $favouriteColor ?? $secondFavouriteColor ?? 'blue';

echo $color;