@extends('layout')

@section('title', 'Главная')

@section('content')

    <h2>Привет, {{ $name }}!</h2>
    @if($role == 'admin')
        <p style="color: red;">Вы вошли как Администратор</p>
    @elseif($role == 'student')
        <p style="color: green;">Статус: Студент университета</p>
    @else
        <p>Гость</p>
    @endif

    <hr>

    <h3>Что я изучаю сейчас:</h3>

    <ul>
        @foreach($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    @empty($skills)
        <p>Список пуст</p>
    @endempty

@endsection