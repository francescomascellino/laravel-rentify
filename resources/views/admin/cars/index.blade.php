@extends('layouts.admin')

@section('content')
    <h1 class="text-center">Cars Index</h1>

    <div class="card">

        <div class="card-body">

            <div class="table-responsive">
                <table
                    class="table table-striped
            table-hover	
            table-borderless
            table-primary
            align-middle">

                    <thead class="table-light">

                        <tr>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>RentPrice</th>
                            <th>Fuel</th>
                            <th>Actions</th>
                        </tr>

                    </thead>

                    <tbody class="table-group-divider">

                        @forelse ($cars as $car)
                            <tr class="table-primary">

                                <td>
                                    <img class="img-fluid" src="{{ asset('storage/' . $car->image) }}"
                                        alt="{{ $car->model }} image">
                                </td>

                                <td scope="row">{{ $car->brand }}</td>

                                <td>{{ $car->model }}</td>

                                <td>{{ $car->price }} $</td>

                                <td>{{ $car->fuel_type }}</td>

                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.cars.show', $car) }}">view</a>
                                    <a class="btn btn-secondary" href="{{ route('admin.cars.edit', $car) }}">edit</a>
                                </td>

                            </tr>
                        @empty
                            <h1>no cars!</h1>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
        <div class="m-3">
            {{ $cars->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
