@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Profile</div>

                <div class="card-body">
        
                    Name: {{ Auth::user()->name }} <br>
                    Email: {{ Auth::user()->email }}
                    </br></br>
                    <a href="{{url('/home/profile/delete/'.Auth::user()->email )}}" class="btn btn-sn btn-danger" >Delete Your ID </a><br><br>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
