<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookingMessage;
use App\Models\Review;

class PageController extends Controller
{
    public function dashboard(){

        $messages = BookingMessage::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(3);
        $totalMessages = BookingMessage::where('user_id', '=', auth()->user()->id)->count();
        $reviews = Review::where('user_id', '=', auth()->user()->id)->orderBy('created_at', 'DESC')->paginate(3);
        $countReviews = Review::where('user_id', '=', auth()->user()->id)->count();
        $sumReviews = Review::where('user_id', '=', auth()->user()->id)->sum('vote');

        if($countReviews > 0){
            $averageVote = (intval($sumReviews)/$countReviews);
        }else{
            $averageVote = '-';
        }
        
        return view('admin.dashboard', compact('reviews','messages','countReviews','averageVote','totalMessages'));
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
