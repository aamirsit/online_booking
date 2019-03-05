<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("Asia/Kolkata");
class Dbase_model extends CI_Model
{
    #-#############################################
        # desc: Order By Query
    public function order($columns,$table,$fieldorder,$limit = "")
    {
        $sql = "SELECT $columns FROM $table order by $fieldorder";
        if(!empty($limit) AND $limit==1)
        {
            $sql = $sql." LIMIT $limit";
            $query = $this->db->query($sql);
            return $query->row();
        }
        else
        {
            $query = $this->db->query($sql);
            return $query->result();
        }
        
    }
    #-#############################################
        # desc: Display all Query
    public function displayall($table)
    {
        $query = $this->db->query("SELECT * FROM $table");
        return $query->result();
    }

    #-#############################################
    # desc: Select Record By Where Condition
    function selectBy_where_row($columns, $table, $where_attributes)
    {
        $query = $this->db->query("SELECT ".$columns." FROM ".$table." WHERE ".$where_attributes);
        return $query->row();
    }

    function selectBy_where_result($columns, $table, $where_attributes)
    {
        $query = $this->db->query("SELECT ".$columns." FROM ".$table." WHERE ".$where_attributes);
        return $query->result();
    }

    #-#############################################
    # desc: Delete Query
    function delete($table, $column, $value)
    {
        $delete = $this->db->delete($table,array($column=>$value));
        return $delete?true:false;

    }

    function insert($table,$columns)
    {
        $insert = $this->db->insert($table,$columns);
        return $insert?$this->db->insert_id():false;
    }

    function update($table,$columns,$pk,$val)
    {
        $update = $this->db->update($table, $columns, array($pk=>$val));
        return $update?true:false;
    }
}

?>