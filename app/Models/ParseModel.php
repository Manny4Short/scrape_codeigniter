<?php

namespace App\Models;

use CodeIgniter\Model;

class ParseModel extends Model
{
  
	protected $table                = 'scrapped';
	protected $primaryKey           = 'id';
	protected $returnType           = 'object';
	protected $allowedFields        = ["id","passScore","improveScore","errorScore"];
	protected $useTimestamps        = true;

	
}