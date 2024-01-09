<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//
class Loan extends Model
{
    use HasFactory;
    public $table = 'loan';
    protected $fillable = [

        'book_id',
        'user_id',
        'loan_date',
        'return_date',
        'status',
//        'created_at',
//        'updated_at',
    ];


    public function books()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

