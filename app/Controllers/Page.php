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
    public function perubahandaya()
    {
        echo view("perubahandaya");
    }
    public function migrasi()
    {
        echo view("migrasi");
    }
}