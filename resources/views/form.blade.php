@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{ route("post") }}" method="POST" >
        @csrf
    <input type="text" name=message>
    <button type="submit">Submit</button>
    </form>
</div>

@endsection