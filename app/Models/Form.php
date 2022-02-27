<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class form extends Model
{
    use HasFactory;

    protected $table = 'forms';
    // protected $primaryKey = 'user_id';
    protected $fillable = [
        'days',
        'amount', 'name', 'user_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function getAmountAttribute($value)
    {
        return $value . 'ksh';
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public  static function deterUserInput($value) {
        $totalShares =Form::sum('amount');


        if ( ($totalShares === null) && ($value > $totalShares)) {
         redirect('/home')->with('message','No available shares currently');
        }
         $remainShares  = $totalShares - $value ;


         return $remainShares;
//    return  Form::updated([$totalShares =>$remainShares]);
    //  return $remainShares;


    }
}
