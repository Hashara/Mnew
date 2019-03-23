<?php

class Garbage extends Model
{
	public function __construct($contact='')
	{
		$table = 'garbage';
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
		return $this->name;
	}

	public static $addValidation =
	[
		'name' =>[
			'display' =>'Name',
			'required' => true,
			'min' => 4
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



}

?>