@extends('layouts.app')

@section('title', 'Schedule - Haq Paani')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">Water Supply Schedule</h2>
    
    <div class="row mb-4">
        <div class="col-md-6 offset-md-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search your area...">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>
    </div>

    @include('partials.schedule-table')
</div>
@endsection