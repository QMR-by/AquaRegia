<?php
namespace App\Models;

use CodeIgniter\Model;

class PassengerModel extends Model
{
    protected $table = 'passenger';
    protected $primaryKey = 'id';

    // Fillable fields
    protected $allowedFields = [
        'lastname',
        'firstname',
        'email',
        'gender',
        'dateofbirth',
        'placeofbirth',
        'phonenumber',
        'nationality',
        'passportnumber',
        'password',
        'isadmin'
    ];

    protected $returnType = 'array';
}