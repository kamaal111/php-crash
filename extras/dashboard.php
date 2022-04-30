<?php

session_start();

$username = $_SESSION['username'] ?? null;

if (!empty($username)) {
    echo '<a href="logout.php">Logout</a><br/>';
    echo "<h1>Welcome $username</h1>";
} else {
    echo '<a href="/php-crash/13_sessions.php">Back</a><br/>';
    echo '<h1>Welcome Guest</h1>';
}
