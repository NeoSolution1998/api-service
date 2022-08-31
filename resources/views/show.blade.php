@extends('layouts.app')

@section('title', 'Сотрудник')

@section('content')
    <main class="container by-4">
        <div class="col-md-2 wrap_images">
        <img src="{{asset('/storage/' . $person->image_path)}}" class="img-thumbnail"  alt="">
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">ID: {{$person->id}}</li>
            <li class="list-group-item">Имя: {{$person->name}}</li>
            <li class="list-group-item">Email: {{$person->email}}</li>
            <li class="list-group-item">Возраст: {{$person->age}}</li>
            <li class="list-group-item">Опыт работы: {{$person->experience}}</li>
            <li class="list-group-item">Средняя зп: {{$person->aweragewage}}</li>
            <li class="list-group-item">Дата найма: {{$person->created_at}}</li>
          </ul>
          <form action="{{route('personnel.index')}}">
          <button class="btn btn-primary btn-sm">Все сотрудники</button>
          </form>
    </main>
@endsection