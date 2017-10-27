<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Prop_pos_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get prop_po by id
     */
    function get_prop_po($id)
    {
        return $this->db->get_where('prop_pos',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all prop_pos
     */
    function get_all_prop_pos()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('prop_pos')->result_array();
    }
        
    /*
     * function to add new prop_po
     */
    function add_prop_po($params)
    {
        $this->db->insert('prop_pos',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update prop_po
     */
    function update_prop_po($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('prop_pos',$params);
    }
    
    /*
     * function to delete prop_po
     */
    function delete_prop_po($id)
    {
        return $this->db->delete('prop_pos',array('id'=>$id));
    }
}
