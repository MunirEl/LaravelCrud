<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'gender', 'rating', 'sales', 'released_at'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
