<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Http\Requests\UserRequest;
use App\Models\Order;
use App\Models\User;
use DateTime;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    public function store(BookRequest $request): JsonResponse
    {
        $data = [
            'date_from' => DateTime::createFromFormat('d/m/Y', $request->dateFrom),
            'date_to' => DateTime::createFromFormat('d/m/Y', $request->dateTo),
            'adults_count' => $request->adultsCount,
            'children_count' => $request->childrenCount,
            'room' => $request->room,
        ];

        $newFromDate = $data['date_from'];
        $newToDate = $data['date_to'];
        $order = Order::where(function ($query) use ($newFromDate, $newToDate) {
            $query->where(function ($query) use ($newFromDate, $newToDate) {
                $query->where('date_from', '<=', $newToDate) // Existing booking starts before or on new end date
                ->where('date_to', '>=', $newFromDate); // Existing booking ends after or on new start date
            })
                ->orWhere(function ($query) use ($newFromDate, $newToDate) {
                    $query->where('date_from', '>=', $newFromDate) // Existing booking starts after or on new start date
                    ->where('date_to', '<=', $newToDate); // Existing booking ends before or on new end date
                });
        })->where('room', $data['room'])->where('user_id', '!=', null)->first();

        if ($order) {
            return response()->json(['status' => 'ERROR',
                'message' => 'We have already booked room with this date range'], 403);
        } else {
            $order = Order::create($data);
        }

        return response()->json(['status' => 'OK', 'data' => [
            'order_id' => $order->id
        ]]);
    }

    public function save(UserRequest $request)
    {
        $data = [
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ];

        $orderId = $request->input('order_id');
        $user = User::query()->create($data);
        Order::query()->where('id', $orderId)->update(['user_id' => $user->id]);

        return response()->json(['status' => 'OK']);
    }
}
