<?php
namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';

    protected $primaryKey_booking = 'id';

    protected $foreignKeys_booking = [
        'seat_id' => 'seat.id',
        'passenger_id' => 'passenger.id',
    ];

    protected $useTimestamps = true;

    // Fillable fields
    protected $allowedFields = [
        'bookingdate',
        'paymentstatus',
    ];

    protected $returnType = 'array';
}
