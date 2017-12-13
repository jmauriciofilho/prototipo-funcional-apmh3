<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function index($id)
    {
        $module = Module::find($id);

        $objs = Question::where('module_id', $id)->get();

        return view('admin.questions.index', compact('objs', 'module'));
    }

    public function create($id)
    {
        return view('admin.questions.create', compact('id'));
    }

    public function store($id)
    {
        DB::beginTransaction();

        $question = Question::create([
            'content' => \request()->get('content'),
            'module_id' => $id
        ]);

        Option::create([
            'content' => \request()->get('option_correct'),
            'question_id' => $question->id,
            'is_correct' => true
        ]);

        Option::create([
            'content' => \request()->get('option_error1'),
            'question_id' => $question->id,
            'is_correct' => false
        ]);

        Option::create([
            'content' => \request()->get('option_error2'),
            'question_id' => $question->id,
            'is_correct' => false
        ]);

        Option::create([
            'content' => \request()->get('option_error3'),
            'question_id' => $question->id,
            'is_correct' => false
        ]);

        DB::commit();

        return redirect('/modules/'.$id.'/questions');
    }

    public function details($module_id, $id)
    {
        $module = Module::find($module_id);
        $question = Question::find($id);
        $optionCorrect = Option::where('question_id', $id)->where('is_correct', true)->get();
        $optionError = Option::where('question_id', $id)->where('is_correct', false)->get();

        $modelQuestion = array([
            'content' => $question->content,
            'option_correct' => $optionCorrect[0]->content,
            'option_error1' => $optionError[0]->content,
            'option_error2' => $optionError[1]->content,
            'option_error3' => $optionError[2]->content,
        ]);

        //dd($modelQuestion);

        return view('admin.questions.details', compact('module', 'modelQuestion'));
    }
}
