<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dict
 *
 * @author jenal<warungkopidigital.blogspot.com>
 */

namespace Models;

use Resources;

class Dict {

    private $db;

    public function __construct() {

        $this->db = new Resources\Database;
    }

    public function getALL($offset = 0, $limit = 10, $keyword = NULL) {
        $where = "";
        if ($keyword != NULL) {
            $where = " WHERE " . $keyword;
        }
        $query = "SELECT * FROM table_name  $where ORDER BY id LIMIT $offset,$limit";
        $result = $this->db->results($query);
        return $result;
    }

    public function save($crb,$ina,$eng) {
        $query = "INSERT INTO dict_data(crb_lang, ina_lang, eng_lang) VALUES ('".$crb."','".$ina."','".$eng."')";
        $result = $this->db->results($query);
        return $result;
    }

    public function delete($id) {
        $query = "DELETE FROM dict_data WHERE id='".$id."'";
        return $this->db->results($query);
    }
    public function update($id,$crb,$ina,$eng) {
        $query = "UPDATE dict_data SET crb_lang='".$crb."',ina_lang='".$ina."',eng_lang='".$eng."' WHERE id='".$id."'";
        return $this->db->results($query);
    }

}
