@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-2">
            <div class="row">
                <div class="col">
                    <div class="card my_character-card bg-transparent my_bg-glass mb-3">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('storage/' . auth::user()->hunter['image'])}}" alt="" class="my_profile-picture my-3">
                        </div>
                        <div class="my_character-name text-center"> 
                            <h2>{{ auth::user()->hunter['surname'] }}</h2>
                            <h3>{{ auth::user()->hunter['name'] }}</h3>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a href="" class="btn btn-primary">Edit Profile</a>
                        </div>
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
                <div class="col-10">
                    <div class="card bg-transparent">
                        <div class="card-header my_header-glass">
                            Your evolution
                        </div>
                        <div class="card-body my_bg-glass rounded-bottom">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="my_stats-card bg-transparent my_header-glass">
                                <div class="card-body my_bg-glass rounded text-center">
                                    <p class="card-title p-3">{{$countReviews}}</p>
                                    <p class="card-text pb-2">Reviews Received</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="my_stats-card bg-transparent my_header-glass">
                                <div class="card-body my_bg-glass rounded text-center">
                                    <p class="card-title p-3">{{substr($averageVote,0,3)}}</p>
                                    <p class="card-text pb-2">Average Vote</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="my_stats-card bg-transparent my_header-glass">
                                <div class="card-body my_bg-glass rounded text-center">
                                    <p class="card-title p-3">{{$totalMessages}}</p>
                                    <p class="card-text pb-2">Messages Received</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="my_stats-card bg-transparent my_header-glass">
                                <div class="card-body my_bg-glass rounded text-center">
                                    <p class="card-title p-3">{{$countReviews}}</p>
                                    <p class="card-text pb-2">Days as Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col">
                <div class="card bg-transparent">
                        <div class="card-header my_header-glass text-white">
                            Featured
                        </div>
                        <div class="card-body my_bg-glass rounded-bottom">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-transparent text-white">From</th>
                                        <th scope="col" class="bg-transparent text-white">Subject</th>
                                        <th scope="col" class="bg-transparent text-center text-white">Date received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $message)
                                    <tr>
                                        <th scope="row" class="bg-transparent text-white">{{$message->email}}</th>
                                        <td class="bg-transparent text-white">{{substr($message->message,0,50)}}...</td>
                                        <td class="bg-transparent text-center text-white">{{substr($message->created_at,0,10)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('inbox')}}" class="btn btn-primary">Go to INBOX</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent">
                        <div class="card-header my_header-glass text-white">
                            Latest Reviews
                        </div>
                        <div class="card-body my_bg-glass rounded-bottom">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="bg-transparent text-white">From</th>
                                        <th scope="col" class="bg-transparent text-white">Review</th>
                                        <th scope="col" class="bg-transparent text-center text-white">Vote</th>
                                    </tr>
                                </thead>
                                <tbody class="text-white">
                                    @foreach ($reviews as $review)
                                    <tr>
                                        <th scope="row" class="bg-transparent text-white">{{$review->surname}}, {{$review->name}}</th>
                                        @if (empty($review->review))
                                            <td class="bg-transparent text-white">(No Review Written)</td>
                                        @else
                                            <td class="bg-transparent text-white">{{substr($review->review,0,80)}}...</td>
                                        @endif
                                        <td class="bg-transparent text-center text-white">{{$review->vote}}</td>
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
</div>
@endsection