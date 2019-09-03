<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JudgeController extends Controller
{
    public function submit(Request $request)
    {
        foreach ($request['score'] as $scoreId => $scoreInput) {
            $s = \App\Score::find($scoreId);
            $s->score = $scoreInput;
            $s->save();
        }

        return redirect()->back()->with(
            'Success',
            'Scores have been updated. Last saved: ' . date('Y-m-d h:m:s a')
        );
    }
}
