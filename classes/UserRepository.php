<?php
include_once 'autoload.php';
class UserRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('user');
    }
}