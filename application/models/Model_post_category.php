<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_post_category extends CI_Model
{
    
    public function __construct()
    {
        parent::__construct();
    }

    private $table          = 'table_post_category';
    private $id             = 'id';

    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getWhere($data) {
        $query = $this->db->where($data)->get($this->table);
        return $query->result();
    }

    public function add($data) {
        $this->db->insert($this->table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function update($id, $data){
        //run Query to update data
        if(isset($data[$this->id]))unset($data[$this->id]);
        $query = $this->db->where('id', $id)->update(
            $this->table, $data
        );
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function delete($data){
        $this->db->delete($this->table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    public function fetch($data) {
        
        $start                  = $data['start'];
        $limit                  = $data['limit'];
        $where                  = (isset($data['where'])) ? $data['where'] : null;
        $select                 = (isset($data['select'])) ? $data['select'] : null;
        $select_join            = (isset($data['select_join'])) ? $data['select_join'] : null;
        $join                   = (isset($data['join'])) ? $data['join'] : null;
        $like                   = (isset($data['like'])) ? $data['like'] : null;
        $order                  = (isset($data['order'])) ? $data['order'] : null;
  
        if($select==null || !is_array($select)) {
            $this->db->select('*');
        }
        else{
            foreach($select as $s) {
                $this->db->select($this->table.'.'.$s);
            }
            if($select_join!=null) {
                foreach ($select_join as $sj) {
                    $this->db->select($sj);
                }
            }
        }

        $this->db->distinct();

        $this->db->from($this->table);
  
        if($join!=null && is_array($join)) {
            foreach($join as $j) {
                $this->db->join(
                    $j['table'],
                    $this->table.'.'.$j['id'].'='.$j['table'].'.id',
                    $j['join']
                );
            }
        }

        if($where!=null && is_array($where)) {
            $this->db->where($where);
        }
    
        if($like!=null && is_array($like)) {
            $this->db->group_start();
            $i=0;
            foreach($like['name'] as $l) {
                $l = ($join!=null) ?  $this->table.'.'.$l: $l;
                if($i==0) {
                    $this->db->like($l, $like['key']);
                } 
                else{
                    $this->db->or_like($l, $like['key']);
                }
                $i++;
            }
            if($select_join!=null) {
                foreach($select_join as $j) {
                    $join_name = explode( ' ',$j)[0];
                    $this->db->or_like($join_name, $like['key']);
                }
            }
            $this->db->group_end();
        }
    
        if($order!=null && is_array($order)) {
            $this->db->order_by($order['field'],$order['type']);
        }
    
        if($limit!=null) {
        $this->db->limit($limit, $start);
        }
    
        $query = $this->db->get();
        return $query->result();
    }

}


?>