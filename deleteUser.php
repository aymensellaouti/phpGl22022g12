<?php
include_once 'common/isAuthenticated.php';
include_once 'classes/autoload.php';

$userRepository = new UserRepository();

$id = $_GET['id'];

$userRepository->deleteById($id);

header('location:home.php');