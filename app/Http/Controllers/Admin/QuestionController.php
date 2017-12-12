<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index($id)
    {
        $module = Module::find($id);

        $objs = Question::where('module_id', $id)->get();

        return view('admin.questions.index', compact('objs', 'module'));
    }
}
