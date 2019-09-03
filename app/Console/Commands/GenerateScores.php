<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateScores extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:scores';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Empty scores for each candidates by judge';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $candidates = \App\Candidate::orderByRaw('category, no')->get();
        $judges = \App\User::where('role', 'judge')->get();



        foreach ($candidates as $candidate) {

            foreach ($judges as $judge) {

                foreach (\App\Score::criterias as $criteria) {
                    $max = $criteria['max'];
                    \App\Score::create([
                        'candidate_id' => $candidate->id,
                        'user_id' => $judge->id,
                        'criteria' => $criteria['criteria'],
                        'score' => random_int($max - ($max * .25), $max),
                        'max' => $criteria['max']
                    ]);

                    echo "Score for Candidate: $candidate->name, Judge: $judge->name Criteria: {$criteria['criteria']}\n";
                }
            }
        }
    }
}
