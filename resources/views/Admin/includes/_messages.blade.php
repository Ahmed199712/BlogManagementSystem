@if( $errors->any() )
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

@if( session()->has('errorLogin') )
    <div class="alert alert-danger">
        <li>{{ session()->get('errorLogin') }}</li>
    </div>
@endif