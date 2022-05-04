<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $bookings = Booking::all();

        return response()->json(['data' => $bookings], 200);
    }

    public function get(Request $request)
    {
    }

    public function create(Request $request)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $date = $request->get('date');
        $location = $request->get('location');

        if (!$title && !$location) {
            return response()->json(['error' => 'Please complete all the fields']);
        }

        $bookingModel = Booking::where('title', $title)->first();
        if ($bookingModel) {
            return response()->json(['error' => 'Booking already exist']);
        }

        $newBooking = Booking::create([
            'title' => $title,
            'description' => $description,
            'date' => $date,
            'location' => $location,
        ]);

        return response()->json(['data' => $newBooking]);
    }

    public function update(Request $request, $bookingId)
    {
        $title = $request->get('title');
        $description = $request->get('description');
        $date = $request->get('date');
        $location = $request->get('location');

        $bookingModel = Booking::where('id', $bookingId)->first();
        if (!$bookingModel) {
            return response()->json(['error' => 'Booking not found'], 404);
        }

        if (!$title || !$date || !$location) {
            return response()->json(['error' => 'Please enter all required fields']);
        }

        $bookingNameExist = Booking::where('location', $location)->where('id', $bookingId)->first();
        if ($bookingNameExist) {
            return response()->json(['error' => 'Booking already exist']);
        }

        $bookingModel->title = $title;
        $bookingModel->description = $description;
        $bookingModel->date = $date;
        $bookingModel->location = $location;
        $bookingModel->save();

        return response()->json(['data' => $bookingModel]);
    }

    public function delete(Request $request, $bookingId)
    {
        $bookingModel = Booking::where('id', $bookingId)->first();
        if (!$bookingModel) {
            return response()->json(['error' => 'Booking not found!'], 404);
        }

        $bookingModel->delete();

        return response()->json(['data' => 'success']);
    }
}
