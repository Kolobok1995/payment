@php 
    use Carbon\Carbon;
    
    $orders->useBootstrap()
@endphp

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Оплата по email <strong>{{ $email }}</strong>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a href="{{ route('admin.payments') }}">&#8592; Вернуться к списку</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">email</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Время / Дата</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>
                                        {{ $order->email }}
                                    </td>
                                    <td>
                                        {{ $order->phone }}
                                    </td>
                                    <td>
                                        {{ Carbon::parse($order->created_at)->toDateTimeString() }}
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