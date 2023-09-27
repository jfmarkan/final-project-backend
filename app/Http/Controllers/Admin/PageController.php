<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BookingMessage;
use App\Models\Review;
use App\Models\User;
class PageController extends Controller
{
    public function dashboard(){
        
        $hunter = auth()->user()->created_at;
        if ($hunter){
            $creationDate = Carbon::parse($hunter);
            $currentDate= Carbon::now();
        }

        $dateDifference= $creationDate->diffInDays($currentDate);


        
        $messages = BookingMessage::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(3);
        $totalMessages = BookingMessage::where('user_id', '=', auth()->user()->id)->count();
        $reviews = Review::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(3);
        $countReviews = Review::where('user_id', '=', auth()->user()->id)->count();
        $sumReviews = Review::where('user_id', '=', auth()->user()->id)->sum('vote');
        $memberSince = User::where('id', '=', auth()->user()->id)->pluck('created_at');
        //$timeAsMember= date_diff($currentDate, $memberSince);
        //dd($memberSince);

        if($countReviews > 0){
            $averageVote = (intval($sumReviews)/$countReviews);
        }else{
            $averageVote = '-';
        }
        
        return view('admin.dashboard', compact('reviews','messages','countReviews','averageVote','totalMessages', 'dateDifference'));
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
