@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Building</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="street">Street</label>
                                <input type="text" name="street" id="street" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="builder_id">Builder</label>
                                <select name="builder_id" id="builder_id" class="form-control">
                                    <option value="">Select a Builder</option>
                                    @foreach ($builders as $builder)
                                        <option value="{{ $builder->id }}">{{ $builder->id }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="building_number">Building Number</label>
                                <input type="text" name="building_number" id="building_number" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="build_year">Build Year</label>
                                <input type="text" name="build_year" id="build_year" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="wallType">Wall Type</label>
                                <select name="wallType" id="wallType" class="form-control" required>
                                    @foreach (App\Enums\WallType::values() as $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="heating">Heating</label>
                                <select name="heating" id="heating" class="form-control" required>
                                    @foreach (App\Enums\Heating::values() as $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" name="status" id="status" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


