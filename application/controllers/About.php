<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 2017-09-21
 * Time: 3:57 PM
 */

class About extends Application
{
    public function index()
    {
        //$this->load->view('about');
        $this->data['pagebody'] = 'about'; 
        $this->render();
    }
}