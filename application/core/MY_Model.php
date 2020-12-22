<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_Model extends CI_Model 
{
    public $field;
    public $table;
    public $where;
    public $group;
    public $order;
    public $ordertype;
    public $limit;
    public $value;
    public $data;
    public $date;

    public function __construct() 
    {
        parent::__construct();
    }

    public function get_data()
    {
        $this->db->select($this->field);
        $this->db->from($this->table);

        if($this->where != '')
        {
            $this->db->where($this->where);    
        }

        if($this->group != '')
        {
            $this->db->group_by($this->group);  
        }

        if($this->order != '')
        {
            $this->db->order_by($this->order,$this->ordertype);  
        }

        if($this->limit != '')
        {
            $this->db->limit($this->limit);  
        }
        
        $result = $this->db->get();
        if ($result->num_rows() > 0) 
        {
            return $result->result_array();
        }
        else 
        {
            return array();
        }

    }

    public function get_one()
    {
        $this->db->select($this->field);
        $this->db->from($this->table);
        $this->db->where($this->where,$this->value);
        
        $result = $this->db->get();
        if ($result->num_rows() > 0) 
        {
            $value = $result->row_array();
            return $value;
        }
        else 
        {
            return '';
        }
    }

    public function get_one_field()
    {
        $this->db->select($this->field);
        $this->db->from($this->table);
        $this->db->where($this->where,$this->value);
        
        $result = $this->db->get();
        if ($result->num_rows() > 0) 
        {
            $value = $result->row();
            return $value->$field;
        }
        else 
        {
            return '';
        }
    }

    public function insert() 
    {
        $this->db->insert($this->table,$this->data);

        if($this->db->affected_rows() == '1')
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function update() 
    {
        $this->db->where($this->where, $this->value);
        $this->db->update($this->table,$this->data);

        if($this->db->affected_rows() == '1')
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function delete() 
    {
        $this->db->where($this->where, $this->value);
        $this->db->delete($this->table);

        if($this->db->affected_rows() == '1')
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    // id = indonesia
    public function id_date_convert()
    {
        $d = substr($this->date,9,2);
        $m = substr($this->date,6,2);
        $y = substr($this->date,0,4);

        $bulan = array(
            '01'=>'Januari',
            '02'=>'Februari',
            '03'=>'Maret',
            '04'=>'April',
            '05'=>'Mei',
            '06'=>'Juni',
            '07'=>'Juli',
            '08'=>'Agustus',
            '09'=>'September',
            '10'=>'Oktober',
            '11'=>'November',
            '12'=>'Desember',
            );

        return $d.' '.$bulan[$m].' '.$y;
    }


}

?>