<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class form extends Model
{
    use HasFactory;
    protected $fillable =['days',
    'amount','name','user_id'];
    protected $hidden = ['created_at','updated_at'
];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
