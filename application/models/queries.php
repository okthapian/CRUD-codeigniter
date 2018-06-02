<?php 
	/**
	* 
	*/
	class queries extends CI_Model
	{
		
		public function getpost()
		{
			$query=$this->db->get('tbl_post');
			if ($query->num_rows()>0) {
				return $query->result();
			}
		}

		public function tambahdata($data)
		{
			return $this->db->insert('tbl_post',$data);
		}

		public function ambildata($id)
		{
			$query=$this->db->get_where('tbl_post',array('id' => $id ));
			if ($query->num_rows()>0) {
				return $query->row();
			}
		}

		public function ubahdatadata($data, $id){
			return $this->db->where('id', $id)
							->update('tbl_post',$data);
		}

		public function hapus($id){
			return $this->db->delete('tbl_post',['id'=>$id]);
		}
	}
 ?>