<?php
namespace App\Models;

use CodeIgniter\Model;

class AirportModel extends Model
{
    protected $table = 'airport';

    protected $primaryKey_airport = 'id';
    
    protected $useTimestamps = true;

    // Fillable fields
    protected $allowedFields = [
        'airportname',
        'origin',
        'destination'
    ];

    protected $returnType = 'array';
}
