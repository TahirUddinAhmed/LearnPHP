<?php

session_start();

unset($_SESSION['name']);

session_destroy();

echo "Session destroy";