<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
	
    protected $table = 'employee';
	
    public $timestamps = false;
	
	protected $fillable = ['first_name', 'last_name', 'department_id', 'email', 'phone', 'date_of_birth', 'photo'];

    public function Department() {
		return $this->belongsTo('App\Models\Department', 'department_id', 'id');
    }
}
