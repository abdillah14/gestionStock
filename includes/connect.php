<?php

$con = mysqli_connect('localhost', 'root', '', 'gestionStock');
if (!$con) {
    die(mysqli_error($con));
}
