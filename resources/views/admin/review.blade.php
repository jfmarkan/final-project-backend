@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-12">
                <div class="mb-2">
                    <div>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary"><i class="fa-solid fa-circle-chevron-left"></i> Dashboard</a>
                    </div>
                </div>
                </div>
                <div class="col-12">
                    <div class="card bg-transparent my_bg-glass">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-2 bg-transparent text-white">From</th>
                                    <th scope="col" class="bg-transparent text-white">Review</th>
                                    <th scope="col" class="bg-transparent text-white text-center">Date</th>
                                    <th scope="col" class="col-1 bg-transparent text-center text-white">Vote received</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($review as $reviews)
                                <tr>
                                    <th scope="row" class="bg-transparent text-white">{{$reviews->name}} {{$reviews->surname}}</th>
                                    <td class="bg-transparent text-white">{{($reviews->review)}}</td>
                                    <td class="bg-transparent text-white  text-center">{{substr($reviews->created_at, 0 , 10)}}</td>
                                    <td class="bg-transparent text-center text-white">{{($reviews->vote)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection