<?php

namespace App\Controllers;

use App\Models\AirportModel;

class Airport extends BaseController
{

    public function success()
    {
        $airportModel = new AirportModel();

        $airport = [];
        $message = session()->getFlashdata('message'); // Retrieve the flash message from the session

        try {
            $airport = $airportModel->where('airportname', '')->findAll();
            $message = $message ?: (count($airport) > 0 ? 'airport retrieved successfully.' : 'No airport found.');
        } catch (\Exception $e) {
            $message = 'Error retrieving airport: ' . $e->getMessage();
        }

        $data = [
            'title' => 'Landing Page',
            'airport' => $airport,
            'message' => $message
        ];

        return view('landingpage', $data);
    }

}