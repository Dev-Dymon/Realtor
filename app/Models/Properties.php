<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'location',
        'city',
        'country',
        'no_of_bedroom',
        'no_of_toilet',
        'price',
        'property_type',
        'status',
        'banned',
        'size',
        'description',
        'featured',
        'count_view',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_7',
        'image_8',
    ];


    // establishing relationship
    public function agent(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
