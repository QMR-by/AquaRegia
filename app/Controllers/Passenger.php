<?php

namespace App\Controllers;

use App\Models\PassengerModel;

class Passenger extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function profile()
    {
        if ($this->session->get('logged_in') != true) {
            return redirect()->to('login');
        }

        $passengerModel = new PassengerModel();
        $passengerID = $this->session->get('account_id');

        $passenger = $passengerModel->where('id', $passengerID)->first();

        if ($passenger) {
            $data = [
                'firstname' => $passenger['firstname'],
                'lastname' => $passenger['lastname'],
                'dateofbirth' => $passenger['dateofbirth'],
                'placeofbirth' => $passenger['placeofbirth'],
                'gender' => $passenger['gender'],
                'email' => $passenger['email'],
                'password' => $passenger['password'],
                'phonenumber' => $passenger['phonenumber'],
                'passportnumber' => $passenger['passportnumber'],
                'css' => ['custom.css', 'profile.css']
            ];
            return view('profilepage', $data);
        } else {
            return redirect()->to('login');
        }
    }

    public function editProfile(): string
    {
        $data = [
            'message' => '',
            'css' => ['custom.css', ''] // Add css to the css array
        ];
        
        return view('editprofilepage', $data);
    }

    public function updateProfile()
    {
        $passengerModel = new PassengerModel();
        $passengerID = $this->session->get('account_id');

        $oldPassword = $this->request->getPost('oldpassword');

        $passenger = $passengerModel->where('id', $passengerID)->first();

        $data = [
            'firstname' => ucfirst($this->request->getPost('fname')),
            'email' => $this->request->getPost('email'),
            'dateofbirth' => $this->request->getPost('dob'),
            'phonenumber' => $this->request->getPost('phoneNumber'),
            'password' => $this->request->getPost('newpassword'),
            'message' => '',
            'css' => ['custom.css', '']
        ];

        if ($oldPassword != $passenger['password']) {
            $data['message'] = 'Old password does not match';
            return view('editprofilepage', $data);
        } else if (!is_numeric($data['phonenumber'])) {
            $data['message'] = 'Phone number must be numeric';
            return view('editprofilepage', $data);
        } else {
            if ($passengerModel->update($passengerID, $data)) {
                return redirect()->to('profile');
            }
        }
    }

    public function login()
    {
        if ($this->session->get('logged_in') == true) {
            return redirect()->to('/');
        }

        $data = [
            'css' => ['custom.css', 'login.css'], // Add css to the css array
            'message' => ''
        ];
        
        return view('loginpage', $data);
    }

    public function loginacc()
    {
        $passengerModel = new PassengerModel();

        $data = [
            'css' => ['custom.css', 'login.css'],
            'message' => ''
        ];

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $passenger = $passengerModel->where('email', $email)->first();

        if ($passenger && $password == $passenger['password']) {
            $this->session->set('logged_in', true);
            $this->session->set('account_id', $passenger['id']);
            return redirect()->to('/');
        } else {
            $data['message'] = 'Invalid email or password';
            return view('loginpage', $data);
        }
    }

    public function logoutacc()
    {
        $this->session->destroy();
        return redirect()->to('login');
    }

    public function signup(): string
    {
        $data = [
            'message' => '',
            'css' => ['custom.css', 'signup.css'] // Add css to the css array
        ];
        
        return view('signuppage', $data);
    }

    public function register()
    {
        $passengerModel = new PassengerModel();

        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirmPassword');

        $data = [
            'firstname' => ucfirst($this->request->getPost('fname')),
            'lastname' => ucfirst($this->request->getPost('lname')),
            'email' => $this->request->getPost('email'),
            'gender' => $this->request->getPost('gender'),
            'dateofbirth' => $this->request->getPost('dob'),
            'placeofbirth' => $this->request->getPost('pob'),
            'phonenumber' => $this->request->getPost('phoneNumber'),
            'nationality' => $this->request->getPost('nationality'),
            'passportnumber' => $this->request->getPost('passportNumber'),
            'password' => $this->request->getPost('password'),
            'message' => '',
            'css' => ['custom.css', 'signup.css']
        ];
        
        if ($password != $confirmPassword) {
            $data['message'] = 'Passwords do not match';
            return view('signuppage', $data);
        }
        else if (!is_numeric($data['passportnumber'])) {
            $data['message'] = 'Passport number must be numeric';
            return view('signuppage', $data);
        }
        else if (!is_numeric($data['phonenumber'])) {
            $data['message'] = 'Phone number must be numeric';
            return view('signuppage', $data);
        }
        else {
            if ($passengerModel->insert($data)) {
                return redirect()->to('login');
            }
        }
    }
}