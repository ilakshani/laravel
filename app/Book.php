<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Book extends Model
{
    protected $fillable = [
        'B_Name', 'A_Name', 'P_Year', 'description', 'B_price', 'A_Status' , 'D_Status',  'quantity'
    ];
    public function updatebook($id,$data){
        DB::table('books')->where('id',$id)->update($data);
    }
}
