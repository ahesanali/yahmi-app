<?php
namespace Yahmi\Auth;

use Yahmi\Auth\User as BaseUser;
use Yahmi\Auth\Role;
use stdClass;

class User extends BaseUser
{
	public function __construct()
	{
		parent::__construct();
	}
	/**
     * Get Assigned Role
     * @return Role
     */
    public function getRole()
    {
        $find_role_sql = 'SELECT id, role, permissions, is_super FROM members_view WHERE email=:email';
        $role_obj = $this->executeSQL($find_role_sql,['email' => $this->userId],true);
        if(!is_null($role_obj)){
            $role = new stdClass();
            $role->roleId = $role_obj['id'];
            $role->role = $role_obj['role'];
            $role->permissions = $role_obj['permissions'];
            $role->isSuper = ($role_obj['is_super']==1) ? true :  false;
        }

        return  new Role((array)$role);
    }
}