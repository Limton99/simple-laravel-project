<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function review() {
        $reviews = new Contact();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function reviewOne($id) {
        $review = new Contact();
        return view('review-one', ['review' => $review->find($id)]);
    }

    public function review_check(Request $request) {
        $valid = $request->validate([
            'email'=>'required|min:4|max:100',
            'subject'=>'required|min:4|max:100',
            'message'=>'required|min:4|max:100'
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }

    public function reviewUpdate($id) {
        $review = new Contact();
        return view('review-update', ['review' => $review->find($id)]);
    }

    public function reviewUpdateSubmit($id, Request $request) {
        $valid = $request->validate([
            'email'=>'required|min:4|max:100',
            'subject'=>'required|min:4|max:100',
            'message'=>'required|min:4|max:100'
        ]);

        $review = Contact::find($id);
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review-one', $review->id);
    }

    public function reviewDelete($id) {
        $review = Contact::find($id);
        $review->delete();
        return redirect()->route('review');
    }
}
