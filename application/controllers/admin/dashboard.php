<?php

/**
 * Created by PhpStorm.
 * User: kishor
 * Date: 5/31/2017
 * Time: 12:24 PM
 */
class dashboard extends AdminController
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
       echo "admin Page Kishor Pant";
    }
}