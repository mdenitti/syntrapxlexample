@extends('layout.layout')

@section ('title','Home')

@section('hero')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to our course management system!</h1>
        <p class="lead">Here you can manage your courses, instructors, and categories with ease.</p>
        <hr class="my-4">
@endsection

@section('content')
    Hallo, wil je naar de cursus toevoegen pagina gaan? Klik dan op de volgende link: <a href="/courseadd">Add a course</a>
    
@endsection