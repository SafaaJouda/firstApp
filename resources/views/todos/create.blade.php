@extends('layouts.app')

@section('title','Create new Todo')

@section('content')
    <div class="container pt -5 ">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-header">
                        <h1> Create New Todo</h1>

                    </div>
                    <div class="card-body">

                        <form action="/create" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text"
                                       class="form-control"
                                       placeholder="ُEnter Todo Title"
                                       name="todoTitle"
                                       class="@error('todoTitle') is-invalid @enderror"
                                       value="{{old('todoTitle')}}"

                                >
                            </div>
                            @error('todoTitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <textarea class="form-control"
                                          rows ="3"
                                          name="todoDesc"
                                          class="@error('todoDesc') is-invalid @enderror"
                                          value="{{old('todoDesc')}}"
                                ></textarea>

                            </div>
                            @error('todoDesc')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group text=center ">
                                <button type="submit"
                                          class="bt bt-success"
                                          style="width:40%"
                                          placeholder="ُEnter Todo Description"
                                          name="todoDescription"
                                >Create Todo</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
