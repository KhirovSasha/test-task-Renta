@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Building</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update', ['building' => $building->id]) }}">
                            @csrf
                            @method('PUT') {{-- Use PUT method for updates --}}

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" value="{{ $building->city }}" required>
                            </div>

                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" name="street" id="street" class="form-control" value="{{ $building->street }}" required>
                            </div>

                            <div class="form-group">
                                <label for="builder_id">Builder ID</label>
                                <input type="number" name="builder_id" id="builder_id" class="form-control" value="{{ $building->builder_id }}">
                            </div>

                            <div class="form-group">
                                <label for="building_number">Building Number</label>
                                <input type="text" name="building_number" id="building_number" class="form-control" value="{{ $building->building_number }}" required>
                            </div>

                            <div class="form-group">
                                <label for="build_year">Build Year</label>
                                <input type="text" name="build_year" id="build_year" class="form-control" value="{{ $building->build_year }}" required>
                            </div>

                            <div class="form-group">
                                <label for="wallType">Wall Type</label>
                                <select name="wallType" id="wallType" class="form-control" required>
                                    @foreach (App\Enums\WallType::values() as $value)
                                        <option value="{{ $value }}" {{ $building->wallType === $value ? 'selected' : '' }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="heating">Heating</label>
                                <select name="heating" id="heating" class="form-control" required>
                                    @foreach (App\Enums\Heating::values() as $value)
                                        <option value="{{ $value }}" {{ $building->heating === $value ? 'selected' : '' }}>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" id="status" class="form-control" value="{{ $building->status }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
