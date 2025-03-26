<?php

namespace App\Controllers;

use App\Models\SeatModel;

class Seat extends BaseController
{

    public function success()
    {
        $seatModel = new SeatModel();

        $seat = [];
        $message = session()->getFlashdata('message'); // Retrieve the flash message from the session

        try {
            $seat = $seatModel->where('seatnumber', '')->findAll();
            $message = $message ?: (count($seat) > 0 ? 'seat retrieved successfully.' : 'No seat found.');
        } catch (\Exception $e) {
            $message = 'Error retrieving seat: ' . $e->getMessage();
        }

        $data = [
            'title' => 'Landing Page',
            'seat' => $seat,
            'message' => $message
        ];

        return view('landingpage', $data);
    }

}