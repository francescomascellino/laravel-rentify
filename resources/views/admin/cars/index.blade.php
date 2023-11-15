@extends('layouts.admin')

@section('content')
    <h1>all Cars</h1>

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
                        <caption>Cars</caption>
                        <tr>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Fuel</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @forelse ($cars as $car)
                            <tr class="table-primary">
                                <td scope="row">{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->price }}</td>
                                <td>
                                    <img class="img-fluid" src="{{ asset('storage/' . $car->image) }}"
                                        alt="{{ $car->model }} image">
                                </td>
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
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{--     {{$cars->('links:pagination-bootstrap-5')}}
 --}}
        </div>
    </div>
@endsection
