<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // Validate the request...

        // Start a transaction session

        // return the session url
    }

    public function success(Request $request)
    {
        // Validate the request...

        // Update the order status

        // Send an email to the user

        // Return a success response
    }

    public function cancel(Request $request)
    {
        // Validate the request...

        // Update the order status

        // Return a cancel response
    }

    public function index(Request $request)
    {
        // Validate the request...

        // Return all orders
    }

    public function show(Request $request)
    {
        // Validate the request...

        // Return a single order
    }

    public function update(Request $request)
    {
        // Validate the request...

        // Update the order

        // Return the updated order
    }

    public function destroy(Request $request)
    {
        // Validate the request...

        // Delete the order

        // Return a success response
    }
}
