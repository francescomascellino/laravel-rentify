@extends('layouts.admin')

@section('content')

    @if ($errors->any())
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <strong>Attention</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card p-3 mt-4">
        <form class="" action="{{ route('admin.cars.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="file" class="form-control" name="image" id="image" aria-describedby="imageHelper"
                    placeholder="">
                <small id="imageHelper" class="form-text text-muted">image for car</small>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" name="model" id="model" aria-describedby="modelHelper"
                    placeholder="model" value="{{ old('model') }}">
                <small id="modelHelper" class="form-text text-muted">type a model</small>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">brand</label>
                <input type="text" class="form-control" name="brand" id="brand" aria-describedby="brandHelper"
                    placeholder="brand" value="{{ old('brand') }}">
                <small id="brandHelper" class="form-text text-muted">type a brand</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="price" value="{{ old('price') }}">
                <small id="priceHelper" class="form-text text-muted">type a price</small>
            </div>

            <div class="mb-3">
                <label for="seats" class="form-label">seats</label>
                <input type="number" class="form-control" name="seats" id="seats" aria-describedby="seatsHelper"
                    placeholder="4" value="{{ old('seats') }}">
                <small id="seatsHelper" class="form-text text-muted">type a seats</small>
            </div>

            <div class="mb-3">
                <label for="transmission" class="form-label">Transmission</label>
                <select class="form-select" name="transmission" id="transmission">
                    <option disabled>Select one</option>
                    <option value="manual">Manual</option>
                    <option value="automatic">Automatic</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="fuel_type" class="form-label">fuel type</label>
                <select class="form-select" name="fuel_type" id="fuel_type">
                    <option disabled>Select one</option>
                    <option value="diesel">Diesel</option>
                    <option value="petrol">Petrol</option>
                    <option value="electric">Electric</option>
                    <option value="gas">Gas</option>
                    <option value="hybrid">Hybrid</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">notes</label>
                <textarea class="form-control" name="notes" id="notes" rows="5">{{ old('notes') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary"> Save your Car! 🚘</button>



        </form>
    </div>
@endsection
