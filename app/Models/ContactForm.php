<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    public $timestamps = false;
    protected $table = 'contact_form';
    protected $primaryKey = 'contact_id';


    protected $fillable = [
        'contact_name',
        'contact_phone_number',
        'contact_email',
        'contact_message',
        'property_id',
];
}

