@extends('layouts.app')

@section('content')
<div class="container wrapper-home">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <p>
                    "Welcome, valiant warrior, to the realm of epic adventures and mystical quests! Your journey begins here, where heroes are forged and legends are written. Arm yourself with courage and valor as you embark on a quest like no other. The fate of this fantastical world lies in your hands. Are you ready to embrace your destiny and write your own heroic saga?"
                    </p>
                </div>
                <button class="my-btn btn align-self-center" onclick="window.location.href='{{route('dashboard')}}'">
                    <span class="icon-hunter">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 516.18 516.57">
                            <title>hunters target</title>
                            <path d="M382.68,103.93V62.34h24V152C486.33,162.56,536.89,206.3,559.76,284c-8.78,0-16.46.15-24.12-.19-1,0-2.2-2.58-2.67-4.15a139.77,139.77,0,0,0-30.66-54.87q-46.1-50.47-114.55-48.24c-1.51,0-3,0-5.07,0V127.77c-9.63,1.46-18.77,2.11-27.54,4.28Q236.31,161.36,206.39,280.32c-.65,2.6-1.41,4-4.5,3.88-6.36-.28-12.74-.12-19.11-.17a8.64,8.64,0,0,1-1.75-.51c9.15-49.57,32.06-91.37,69.65-124.9S332.31,107.41,382.68,103.93Z" transform="translate(-136.59 -62.34)"/><path d="M357.9,534.26C269.46,520.71,184.14,442.34,178,332.76H136.59V308.84h90.12c4.1-45.81,22.72-84,56.64-114.38,21.33-19.1,46.17-31.68,74.58-38.1v23.91c-71.84,25.1-107.93,75.25-107.7,152.24H202.06c1.25,9,1.74,17.35,3.63,25.4q28.4,120.7,148.62,151.25c2.92.74,4.16,1.67,4,4.83-.25,6.21-.08,12.44-.1,18.66A8.65,8.65,0,0,1,357.9,534.26Z" transform="translate(-136.59 -62.34)"/><path d="M431.34,485V460.31c33.54-9.3,60.72-27.9,80.91-56.27s28.46-60,26.21-95.17h47.85C586,245.58,536.45,152.58,431.42,131V107.49c76.78,9.37,172.36,81.57,180,201.09h41.4v23.88h-90c-4.11,46.15-23,84.56-57.27,115A163.47,163.47,0,0,1,431.34,485Z" transform="translate(-136.59 -62.34)"/><path d="M229.75,357.43h24.63c25.32,72.09,75.42,108.24,152.34,107.79v48.47c10.51-1.67,20.4-2.55,29.95-4.87,64.8-15.8,110.39-54.61,136.57-115.92,4.3-10.07,6.75-20.95,9.69-31.55.86-3.1,1.92-4.31,5.23-4.16,6.5.28,13,.08,19.56.08-8.78,76.17-82.17,173.6-200.77,180.34V578.9H382.7V489.42C303,478.63,252.41,435,229.75,357.43Z" transform="translate(-136.59 -62.34)"/>
                        </svg>
                    </span>
                    <span class="text-btn">
                        Go to dashboard
                    </span>
                </button>
            </div>
        </div>
        <div class="sponsorship">
            <div class="container my_sponsorship-wrapper">
    <div class="card bg-transparent my_bg-glass">
        <h1 class="title">
            Unlock the Full Potential of Your Profile!
        </h1>
        <h3 class="subtitle">
            Introducing our Exclusive Sponsorship Program
        </h3>

        <form method="get" action="{{ route('sponsorship.billing') }}" id="sponsorship-selection">
            @csrf
            <input type="hidden" name="sponsorship_id" id="sponsorship_id" value="">
        </form>

        <div class="promos">  
            <div class="promo">
                <div class="deal">
                    <span>Premium</span>
                    <span>72 hour Sponsorship</span>
                </div>
                <span class="price">€ 5,99</span>
                    <ul class="features">
                        <li>Tune up your</li>
                        <li>profile</li>
                        <li>and SHIFT your views!</li>   
                    </ul>
                    <div class="d-flex justify-content-center my-3">
                        <button type="button" onclick="selected('2')" class="btn btn-primary">Hire Premium</button>
                    </div>
            </div>
            <div class="promo scale">
                <div class="deal">
                    <span>Plus</span>
                    <span>144 hour Sponsorship</span>
                </div>
                <span class="price">€ 9,99</span>
                <ul class="features">
                    <li>Get the Most</li>
                    <li>out of our</li>
                    <li>Sponsorship Program</li>   
                </ul>
                <div class="d-flex justify-content-center my-3">
                    <button onclick="selected('3')" class="btn btn-primary">Hire PLUS</button>
                </div>
            </div>
            <div class="promo">
                <div class="deal">
                    <span>Basic</span>
                    <span>24 hour Sponsorship</span>
                </div>
                <span class="price">€ 2,99</span>
                <ul class="features">
                    <li>See how your</li>
                    <li>visits grow!</li>
                    <li>And more...</li>   
                </ul>
                <div class="d-flex justify-content-center my-3">
                    <button type="button" onclick="selected('1')" class="btn btn-primary">Hire Basic</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
        </div>
    </div>
</div>
@section('custom-scripts-tail')
<script>
    function selected(sponsorship) {
        document.getElementById('sponsorship_id').value = sponsorship;
        document.getElementById('sponsorship-selection').submit();
    }
</script>
@endsection