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

    public function getALL($offset = 0, $limit =NULL, $keyword = NULL) {
        $where = $lim="";
        if ($keyword != NULL) {
            $where = " WHERE " . $this->getwhere($keyword);
        }
        if($limit!=NULL)
        {
            $lim="LIMIT $offset,$limit";
        }
        $query = "SELECT * FROM dict_data  $where ORDER BY id ".$lim;
        $result = $this->db->results($query);
        return $result;
    }

    public function save($crb, $ina, $eng, $status = 0, $priority = 1) {
        $query = "INSERT INTO dict_data(crb_lang, ina_lang, eng_lang,status,priority) VALUES ('" . $crb . "','" . $ina . "','" . $eng . "','" . $status . "','" . $priority . "')";
        $result = $this->db->results($query);
        return $result;
    }

    public function delete($id) {
        $query = "DELETE FROM dict_data WHERE id='" . $id . "'";
        return $this->db->results($query);
    }

    public function update($id, $crb, $ina, $eng, $status = 0, $priority = 1) {
        $query = "UPDATE dict_data SET crb_lang='" . $crb . "',ina_lang='" . $ina . "',eng_lang='" . $eng . "',status='" . $status . "',priority='" . $priority . "' WHERE id='" . $id . "'";
        return $this->db->results($query);
    }

    public function getwhere($param) {
        $where = "1";
        $fc = 0;
        if (is_array($param)) {
            foreach ($param as $key => $value) {
                if ($fc == 0) {
                    $where = $key . "=" . $value;
                    $fc = 1;
                } else {
                    $where = $where ." AND " . $key . "" . $value;
                }
            }
        } else {
            $where = $param;
        }
        return $where;
    }

}

