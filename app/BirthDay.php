<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class BirthDay extends Model
{
    //
    protected $fillable = [
        'fullname',
        'bd'
    ];

    protected $table = 'birthday';


    public function ofThisMonth(){

        $carbon = Carbon::now();

        $date =  explode('-',$carbon->toDateString());

        $month = $date[1];
        
        return DB::table('birthday')->where('bd','like','%-'.$month.'-%')->get();

    }
}
