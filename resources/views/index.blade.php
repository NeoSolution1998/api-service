@extends('layouts.app')

@section('title', 'Персонал')

@section('content')
    <main class="container by-4">
        <h1>Все сотрудники</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Email</th>
                    <th scope="col">Стаж</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personnel as $person)
                    <tr>
                        <th scope="row">{{ $person->id }}</th>
                        <td><a href="{{route('personnel.show', $person->id)}}">{{ $person->name }}</a></td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->experience }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('personnel.create') }}">
            <button type="submit" class="btn btn-primary">Добавить сотрудника</button>
        </form>
    </main>
@endsection
