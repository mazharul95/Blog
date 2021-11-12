@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">

                  @foreach($users as $user)
                      <h2>{{ $user->name}}</h2>
                      <h4>{{ $user->address->country}}</h4>
                  @endforeach
              </div>
            </div>
        </div>
    </div>
@endsection
