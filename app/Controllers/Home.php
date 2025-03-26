<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function landing(): string
    {
        $data = [
            'title' => 'Landing Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'landing.css'] // Add css to the css array
        ];

        return view('landingpage', $data);
    }

    // HEADER

    public function causes(): string
    {
        $data = [
            'title' => 'Causes Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'support.css'] // Add css to the css array
        ];

        return view('causespage', $data);
    }

    public function signup(): string
    {
        $data = [
            'title' => 'Signup Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'signup.css'] // Add css to the css array
        ];
        
        return view('signuppage', $data);
    }

    public function login(): string
    {
        $data = [
            'title' => 'Login Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'login.css'] // Add css to the css array
        ];
        
        return view('loginpage', $data);
    }

    public function logout(): string
    {
        $data = [
            'title' => 'Logout Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'logout.css'] // Add css to the css array
        ];
        
        return view('logoutpage', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => 'About Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'about.css'] // Add css to the css array
        ];
        
        return view('aboutpage', $data);
    }

    // FOOTER

    public function privacy(): string
    {
        $data = [
            'title' => 'Privacy Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'privacycookies.css'] // Add css to the css array
        ];
        
        return view('privacycookiespage', $data);
    }

    public function modernSlavery(): string
    {
        $data = [
            'title' => 'Modern Slavery Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'modernslavery.css'] // Add css to the css array
        ];
        
        return view('modernslavepage', $data);
    }

    public function humanRights(): string
    {
        $data = [
            'title' => 'Human Rights Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'humanrights.css'] // Add css to the css array
        ];
        
        return view('humanrightspage', $data);
    }

    public function mediagallery(): string
    {
        $data = [
            'title' => 'Media Gallery Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'airlines.css'] // Add css to the css array
        ];
        
        return view('mediagallerypage', $data);
    }

    // FLIGHT SEARCH PAGE

    public function flightSearch(): string
    {
        $data = [
            'title' => 'Flight Search Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'flightsearch.css'] // Add css to the css array
        ];
        
        return view('flightsearchpage', $data);
    }

    public function latestFlights(): string
    {
        $data = [
            'title' => 'Latest Flights Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'latestflights.css'] // Add css to the css array
        ];
        
        return view('latestflights', $data);
    }

    public function findFlightNum(): string
    {
        $data = [
            'title' => 'Find Flight Number Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', ''] // Add css to the css array
        ];
        
        return view('flightnum', $data);
    }

    // BOOKING PAGE

    public function bookFlight(): string
    {
        $data = [
            'title' => 'Book Flight Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', ''] // Add css to the css array
        ];
        
        return view('bookflightpage', $data);
    }

    public function bookFlightAirport(): string
    {
        $data = [
            'title' => 'Book Flight Airport Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', ''] // Add css to the css array
        ];
        
        return view('bookflightairportpage', $data);
    }
    public function bookFlightFlyDetails(): string
    {
        $data = [
            'title' => 'Book Flight Details Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', ''] // Add css to the css array
        ];
            
        return view('bookflightflydetailspage', $data);
    }

    public function bookFlightSeats(): string
    {
        $data = [
            'title' => 'Book Flight Seats Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', ''] // Add css to the css array
        ];
            
        return view('bookflightseatspage', $data);
    }

    public function confirmDetails(): string
    {
        $data = [
            'title' => 'Confirm Details Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'confirmdetails.css'] // Add css to the css array
        ];
        
        return view('confirmdetailspage', $data);
    }

    // PAYMENT PAGE

    public function payment(): string
    {
        $data = [
            'title' => 'Payment Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', ''] // Add css to the css array
        ];
        
        return view('paymentpage', $data);
    }

    public function reviewCosts(): string
    {
        $data = [
            'title' => 'Review Costs Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'reviewcosts.css'] // Add css to the css array
        ];
        
        return view('reviewcostspage', $data);
    }

    // PROFILE PAGE

    public function profile(): string
    {
        $data = [
            'title' => 'Profile Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'profile.css'] // Add css to the css array
        ];
        
        return view('profilepage', $data);
    }

    public function editProfile(): string
    {
        $data = [
            'title' => 'Edit Profile Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', ''] // Add css to the css array
        ];
        
        return view('editprofilepage', $data);
    }

    public function adminProfile(): string
    {
        $data = [
            'title' => 'Admin Profile Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'profile.css'] // Add css to the css array
        ];
        
        return view('adminprofilepage', $data);
    }

    public function adminPage(): string
    {
        $data = [
            'title' => 'Admin Page',
            'message' => 'Welcome to Aqua Regia',
            'css' => ['custom.css', 'profile.css'] // Add css to the css array
        ];
        
        return view('adminpage', $data);
    }
}
