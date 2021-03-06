@extends('layouts.login')

@section('content')
  {!! Form::open(['url' => '/register']) !!}
    <h1>Pendaftaran</h1>

    @if($errors->any())
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif
    
    <div>
      {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nama']) !!}
    </div>
    <div>
      {!! Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'E-mail']) !!}
    </div>
    <div>
      {!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => 'Password']) !!}
    </div>
    <div>
      {!! Form::password('password_confirmation', ['class' => 'form-control', 'required', 'placeholder' => 'Konfirmasi Password']) !!}
    </div>
    <div>
        <a href="{{ url('/login') }}">Masuk</a>
      {!! Form::button('Daftar', ['class' => 'btn btn-default submit', 'type' => 'submit']) !!}
    </div>
    <div class="clearfix"></div>
    <br />
    <div>
      <h1><i class="fa fa-cubes" style="font-size: 26px;"></i> Inventaris</h1>

      <p>©2016 All Rights Reserved. Powered by Laravel 5</p>
    </div>
  {!! Form::close() !!}
@endsection
