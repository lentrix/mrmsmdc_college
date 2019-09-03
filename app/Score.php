<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{

    protected $fillable = ['candidate_id', 'user_id', 'criteria', 'score', 'max'];

    public const criterias = [
        ['criteria' => 'Playsuit Attire', 'max' => 10],
        ['criteria' => 'Team Uniform', 'max' => 10],
        ['criteria' => 'Beauty', 'max' => 25],
        ['criteria' => 'Body Shape/Figure', 'max' => 25],
        ['criteria' => 'Communication Skills', 'max' => 25],
        ['criteria' => 'Poise and Projection', 'max' => 25],
    ];

    public static function getScore($candidate_id, $judge_id, $criteria)
    {
        return static::where('candidate_id', $candidate_id)
            ->where('user_id', $judge_id)
            ->where('criteria', $criteria)
            ->first();
    }
}
