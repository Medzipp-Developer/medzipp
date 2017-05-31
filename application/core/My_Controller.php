<?php

/**
 * Created by PhpStorm.
 * User: kishor
 * Date: 5/31/2017
 * Time: 12:22 PM
 */
class My_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

}
class FrontController extends My_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function show($viewname,$data)
    {
        $this->load->view($viewname,$data);
    }
}
class AdminController extends My_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function show($viewname,$data)
    {
        $this->load->view($viewname,$data);
    }
}