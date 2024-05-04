<?php
// File to store visit count
$counter_file = 'visit_count.txt';

// Read the current visit count
$visit_count = (int) file_get_contents($counter_file);

// Increment the visit count
$visit_count++;

// Write the new visit count back to the file
file_put_contents($counter_file, $visit_count);

// Respond with the visit count
echo $visit_count;
?>
