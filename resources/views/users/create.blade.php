@extends("layouts.global");
@section("title") | Create Users @endsection

@section ("content")
    <form action="{{route('user.store')}}" methos="POST">
        @csrf
    </form>

@endsection

