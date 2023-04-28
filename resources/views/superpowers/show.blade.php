@extends('layouts.master')

@section('content')

    <br><br>
    <div class="container">
        <div class="row text-center">
            <h2>{{ $superpowers->name }}</h2>
            <p>{{ $superpowers->description }}</p>
        </div>
    </div>
    <br><br>

@endsection

@section('buttons')
<div class="container">
    <div class="row text-center">
        <div class="col-6 text-end">
            <a href="{{ route('superpowers.edit', $superpowers->id) }}" class="btn btn-warning btn-lg btn-block">Edit  superpower</a>
        </div>
        <div class="col-6 text-start">
            <form action="{{ route('superpowers.destroy', $superpowers->id) }}" method="post">
                @method('delete')
                @csrf

                <!---- <input type="hidden" name=""> ---->
                <button class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm('Are you sure you want to delete this record?')">Delete superpower</button>
            </form>
        </div>
    </div>
</div>
@endsection