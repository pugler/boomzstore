<?php
class Get_model extends Model {

    function Get_model() {
        parent::Model();
    }

		function getAllTeam()
	  {
			$this->db->where('rec_status', 'active');
			$query	= $this->db->get('team');
			return $query->num_rows();
	  }

		function getAllMember()
	  {
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where('team.rec_status', 'active');
			$this->db->join('member', 'member.team_guid = team.guid');
			return $this->db->get();	
	  }

		function getTeam($part)
	  {
			$this->db->where('part', $part);
			$this->db->where('rec_status', 'active');
			$query	= $this->db->get('team');
			return $query->num_rows();
	  }

		function getMember($part)
		{
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where('team.part', $part);
			$this->db->where('team.rec_status', 'active');
			$this->db->join('member', 'member.team_guid = team.guid');
			return $this->db->get();		
		}

		function getAllClip()
	  {
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where('team.rec_status', 'active');
			$this->db->join('movie', 'movie.team_guid = team.guid');
			return $this->db->get();	
	  }

		function getAllCard()
	  {
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where('team.rec_status', 'active');
			$this->db->join('card', 'card.team_guid = team.guid');
			return $this->db->get();	
	  }

		function getClip($part)
		{
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where('team.part', $part);
			$this->db->where('team.rec_status', 'active');
			$this->db->join('movie', 'movie.team_guid = team.guid');
			return $this->db->get();		
		}

		function getCard($part)
		{
			$this->db->select('*');
			$this->db->from('team');
			$this->db->where('team.part', $part);
			$this->db->where('team.rec_status', 'active');
			$this->db->join('card', 'card.team_guid = team.guid');
			return $this->db->get();		
		}

		function getListTeam($part)
	  {
			$this->db->where('part', $part);
			$this->db->where('rec_status', 'active');
			$this->db->order_by('created', 'desc');
			$query	= $this->db->get('team');
			return $query;
	  }

		function getBoard()
	  {
			$this->db->where('rec_status', 'active');
			$this->db->order_by('id', 'desc'); 
			$query	= $this->db->get('board');
			return $query;
	  }


/** New007 Start Here */
		function getData($where, $table)
	  {
			$this->db->where('type', $where);
			$this->db->where('rec_status', 'active');
			$this->db->order_by('created', 'desc'); 
			$query	= $this->db->get($table);
			return $query;
	  }









}

?>