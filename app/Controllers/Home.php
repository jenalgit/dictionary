<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{
    public function index()
    {
        $data['title'] = 'Hello world!';

        $this->output('home', $data);
    }
    public function manage()
    {
        $data['title'] = 'Manage Dictonary';

        $this->output('home', $data);
    }
}
