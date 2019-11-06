<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services_posts_category {

	function __construct() 
    {
        
    }

    public function __get($var)
  	{
  		return get_instance()->$var;
    }

    public $name = [
        'id',
        'name'
    ];

    public $label =  [
        'id'                        => 'ID',
        'name'                      => 'Name'
    ];

    public $type =  [
        'id'                        => 'number',
        'name'                      => 'text'
    ];

    public function tabel_header($arr) {

        $label = [];

        foreach ($arr as $key => $value) {
            $label[$value] = $this->label[$value];
        }

        if(isset($label['id'])) unset($label['id']);
        
        return $label;
    }

}

?>