<?php namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // echo view('layouts/header');
        // echo view('layouts/footer');
        echo view('welcome_message');
        
    }

    public function view()
    {
        $uri = $this->request->uri;
        var_dump($uri, '<br>', $uri->getSegment(1));exit;
    }
}