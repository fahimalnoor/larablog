@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Profile</div>

                <div class="card-body">
                    Welcome To Your Profile {{Auth::user()->name}}!<br>
                    Your Email Id Is: {{Auth::user()->email}}
                    </br></br>

                    <form action="{{ route('proup') }}" method="post"><pre>
                    @csrf
                    <h5>Update Or Delete Your Account Here!</h5>
                    Name: <input type="text" name="name" value="" /> <br>
                    Email:<input type="text" name="email" value="" />

                    <input type="submit" name="submit" class="btn btn-sn btn-info" value="Update" />

                    <a href="{{url('/home/profile/delete/'.Auth::user()->email )}}" class="btn btn-sn btn-danger" >Delete Your ID </a>
                    </pre></form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
