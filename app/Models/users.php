<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email','CNIC'];

    public function selectSingleRecord($CNIC)
    {
        $result = Users::select('name','email','CNIC')->where('users.CNIC',$CNIC)->get();
        return $result;
    }
}
