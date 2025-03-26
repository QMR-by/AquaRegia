<?php

namespace App\Controllers;

use App\Models\FlightModel;

class Flights extends BaseController
{

    public function success()
    {
        $flightModel = new FlightModel();

        $flight = [];
        $message = session()->getFlashdata('message'); // Retrieve the flash message from the session

        try {
            $flight = $flightModel->where('flightnumber', '')->findAll();
            $message = $message ?: (count($flight) > 0 ? 'flight retrieved successfully.' : 'No flight found.');
        } catch (\Exception $e) {
            $message = 'Error retrieving flight: ' . $e->getMessage();
        }

        $data = [
            'title' => 'Landing Page',
            'flight' => $flight,
            'message' => $message
        ];

        return view('landingpage', $data);
    }

}