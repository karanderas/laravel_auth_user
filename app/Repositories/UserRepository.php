<?php

namespace Patishopper\Repositories;

use Patishopper\User;

class UserRepository extends ResourceRepository
{

    public function __construct(User $user)
	{
		$this->model = $user;
	}

}