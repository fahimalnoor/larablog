@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>

                <div class="card-body">
                    @foreach($posts as $row)
                    <h5>Posted By: {{ $row->email }}</h5>
                    At: {{ $row->created_at }}<br>
                    Post: {{ $row->body }}<br><br>
                    @endforeach
                    <br>
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
