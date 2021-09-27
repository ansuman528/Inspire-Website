<?php

session_start();

echo " LOGGING OUT PLEASE WAIT.....";

session_destroy();
header('Location: ../index.php');