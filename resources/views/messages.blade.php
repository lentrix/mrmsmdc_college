@if(count($errors)>0)
<div class="alert alert-danger">

    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach

</div>
@endif


@if($message = Session::get('Success'))

<div class="alert alert-success">
    {{$message}}
</div>

@endif

@if($message = Session::get('Error'))

<div class="alert alert-danger">
    {{$message}}
</div>

@endif
