<?php

/**
 * Created by PhpStorm.
 * User: kishor
 * Date: 5/31/2017
 * Time: 5:46 PM
 */
class Admin extends AdminController
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        echo "Admin Panel";
    }
}