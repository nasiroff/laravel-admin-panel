<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {
	
    protected $table = 'role';
	
    public $timestamps = false;
	
	protected $fillable = ['role_type'];

    public function Action() {
		return $this->belongsToMany('App\Models\Action', 'role_action', 'role_id', 'action_id');
    }

    public function User() {
		return $this->hasOne('App\Models\User', 'role_id', 'id');
    }
}
