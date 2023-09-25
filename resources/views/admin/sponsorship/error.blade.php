@extends('layouts.app')

@section('content')
    <div class="error-wrapper">
        <div>
            <h1>
                PAYMENT CAN'T BE PROCESSED BECAUSE NO PLAN WAS SELECTED
            </h1>
            <a href="{{route('dashboard')}}">
                Back to dashboard
            </a>
        </div>
    </div>
@endsection