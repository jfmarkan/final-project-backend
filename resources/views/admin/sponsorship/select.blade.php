@extends('layouts.app')

@section('content')
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

@section('custom-scripts-tail')
<script>
    function selected(sponsorship) {
        document.getElementById('sponsorship_id').value = sponsorship;
        document.getElementById('sponsorship-selection').submit();
    }
</script>
@endsection