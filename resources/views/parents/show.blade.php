@extends('layouts.master')

@section('content')

    <br><br>
    <div class="container">
        <div class="row text-center">
            <h2>{{ $parents->name }}</h2>
            <p>{{ $parents->gender }}</p>
        </div>
    </div>
    <br><br>

@endsection

@section('buttons')
    <div class="container">
        <div class="row text-center">
            <div class="col-6 text-end">
                <a href="{{ route('parents.edit', $parents->id) }}" class="btn btn-warning btn-lg btn-block">Edit Parent</a>
            </div>
            <div class="col-6 text-start">
                <form action="{{ route('parents.destroy', $parents->id) }}" method="post">
                    @method('delete')
                    @csrf

                    <button class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm ('Are you sure you want to delete this record?')">Delete Parent</button>
                </form>
            </div>
        </div>
    </div>
@endsection