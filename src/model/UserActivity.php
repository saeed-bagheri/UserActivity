<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $fillable = ['subject', 'description', 'date'];

    protected $table = 'UserActivity';

    public $timestamps=false;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
