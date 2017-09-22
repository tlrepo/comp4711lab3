<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 2017-09-21
 * Time: 3:57 PM
 */

class Gallery extends Application
{
    public function index()
    {
        //$this->load->view('gallery');
        $this->data['pagebody'] = 'gallery'; 
        $this->render();
    }
}