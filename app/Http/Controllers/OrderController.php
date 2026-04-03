<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // POST /api/orders — create a new order
    public function store(Request $request)
    {
        // Basic validation for order fields
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'required|string|max:20',
            'address'       => 'required|string',
            'total_price'   => 'required|numeric|min:0',
        ]);

        $order = Order::create($validated);

        return response()->json([
            'message' => 'Order placed successfully!',
            'order'   => $order,
        ], 201);
    }
}
