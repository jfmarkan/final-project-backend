@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if (session('success'))
        <div class="col-12">
            <div class="alert alert-success">
                <i class="fa-solid fa-circle-exclamation"></i> {{ session('success') }}.
            </div>
        </div>
    @endif
    <div class="row justify-content-between">
        <div class="col">
            <div class="row">
                <div class="col-sm-12 col-lg-4 col-xl-2">
                    <div class="card my_character-card bg-transparent my_bg-glass mb-3">
                        <div class="d-flex justify-content-center">
                            @if (is_null(auth::user()->hunter->image))
                                <img src="{{ asset('img/no-avatar.jpeg') }}" alt="Load your profile picture" class="my_profile-picture my-3">
                            @elseif (str_starts_with((auth::user()->hunter['image']), 'http' ))
                                <img src="{{auth::user()->hunter['image']}}" alt="auth::user()->hunter['name']'s profile picture" class="my_profile-picture my-3">
                            @else
                                <img src="{{ asset('storage/' . auth::user()->hunter['image']) }}" alt="" class="my_profile-picture my-3">
                            @endif
                        </div>
                        <div class="my_character-name text-center">
                                <h2>{{ auth::user()->hunter['surname'] }}</h2>
                                <h3>{{ auth::user()->hunter['name'] }}</h3>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <a href="{{ route('edit', auth::user()->hunter['user_id']) }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8 mb-3">
                    <div class="row">
                        <div class="col">
                            <div class="card bg-transparent">
                                <div class="card-header my_header-glass text-white">
                                    Statistics
                                </div>
                                <div class="card-body my_bg-glass rounded-bottom">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <canvas id="myChart">
                                        
                                    </canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-2">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 col-xl-12 mb-3">
                            <div class="my_stats-card bg-transparent my_header-glass">
                                <div class="card-body my_bg-glass rounded text-center">
                                    <p class="card-title p-3">{{$countReviews}}</p>
                                    <p class="card-text pb-2">Reviews Received</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-12 mb-3">
                            <div class="my_stats-card bg-transparent my_header-glass">
                                <div class="card-body my_bg-glass rounded text-center">
                                    <p class="card-title p-3">{{substr($averageVote,0,3)}}</p>
                                    <p class="card-text pb-2">Average Vote</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-12 mb-3">
                            <div class="my_stats-card bg-transparent my_header-glass">
                                <div class="card-body my_bg-glass rounded text-center">
                                    <p class="card-title p-3">{{$totalMessages}}</p>
                                    <p class="card-text pb-2">Messages Received</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-xl-12 mb-3">
                            <div class="my_stats-card bg-transparent my_header-glass">
                                <div class="card-body my_bg-glass rounded text-center">
                                    <p class="card-title p-3">{{$dateDifference}}</p>
                                    <p class="card-text pb-2">Days as Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col">
                    <div class="my_stats-card card bg-transparent mb-3">
                        <div class="card-header my_header-glass text-white">
                            Sponsorships
                        </div>
                        <div class="card-body my_bg-glass rounded-bottom text-center">
                            @if ($remainingSponsorshipDays >= 1)
                            <p class="card-title p-3">{{$remainingSponsorshipDays}}</p>
                            <p class="card-text pb-2">days remaining</p>
                            @elseif ($remainingSponsorshipHours > 0)
                            <p class="card-title p-3">{{$remainingSponsorshipHours}}</p>
                            <p class="card-text pb-2">hours remaining</p>
                            @else
                            <p class="card-text pb-2">Buy a sponsorship and</p>
                            <p class="card-text pb-2">SHIFT your profile views!</p>
                            @endif
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('sponsorship.select')}}" class="btn btn-primary">Go to SPONSORSHIPS</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 mb-3">
                    <div class="card bg-transparent">
                        <div class="card-header my_header-glass text-white">
                            Latest Messages
                        </div>
                        <div class="card-body my_bg-glass rounded-bottom">
                            @if ($totalMessages == 0)
                                <p class="text-center text-white">No messages have been received</p>
                            @else
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
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="card bg-transparent">
                        <div class="card-header my_header-glass text-white">
                            Latest Reviews
                        </div>
                        <div class="card-body my_bg-glass rounded-bottom">
                            @if ($countReviews == 0)
                                <p class="text-center text-white">No reviews have been received </p>
                            @else
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
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('reviews')}}" class="btn btn-primary">Go to reviews</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- // SCRIPT -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Reviews Received', 'Average Vote', 'Messages Received', 'Days as Member'],
      datasets: [{
        label: 'Feedback From Customers',
        data: [{{$countReviews}}, {{ $averageVote }}, {{$totalMessages}}, {{$dateDifference}}],
        borderWidth: 1,
      }]
    },
    options: {
      scales: {
        y: {
          title:{
            display: true,
            text: 'Range',
            color:'black'
          },
          min: 0,
          max: 10,
          grid: {
                color: 'rgba(0, 0, 0, 0.2)' // Cambia il colore della griglia
            },
            ticks: {
                color: 'black',
            }
        },
        x:{
            ticks: {
                color: 'black',
            }
        }
      },
      plugins:{
        legend:{
            labels:{
                color:'black'
            }
        }
      }
    }
  });
</script>
@endsection

