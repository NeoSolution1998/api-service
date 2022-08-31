@extends('layouts.app')

@section('title', 'Добавить Сотрудника')

@section('content')
    <main class="container by-4">
        <h1>ДОБАВИТЬ СОТРУДНИКА</h1>

        <form method="POST" action="{{ route('personnel.store') }}" enctype="multipart/form-data" accept-charset="UTF-8" class="w-50">
            @csrf

            <div class="form-group mb-3">
                <label for="name">ФИО</label>
                <input class="form-control" name="name" type="text" id="name">
            </div>

            @if ($errors->any())
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endif

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input class="form-control" name="email" type="text" id="email">
            </div>

            @if ($errors->any())
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endif

            <div class="form-group mb-3">
                <label for="age">Возраст</label>
                <input class="form-control" name="age" type="text" id="age">
            </div>

            @if ($errors->any())
                @error('age')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endif

            <div class="form-group mb-3">
                <label for="experience">Стаж</label>
                <input class="form-control" name="experience" type="text" id="experience">
            </div>

            @if ($errors->any())
                @error('experience')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endif

            <div class="form-group mb-3">
                <label for="aweragewage">Средний уровень зп</label>
                <input class="form-control" name="aweragewage" type="text" id="aweragewage">
            </div>
            @if ($errors->any())
                @error('aweragewage')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endif
            
            <div class="form-group mb-3">
                <label for="image">Добавьте фотографию</label>
                <input type="file" name="image" class="form-control" >
            </div>


            <input class="btn btn-primary mt-3" type="submit" value="Создать">
        </form>

    </main>
@endsection
