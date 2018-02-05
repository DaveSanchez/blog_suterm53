<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Permissions extends Model
{
    //
    public function get(){
        
        return DB::table('permissions')->where('id',Auth::user()->id_permissions)->first();
        
    }
}
