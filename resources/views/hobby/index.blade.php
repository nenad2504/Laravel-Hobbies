@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">All the hobbies</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($hobbies as $hobby)
                            <li class="list-group-item">{{$hobby->name}}</li>
                            <li class="list-group-item">{{$hobby->description}}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="mt-2 ml-3 mb-4">
                    <a href="/hobby/create" class="btn btn-success btn-sm"><i class="fas fa-plus-circle"></i> Create new Hobby</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection