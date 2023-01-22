@php 
    $orders->useBootstrap()
@endphp

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Оплата
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-6">
                    <input type="text" class="form-control" placeholder="Введите имя или телефон" search>
                    </div>
                </div>
            
                <hr>
                <div id="load-block">
                    <div id="load-content">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">email</th>
                                    <th scope="col">Количество заказов</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>
                                                {{ $order->email }}
                                            </td>
                                            <td>
                                                {{ $order->count_payment }}
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.payments_more', ['email' => $order->email]) }}" type="button" class="btn btn-outline-primary admin-edit">Просмотр платежей по адресу</a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('[search]').on('input', function() {
                let loc = window.location;
                let link = loc.href;
                
                $option = loc.search == '' ? '?' : '&';

                link += $option + "search" + '=' + $(this).val();
                

                $("#load-block").load(link + ' #load-content');
            
            });
        });
    </script> 
@endsection