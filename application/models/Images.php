<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 2017-09-21
 * Time: 5:52 PM
 */

class Images extends CI_Model
{
    function __constructor() {
        parent::__construct();
    }

    // Return all images, descending order by post date
    function all() {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }

    // Return just the 3 newest images
    function newest() {
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }
}
