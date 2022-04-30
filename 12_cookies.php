<?php
/* ------------- Cookies ------------ */

/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// Set cookie
$hours = 24;
$minutes = 60;
$seconds = 60;
$expiry_time = $hours * $minutes * $seconds;
setcookie('name', 'Kamaal', time() + $expiry_time);

if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

setcookie('name', '', time() - $expiry_time);
