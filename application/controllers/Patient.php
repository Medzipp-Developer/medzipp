<?php

/**
 * Created by PhpStorm.
 * User: kishor
 * Date: 5/31/2017
 * Time: 12:21 PM
 */
class Patient extends PatientController
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['']='';
       $this->show('Home',$data);
    }

}