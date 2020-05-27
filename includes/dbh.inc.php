<?php
$conn = mysqli_connect("localhost", "root", "", "loginsystemdb");
if (!$conn)
    die("connection failed: " . mysqli_connect_error());
