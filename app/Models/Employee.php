<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $fillable =['name','email','phone','position','department_id','is_active'];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
