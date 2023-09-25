@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-2">
            <div class="row">
                <div class="col">
                    <div class="card my_character-card bg-transparent my_bg-glass mb-3">
                        <div class="d-flex justify-content-center">
                            <img src="{{auth::user()->hunter['image']}}" alt="" class="my_profile-picture my-3">
                        </div>
                        <div class="my_character-name text-center"> 
                            <h2>{{ auth::user()->hunter['surname'] }}</h2>
                            <h3>{{ auth::user()->hunter['name'] }}</h3>
                        </div>
                        <a href="{{('edit/'. auth::user()->hunter['user_id'])}}" class="btn btn-primary">
                            Edit profile
                        </a>
                    </div>
                </div>
                <!-- <div class="col">
                    <div class="card my_character-card bg-transparent  my_bg-glass mb-3">
                        <div class="d-flex justify-content-center">
                            <img src="https://i.pinimg.com/564x/d6/04/54/d60454e0eb80e5e14926ce7364e3fa8c.jpg" alt="" class="my_profile-picture my-3">
                        </div>
                        <div class="my_character-name text-center"> 
                            <h2>{{ auth::user()->hunter['surname'] }}</h2>
                            <h3>{{ auth::user()->hunter['name'] }}</h3>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="col-10">
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
                                    <th scope="col-2" class="bg-transparent text-white">From</th>
                                    <th scope="col" class="bg-transparent text-white">Review</th>
                                    <th scope="col" class="bg-transparent text-center text-white">Vote received</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($review as $reviews)
                                <tr>
                                    <th scope="row" class="bg-transparent text-white">{{$reviews->name}}</th>
                                    <td class="bg-transparent text-white">{{($reviews->review)}}...</td>
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