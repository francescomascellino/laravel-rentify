@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-6">
                <div class="d-flex">
                    <h2>{{ $car->brand }}</h2>
                    <h4>{{ $car->model }}</td>
                </div>
                <img class="img-fluid" src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->model }} image">
            </div>
            <div class="col-6">
                <p class="">{{ $car->fuel_type }}</p>
                <p>{{ $car->price }} €</p>

                <p>{{ $car->notes }}</p>

            </div>
        </div>
    </div>
@endsection
