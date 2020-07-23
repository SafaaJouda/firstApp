@extends('layouts.app')
@section('title','All Todos')
@section('content')


<div class="container  " >
    <div class="row  pt-3 justify_content_center">
        <div class="card" style="width:80%"  >
            <div class="card-header text-center">
                <h1>
                    All Todos
                </h1>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif

        <div class="card-body ">
                <ul class="list-group">
                    @forelse($todos as $todo)
                        <li class="list-group-item text-muted">
                            {{$todo-> title}}
                            <span class="float-right mr-2" >
                                <a href="/test/{{$todo->id}}/delete" style="color: maroon"
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </a>
                            </span>

                            <span class="float-right mr-2">
                                <a href="/test/{{$todo->id}}/edit" style="color: royalblue">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                     </a>
                            </span>
                            <span class="float-right mr-2">
                                <a href="/test/{{$todo->id}}" style="color: mediumvioletred">
                                   <i class="fa fa-eye" aria-hidden="true"></i>

                                     </a>
                            </span>
                            @if(! $todo->completed)
                            <span class="float-right mr-2">
                                <a href="/test/{{$todo->id}}/complete" style="color: chocolate">
                                   <i class="fa fa-check-square" aria-hidden="true"></i>

                                     </a>
                            </span>
                            @endif

                        </li>
                    @empty
                        <p>No Todos to show</p>
                    @endforelse

                </ul>


            </div>
        </div>
    </div>





</div>
@endsection
