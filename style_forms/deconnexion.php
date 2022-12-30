<?php
session_start();
session_destroy();
header('location: ../Site/home_user.php');
exit;