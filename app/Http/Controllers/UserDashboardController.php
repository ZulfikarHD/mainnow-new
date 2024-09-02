<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Fetch venues and upcoming bookings from the database
        $venues = [
            // Replace with real data fetching
            ['id' => 1, 'name' => 'Central Park', 'location' => 'New York, NY', 'image' => '/images/central-park.jpg'],
            ['id' => 2, 'name' => 'Golden Gate Park', 'location' => 'San Francisco, CA', 'image' => '/images/golden-gate-park.jpg'],
            // More venues...
        ];

        $upcomingBookings = [
            // Replace with real data fetching
            ['id' => 1, 'venue' => ['name' => 'Central Park'], 'date' => '2024-09-15'],
            ['id' => 2, 'venue' => ['name' => 'Golden Gate Park'], 'date' => '2024-09-20'],
            // More bookings...
        ];

        return Inertia::render('Dashboard/UserDashboard', [
            'venues' => $venues,
            'upcomingBookings' => $upcomingBookings,
        ]);
    }
}
