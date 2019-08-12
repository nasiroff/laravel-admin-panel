<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Department extends Model {
	
    protected $table = 'department';
	
    public $timestamps = false;
	
	protected $fillable = ['name', 'description'];

    public function Employee() {
		return $this->hasMany('App\Models\Employee', 'department_id', 'id');
    }
}
