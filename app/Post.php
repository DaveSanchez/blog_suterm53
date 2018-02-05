<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Permissions;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'id_autor'
    ];

    protected $table = 'posts';

    public function getMine(){

        $permissions = new Permissions;

        $fullcontrol = $permissions->get()->full_control;

    }

    public function getAll(){
        
    }

}
