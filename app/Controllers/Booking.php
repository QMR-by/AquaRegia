<?php

namespace App\Controllers;

use App\Models\BookingModel;

class Booking extends BaseController
{

    public function success()
    {
        $bookingModel = new BookingModel();

        $booking = [];
        $message = session()->getFlashdata('message'); // Retrieve the flash message from the session

        try {
            $booking = $bookingModel->where('bookingdate', '')->findAll();
            $message = $message ?: (count($booking) > 0 ? 'booking retrieved successfully.' : 'No booking found.');
        } catch (\Exception $e) {
            $message = 'Error retrieving booking: ' . $e->getMessage();
        }

        $data = [
            'title' => 'Landing Page',
            'booking' => $booking,
            'message' => $message
        ];

        return view('landingpage', $data);
    }

}