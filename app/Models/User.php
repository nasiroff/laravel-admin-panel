<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as UserService;
use Illuminate\Http\Request;


class User extends UserService {

    protected $table = 'user';
	
    public $timestamps = true;
	
	protected $fillable = ['name', 'email', 'password', 'role_id', 'created_at', 'updated_at'];

    public function Role() {
		return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }

    public function hasPermission(Request $request){
        if ($this->role->role_type === 'ROLE_ADMIN'){
            return true;
        }
        foreach ($this->role->action as $action) {
            $actionArray = $action->toArray();
            if (in_array($request->path(), $actionArray) && $request->isMethod($actionArray['action_method'])) return true;
        }
        return false;
    }

}
