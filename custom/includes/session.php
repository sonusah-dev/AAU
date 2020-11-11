<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['id'])) {
    header('location:../index.html');
}
