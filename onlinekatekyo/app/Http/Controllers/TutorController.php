<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    public function index()
    {
        $tutors = Tutor::all();
        $parser = new \cebe\markdown\GithubMarkdown();
        return view('tutor.index')->with([
            'tutors' => $tutors,
            'parser' => $parser,
        ]);
    }

    public function create()
    {
        return view('tutor.create')->with('template',
            "## 大学\n"
            ."hoge大学\n\n"
            ."## 指導可能時間\n"
            ."月曜日，17:00~\n\n"
            ."## 指導可能教科\n"
            ."### 中学\n"
            ."- 国語\n"
            ."### 高校\n"
            ."- なし\n\n"
            ."## 指導可能学年\n"
            ."- 中学受験（小4~6）\n"
            ."- 中学，高校の全学年\n\n"
            ."## 過去の指導実績\n"
            ."- 合格率100%\n\n"
            ."## 出身高校\n"
            ."- fuga高校\n\n"
            ."## 出身中学\n"
            ."- piyo中\n\n"
            ."など……\n"
        );
    }

    public function store(Request $request)
    {
        print $request->name;
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }
}
