<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

$name = $_POST['name'] ?? null;
$age = $_POST['age'] ?? null;

if (isset($_POST['submit'])) {
  echo "$name is $age years old<br/>";
}
?>


<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Kamaal&age=27">Click</a> -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>