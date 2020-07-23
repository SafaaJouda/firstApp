@extends('layouts.app')

@section('title','Todo Details -' .$todo->id);

@section('content')
    <div class ="container "  >
        <h1 class="mt-5 text-center">
            {{$todo-> title}}
        </h1>
        <div class="row pt-5 justify-content-center ">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header"  >
                        <span> Details</span>
                        <span class="badge badge-warning float-right ml-5">
                        {{boolVal($todo->completed)? 'Completed':'InCompleted'}}
                    </span>
                    </div>
                    <div class="card-body width:40%">
                        {{$todo->description}}
                    </div>
                </div>

            </div>

        </div>



    </div>
@endsection
