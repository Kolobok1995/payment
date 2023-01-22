<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\OrderFormRequest;
use App\Models\Order;
use App\Http\Controllers\Controller;
use DB;

class PaymentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function actionShowPayments(Request $request)
    {
        $orders = DB::table('orders')
            ->selectRaw('email, phone, COUNT(email) as count_payment')
            ->groupBy('email');

        if ($request->has('search')) {
            $orders = $orders->whereRaw('email LIKE "%' . $request->search . '%" OR phone LIKE "%' . $request->search . '%"');
        }

        $orders = $orders->paginate(3);

        return view('admin.payments.show', [
            'orders' => $orders
        ]);
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function actionShowPaymentsMore(Request $request, string $email)
    {
        $orders = DB::table('orders')
            ->where('email', $email)
            ->paginate(3);

        return view('admin.payments.payments_more', [
            'email' => $email,
            'orders' => $orders
        ]);
    }
}
