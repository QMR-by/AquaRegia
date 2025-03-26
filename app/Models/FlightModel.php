<?php
namespace App\Models;

use CodeIgniter\Model;

class FlightModel extends Model
{
    protected $table = 'flight';

    protected $primaryKey_flight = 'id';

    protected $foreignKeys_flight = [
        'airport_id' => 'airport.id'
    ];

    protected $useTimestamps = true;

    // Fillable fields
    protected $allowedFields = [
        'flightnumber',
        'departuredate',
        'departuretime',
        'arrivaldate',
        'arrivaltime',
        'flightstatus'
    ];

    protected $returnType = 'array';
}
