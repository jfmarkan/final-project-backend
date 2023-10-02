<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BookingMessage;
use App\Models\HunterSponsorship;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard(){
        
        $hunter = auth()->user()->created_at;
        if ($hunter){
            $creationDate = Carbon::parse($hunter);
            $currentDate= Carbon::now();
        }
        $dateDifference= $creationDate->diffInDays($currentDate);

        $activeSponsorship = HunterSponsorship::where('hunter_id', Auth::id())
            ->where('sponsorship_end', '>', Carbon::now())
            ->latest()
            ->first();

        if ($activeSponsorship) {
            $remainingSponsorshipDays = $currentDate->diffInDays($activeSponsorship->sponsorship_end);
            $remainingSponsorshipHours = $currentDate->diffInHours($activeSponsorship->sponsorship_end);
        } else {
            $remainingSponsorshipDays = 0;
            $remainingSponsorshipHours = 0;
        }
        
        $messages = BookingMessage::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(3);
        $totalMessages = BookingMessage::where('user_id', '=', auth()->user()->id)->count();
        $reviews = Review::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(3);
        $countReviews = Review::where('user_id', '=', auth()->user()->id)->count();
        $sumReviews = Review::where('user_id', '=', auth()->user()->id)->sum('vote');

        $vote5 = Review::where('user_id', '=', auth()->user()->id)->where('vote', '=', '5')->count();

        $vote4 = Review::where('user_id', '=', auth()->user()->id)->where('vote', '=', '4')->count();

        $vote3 = Review::where('user_id', '=', auth()->user()->id)->where('vote', '=', '3')->count();

        $vote2 = Review::where('user_id', '=', auth()->user()->id)->where('vote', '=', '2')->count();

        $vote1 = Review::where('user_id', '=', auth()->user()->id)->where('vote', '=', '1')->count();

        if($countReviews > 0){
            $averageVote = (intval($sumReviews)/$countReviews);
        }else{
            $averageVote = '0';
        }
        return view('admin.dashboard', compact('reviews','messages','countReviews','averageVote','totalMessages', 'dateDifference', 'remainingSponsorshipDays', 'remainingSponsorshipHours', 'vote5', 'vote4', 'vote3', 'vote2', 'vote1'));
    }

    public function inbox(){

        $messages = BookingMessage::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(20);
        
        return view('admin.inbox', compact('messages'));
    }

    public function reviews(){
        $review = Review::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(20);
        
        return view('admin.review', compact('review'));
    }
}
