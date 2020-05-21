@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My Posts</div>

                <div class="card-body">
                    @foreach($myposts as $row)
                    <h5>At: {{ $row->created_at }}</h5>
                    Post: {{ $row->body }}<br><br>
                    <a href="{{url('/home/myposts/delete/'.$row->id)}}" class="btn btn-sn btn-danger" >Delete </a> <br><br>
                    @endforeach
                    <br>
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
