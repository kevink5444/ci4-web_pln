<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        echo view("home");
    }
    public function pasangbaru()
    {
        echo view("pasangbaru");
    }
    public function perubahandaya()
    {
        echo view("perubahandaya");
    }
    public function migrasi()
    {
        echo view("migrasi");
    }
    public function pelanggan()
    {
        echo view("pelanggan");
    }
}