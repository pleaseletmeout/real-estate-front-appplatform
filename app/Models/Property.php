<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Property extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'property';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'property_name',
            'property_address',
            'property_price',
            'property_type',
            'no_of_bedrooms',
            'no_of_bathrooms',
            'area_size',
            'image_link',
            'property_description',
            'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
