<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Model
{

    public function index()
    {

    }
    public function codeOfTheDay()
    {
        $i = 0;
        $q = $this->db->get('dailyCode');
        foreach ($q->result() as $row) {
            $i++;
        }
        $random = rand(1, $i);

        $query = $this->db->where('id', $random)->limit(1)->get('dailyCode');
        foreach ($query->result() as $row) {
            $data = "main/codeOfTheDay/".$row->title;
            return $data;
        }
    }
    public function toEmailList()
    {
        $emailList = array();
        $q = $this->db->where('admin', 1)->get('members');
        foreach($q->result() as $row){
            $emailItem = $row->email;
            array_push($emailList, $emailItem);
            return $emailList;
        }
    }
}

/* End of file main.php */
/* Location: ./application/models/main.php */
