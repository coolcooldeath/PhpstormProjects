<?php
session_start();
echo "Здравствуйте, "  . $_SESSION["user_name"] . " " . $_SESSION["user_surname"];