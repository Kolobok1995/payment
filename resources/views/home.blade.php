@extends('layouts/main')

@section('content')
    <div class="container">
        <form>
            <div class="row form-row" style="">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Телефон</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Имя</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

<style>
    .row.form-row {
        margin: auto;
        max-width: 500px
    }
</style>

