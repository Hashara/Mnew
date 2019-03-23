<?php

class Announcements extends Model
{
	public function __construct($contact='')
	{
		$table = 'announcements';
		parent:: __construct($table);
		$this->_softDelete = true;
	}

	public $deleted =0;

	public function findByUserId($userId,$params=[])
	{
		$conditions = ['conditions'=>'user_id = ?','bind'=>[$userId]
	];
	$conditions = array_merge($conditions,$params);
	return $this->find($conditions);
	}

	public function displayName()
	{
		return $this->topic.' '.$this->uc;
	}

	public static $addValidation =
	[
		'topic' =>[
			'display' =>'Topic',
			'required' => true,
			'min' => 2
	],
	
		'uc' =>
		[
			'display' =>'Urban Council',
			'required' => true
			// 'max' => 155
		] 
	];


	public function findByIdAndUserId($contact_id,$user_id,$params=[])
	{
		// dnd($contact_id);
		// dnd($user_id);
		$conditions =
		 [
		'conditions' => 'id = ? AND user_id = ?',
		'bind' => [$contact_id , $user_id]
	];

	// dnd($conditions);
	$conditions = array_merge($conditions,$params);
	// dnd($conditions);

	return $this->findFirst($conditions);
	}

	public function displayAddress()
	{
		$topic = '';
		if(!empty($this->topic))
		{
			$topic.=$this->topic."<br>";

		}
		// if(!empty($this->address1))
		// {
		// 	$address.=$this->address1."<br>"; //if two or more address

		// }
		// if(!empty($this->city))
		// {
		// 	$address.=$this->city.",";
		// }

		// 	$address.=$this->state." ".$this->zip."<br>";
		// }
		return $address;
	}

	public function displayAddressLabel()
	{
		$html = $this->displayName()."<br>";
		$html .= $this->displayAddress();
		return $html;
	}

}

?>