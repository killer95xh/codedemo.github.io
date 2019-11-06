<?php 
	class sale_model extends MX_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->table = 'sale';
			$this->donhang = 'donhang';
		}
		function showsale() {
            $a_Sale = $this->db->select()
                        ->order_by('id', 'DESC')
                        ->get($this->table)
                        ->result();
            return $a_Sale;
		}

		public function insertToken()
		{   
			$token = substr(sha1(rand()), 0, 15); 
			$date = date('Y-m-d');
			
			$string = array(
					'sale_id'=> $token,
					'created'=>$date,
					'check' => 1
				);
			$query = $this->db->insert_string('sale',$string);
			$this->db->query($query);
			return $token;
			
		}

		public function donhang() {
			$a_Don = $this->db->select()
                        ->order_by('id', 'DESC')
                        ->get($this->donhang)
                        ->result();
            return $a_Don;
		}
	}
?>