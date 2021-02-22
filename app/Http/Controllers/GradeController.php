<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function index(){

        $grades = Grade::all();

        return view('grades.index', ['grades' => $grades]);
    }


    public function create()
    {
        return view('grades.create');

    }


    public function store()
    {
        $grade = new Grade();

        $grade->course_name = request('course_name');
        $grade->test_name = request('test_name');
        $grade->lowest_passing_grade = request('lowest_passing_grade');
        $grade->best_grade = request('best_grade');

        $grade->save();

        return redirect('grades');
    }

    public function show($id)
    {
        $grade = Grade::find($id);

        return view('grades.show', ['grade' => $grade]);

    }


    public function edit($id)
    {
        $grade = Grade::find($id);

        return view('grades.edit', ['grade' => $grade]);
    }


    public function update($id)
    {
        $grade = Grade::find($id);

        $grade->course_name = request('course_name');
        $grade->test_name = request('test_name');
        $grade->lowest_passing_grade = request('lowest_passing_grade');
        $grade->best_grade = request('best_grade');

        $grade->save();

        return redirect('/grades/' . $grade->id);
    }


    public function delete($id){

        $grade = Grade::find($id);

        $grade->delete();

        return redirect('/grades');
    }
}
