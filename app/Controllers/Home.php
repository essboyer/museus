<?php

namespace MuseUs\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
}
