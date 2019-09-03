<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    public function score($user_id, $criteria)
    {
        return \App\Score::where('user_id', $user_id)
            ->where('candidate_id', $this->id)
            ->where('criteria', $criteria)
            ->first();
    }

    public function columnAverage($criteria)
    {
        $scores = \App\Score::where('criteria', $criteria)
            ->where('candidate_id', $this->id)
            ->get();
        $total = 0;
        $highest = $lowest = $scores['0']->score;

        foreach ($scores as $score) {
            $total += $score->score;
            if ($highest < $score->score) $highest = $score->score;
            if ($lowest > $score->score) $lowest = $score->score;
        }

        return number_format(($total - ($highest + $lowest)) / 3, 2);
    }
}
