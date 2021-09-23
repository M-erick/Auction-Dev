<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
