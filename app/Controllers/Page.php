<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        echo view("home");
    }
    public function getstarted()
    {
        echo view("getstarted");
    }
}