<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderFormRequest;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function actionCreateOrder(OrderFormRequest $request)
    {
        // TODO: Через try добавить запись в лог..
        Order::create($request->all());
        return redirect()->route('created_order');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function actionCreatedOrder(OrderFormRequest $request)
    {
        return "Ура";
    }
}
