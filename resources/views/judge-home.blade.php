@extends('layout')

@section('content')

<?php $_id = auth()->user()->id; ?>

<p class="big">Judge's Score Sheet</p>
<div class="judge-name">{{auth()->user()->name}}</div>

<form method="post" action="{{url('/submit')}}">{{csrf_field()}}

<p class="big" style="margin-top:20px">Male Candidates</p>
<table class="scoresheet">
    <thead>
        <tr class="center">
            <th style="width: 240px">Candidate</th>
            <th>
                Playsuit<br>Attire<br>10
            </th>
            <th>
                Team<br>Uniform<br>10
            </th>
            <th>
                Beauty <strong><a href="#" title="Wholesome and appealing look">[?]</a></strong>
                <br>25
            </th>
            <th>
                Body Shape
                <strong><a href="#" title="Physical fitness and proportionate figure">[?]</a></strong>
                <br>25
            </th>
            <th>
                Communication<br>Skills
                <strong><a href="#" title="Wit & Intelligence, Delivery, and Meaningful Response to the Question">[?]</a></strong>
                <br>25
            </th>
            <th>
                Poise and<br>Projection
                <strong><a href="#" title="Stage Presence, showmanship, projection, self-confidence">[?]</a></strong>
                <br>25
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach($male as $mC)

        <tr>
            <td>{{$mC->name}} <span class="pull-right">[{{$mC->dept}}]</span></td>
            @foreach($criterias as $crit)
                <?php $score = $mC->score($_id, $crit); ?>
                <td style="text-align: center">
                    <input type="number" class="score"
                            value="{{$score->score}}"
                            name="score[{{$score->id}}]"
                            data-max="{{$score->max}}">
                </td>
            @endforeach
        </tr>

        @endforeach

    </tbody>
</table>

<p class="big" style="margin-top:20px">Female Candidates</p>
<table class="scoresheet">
    <thead>
        <tr class="center">
            <th style="width: 240px">Candidate</th>
            <th>
                Playsuit<br>Attire<br>10
            </th>
            <th>
                Team<br>Uniform<br>10
            </th>
            <th>
                Beauty <strong><a href="#" title="Wholesome and appealing look">[?]</a></strong>
                <br>25
            </th>
            <th>
                Body Shape
                <strong><a href="#" title="Physical fitness and proportionate figure">[?]</a></strong>
                <br>25
            </th>
            <th>
                Communication<br>Skills
                <strong><a href="#" title="Wit & Intelligence, Delivery, and Meaningful Response to the Question">[?]</a></strong>
                <br>25
            </th>
            <th>
                Poise and<br>Projection
                <strong><a href="#" title="Stage Presence, showmanship, projection, self-confidence">[?]</a></strong>
                <br>25
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach($female as $eC)

        <tr>
            <td>{{$eC->name}} <span class="pull-right">[{{$eC->dept}}]</span></td>
            @foreach($criterias as $crit)
                <?php $score = $eC->score($_id, $crit); ?>
                <td style="text-align: center">
                    <input type="number" class="score"
                            value="{{$score->score}}"
                            name="score[{{$score->id}}]"
                            data-max="{{$score->max}}">
                </td>
            @endforeach
        </tr>

        @endforeach

    </tbody>
</table>

<hr>

<button class="btn btn-primary btn-lg">Submit Scores</button>
<br>
</form>
@stop

@section('scripts')

<script>

$(document).ready(function(){
    $(".score").change(function(){
        var max = $(this).attr('data-max') * 1;
        var score = $(this).val() * 1;
        if($(this).val() > max){
            alert('The score you entered exceeded the maximum score.' + score + " max: " + max);
            $(this).val(max);
        }
    })

    setTimeout(function(){
        $(".alert").fadeOut(1000);
    }, 5000);
});

</script>

@stop
