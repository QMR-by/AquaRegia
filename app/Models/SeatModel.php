<?php
namespace App\Models;

use CodeIgniter\Model;

class SeatModel extends Model
{
    protected $table = 'seat';

    protected $primaryKey_seat = 'id';

    protected $foreignKeys_seat = [
        'flight_id' => 'flight.id'
    ];

    protected $useTimestamps = true;

    // Fillable fields
    protected $allowedFields = [
        'seatnumber',
        'class'
    ];

    protected $returnType = 'array';
}
