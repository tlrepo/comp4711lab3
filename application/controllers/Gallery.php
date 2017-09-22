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
        // Get all the images from our model
        $pix = $this->images->all();

        // Build an array of formatted cells for them
        foreach ($pix as $picture)
            $cells[] = $this->parser->parse('_cell', (array) $picture, true);

        // Prime the table class
        $this->load->library('table');
        $parms = array(
            'table_open' => '<table class="gallery">',
            'cell_start' => '<td class="oneimage">',
            'cell_alt_start' => '<td class="oneimage">'
        );
        $this->table->set_template($parms);

        // Generate table
        $rows = $this->table->make_columns($cells, 3);
        $this->data['thetable'] = $this->table->generate($rows);

        //$this->load->view('gallery');
        $this->data['pagebody'] = 'gallery'; 
        $this->render();
    }
}