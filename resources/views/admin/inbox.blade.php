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
                                    <th scope="col" class="bg-transparent text-white">Subject</th>
                                    <th scope="col" class="col-1 bg-transparent text-center text-white">Date received</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                <tr>
                                    <th scope="row" class="bg-transparent text-white">{{$message->email}}</th>
                                    <td class="bg-transparent text-white">{{substr($message->message,0,150)}}</td>
                                    <td class="bg-transparent text-center text-white">{{substr($message->created_at,0,10)}}</td>
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