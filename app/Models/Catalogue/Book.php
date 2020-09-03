<?php

namespace App\Models\Catalogue;

use Yahmi\Database\CoreDataService;

class Book extends CoreDataService
{
	
	public function getBookList()
	{
		
		return [
			'Domain driven design',
			'Patterns for enterprise application architecture',
			'Head first design patterns'	
		];
    }
    
    public function getCurrency()
    {
        return $this->executeSQL("SELECT * FROM `m_currency`");
    }
}