<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

$y = 10;

function register_user($email)
{
  global $y;
  echo $y, "<br/>";
  echo "${email} registered";
}

// register_user("kamaal@gmail.com");

function sum($n1 = 4, $n2 = 5)
{
  return $n1 + $n2;
}

$number = sum();

// echo $number;

$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

// echo $subtract(10, 5);

$multiply = fn ($n1, $n2) => $n1 * $n2;

echo $multiply(2, 2);
