@extends('layout')

@section('content')

<p class="big uline">Summary Results</p>

<p class="big">Male Candidates</p>

@include('summary',['candidates'=>$maleCandidates])


<p class="big">Female Candidates</p>

@include('summary',['candidates'=>$femaleCandidates])


@stop
