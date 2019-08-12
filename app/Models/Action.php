<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Action extends Model {
	
    protected $table = 'action';
	
    public $timestamps = false;
	
	protected $fillable = ['action_conrtoller', 'action_method'];

    public function Role() {
		return $this->belongsToMany('App\Models\Role', 'role_action', 'action_id', 'role_id');
    }
}
