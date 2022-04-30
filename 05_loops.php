<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($i = 0; $i < 10; $i++) {
//   echo "Number ${i}<br/>";
// }


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;
// while ($x <= 15) {
//   echo "Number ${x}<br/>";
//   $x += 1;
// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;
// do {
//   echo "Number ${x}<br/>";
//   $x += 1;
// } while ($x <= 15);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = [
  'First Post',
  'Second Post',
  'Third Post'
];

// foreach ($posts as $post) {
//   echo "${post}<br/>";
// }

// foreach ($posts as $index => $post) {
//   echo "${index} - ${post}<br/>";
// }

$person = [
  'first_name' => 'Kamaal',
  'last_name' => 'Farah',
  'email' => 'kamaal@gmail.com'
];

foreach ($person as $key => $value) {
  echo "${key} - ${value}<br/>";
}
