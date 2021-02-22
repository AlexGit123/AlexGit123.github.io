<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(){

        $faqs = Faq::take(5)->get();

        return view('faqs.index', ['faqs' => $faqs]);
    }

    public function show(Faq $faq){

        return view('faqs.show', ['faq' => $faq]);
    }

    public function create(){

        return view('faqs.create');
    }

    public function store(Request $request){

        Faq::create($this->validateFaq($request));

        return redirect(route('faqs.index'));
    }

    public function edit(Faq $faq){

        return view('faqs.edit', ['faq' => $faq]);
    }

    public function update(Faq $faq, Request $request){

        $faq->update($this->validateFaq($request));

        return redirect(route('faqs.show', $faq));

    }

    public function delete($id){

        $faq = Faq::find($id);

        $faq->delete();

        return redirect(route('faqs.index', $faq));
    }


    public function validateFaq(Request $request)
    {
        return $request->validate([
            'answer' => 'required',
            'question' => 'required',
            'link' => 'required'
        ]);
    }
}
