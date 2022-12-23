<?php
session_start();
session_destroy();
header('location: home_user.php');
exit;