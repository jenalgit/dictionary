<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{
    private $db;
    public function __construct() {
        parent::__construct();
        $this->db=new Models\Dict;
    }

    public function index()
    {
        $data['title'] = 'Hello world!';

        $this->output('home', $data);
    }
    public function manage()
    {
        $data['title'] = 'Manage Dictonary';
        $this->output('manage', $data);
    }
    public function save($param) {
        
    }
    public function delete($param) {
        
    }
    public function edit($param) {
        
    }
     public function update($param) {
        
    }
}
