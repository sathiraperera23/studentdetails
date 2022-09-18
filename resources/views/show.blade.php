@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="bg-white col p-4 rounded rounded-2 col-md-8">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$students->name}}</h5>
                    {{$student->name}}
                    {{$student->age}}
                    {{$student->status}}
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        </div>
    </div>
    @endsection
