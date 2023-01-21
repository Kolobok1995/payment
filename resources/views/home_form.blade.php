
@if ($errors->any())
<div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
</div>
@endif

<form action="/order" method="post">
    <div class="row form-row" style="">
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" class="phone form-control" id="phone" name="phone" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </div>
</form>

@section('scripts')
    <script>
        $(document).ready(function(){
            $('.phone').inputmask('+7 (999)-999-99-99');
        });
    </script> 
@endsection