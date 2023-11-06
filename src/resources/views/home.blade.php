@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        <br>
                        <a href="{{ route('create') }}">Create</a>
                        @if(!empty($buildings) && isset($buildings) && count($buildings) > 0)
                            <ul>
                                @foreach ($buildings as $building)
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$loop->iteration}}. {{ $building->city }}</h5>
                                            <h6 class="card-subtitle mb-2 text-body-secondary">Вулиця: {{ $building->street }}</h6>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">№ Будинку: {{ $building->building_number }}</li>
                                                <li class="list-group-item">Рік будови: {{ $building->building_year }}</li>
                                                <li class="list-group-item">Тип стін: {{ $building->wallType }}</li>
                                                <li class="list-group-item">Тип опалення: {{ $building->heating }}</li>
                                                <li class="list-group-item">Статус: {{ $building->status }}</li>
                                            </ul>
                                            <div class="card-footer">
                                                User: {{ $building->user_id }} Builder: {{$building->builder_id}}
                                            </div>
                                            <a href="{{ route('edit', ['building' => $building->id]) }}" class="card-link">Edit</a>
                                            <a href="{{ route('destroy', ['building' => $building->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $building->id }}').submit();">Delete</a>
                                            <form id="delete-form-{{ $building->id }}" action="{{ route('destroy', ['building' => $building->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </ul>
                        @else
                            <h1>No buildings available</h1>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
