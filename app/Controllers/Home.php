<?php

namespace Controllers;

use Resources,
    Models;

class Home extends Resources\Controller {

    private $db;

    public function __construct() {
        parent::__construct();
        $this->db = new Models\Dict;
        $this->request = new Resources\Request;
    }

    public function index() {
//        $data['title'] = 'Hello world!';
//        $this->output('home', $data);
        $this->redirect("home/manage");
    }

    public function manage() {
        $data['title'] = 'Manage Dictionary';
        $data['baseurl'] = $this->uri->baseUri;
        $data['datas'] = $this->db->getALL();
        $data['formdt'] = "";
        $data['content'] = 'formadd';
        $this->output('manage', $data);
    }

    public function save() {
        $data['title'] = 'Manage Dictionary';
        $crb = $this->request->post('crb_lang');
        $ina = $this->request->post('ina_lang');
        $eng = $this->request->post('eng_lang');
        $this->db->save($crb, $ina, $eng);
        $this->redirect("home/manage");
    }

    public function delete($id) {
        $this->db->delete($id);
        $this->redirect("home/manage");
    }

    public function edit($id) {
        $data['baseurl'] = $this->uri->baseUri;
        $dt=$this->db->getALL(0, 1, array("id" => $id));
        $data['datas'] = $dt;
        $data['title'] = 'Edit - Manage Dictionary';
        $data['formdt']=$dt;
        $data['content'] = 'formedit';
        $this->output('manage', $data);
    }

    public function update() {
        $crb = $this->request->post('crb_lang');
        $ina = $this->request->post('ina_lang');
        $eng = $this->request->post('eng_lang');
        $id = $this->request->post('id_dict');
        $this->db->update($id,$crb, $ina, $eng);
        $this->redirect("home/manage");
    }

}
