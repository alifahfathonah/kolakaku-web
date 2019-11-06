<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services_posts {

	function __construct() 
    {
        
    }

    public function __get($var)
  	{
  		return get_instance()->$var;
    }

    public $name = [
        'id',
        'slug',
        'title',
        'content',
        'date',
        'image',
        'status',
        'level',
        'id_category',
        'id_contributor',
        'id_reviewer'
    ];

    public $label =  [
        'id'                        => 'Post ID',
        'slug'                      => 'Slug',
        'title'                     => 'Title',
        'content'                   => 'Content',
        'date'                      => 'Date',
        'image'                     => 'Image',
        'status'                    => 'Status',
        'level'                     => 'Level',
        'id_category'               => 'Category Post',
        'id_contributor'            => 'Contributor',
        'id_reviewer'               => 'Reviewer',
        'username'                  => 'Reviewer',
        'username_contributor'      => 'Contributor'
    ];

    public $type =  [
        'id'                        => 'number',
        'slug'                      => 'text',
        'title'                     => 'text',
        'content'                   => 'text',
        'date'                      => 'text',
        'image'                     => 'text',
        'status'                    => 'select',
        'level'                     => 'select',
        'id_category'               => 'number',
        'id_contributor'            => 'number',
        'id_reviewer'               => 'number'
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