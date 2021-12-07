<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        $reviews = review::with("reviews")->paginate(2);
        return view('review.index', compact('reviews'));
    }

    public function create(Request $request)
    {
        $id = $request->id;
        $cIp =  $this->getIPAddress();
        $isRate = review::where('ip',$cIp)->where('store_id',$id)->first();
        if ($isRate == null){
        $rate = $request->rate;
        $review = new Review();
        $review->store_id = $id;
        $review->rate = $rate;
        $review->ip = $cIp;
        $review->save();
        return redirect()->back()->withErrors(['succ' => 'store rating successfully !']);
    }else{
            return redirect()->back()->withErrors(['err' => 'This store is already rated!']);

        }
    }

    function getIPAddress()
    {
        //whether ip is from the share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } //whether ip is from the proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } //whether ip is from the remote address
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function store(Request $request)
    {
        //
    }

    public function show(review $review)
    {
        //
    }


    public function edit(review $review)
    {
        //
    }

    public function update(Request $request, review $review)
    {
        //
    }

    public function destroy(review $review)
    {
        //
    }
}
