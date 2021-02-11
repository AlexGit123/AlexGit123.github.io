<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function show(){

    $faqs = Faq::all();

        return view('/faqs/faq', [
                'faqs' => $faqs
            ]);
    }

    public function create(){

        return view('faqs.create');
    }

    public function store(){

        $faq = new Faq();

        $faq->question = \request('question');
        $faq->answer = \request('answer');
        $faq->link = \request('link');

        $faq->save();

        return redirect('faqs');
    }
    //
}
