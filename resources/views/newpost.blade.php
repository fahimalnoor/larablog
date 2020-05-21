@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create A New Post!</div>
                <div class="card-body">
                </div>    
                <form action="{{ route('createpost') }}" method="post"><pre>
                    @csrf
Your User Email: <input type="text" name="email" value="{{ Auth::user()->email }}" /><br>
                    Your Post Here:  <textarea name="body" value="" rows="4" cols="50"></textarea><br>
                    <input type="submit" name="submit" value="Submit" />
                    </pre>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
