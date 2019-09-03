
<div class="row">

    <div class="col-md-5">
        <table class="table table-bordered table-condensed">
            <thead>
                <th>Candidates</th>
                <th>Play Suit</th>
                <th>Team Uniform</th>
            </thead>
            <tbody>
                @foreach($candidates as $candidate)

                <tr>
                    <td>{{$candidate->no}}.) {{$candidate->name}} [{{$candidate->dept}}]</td>
                    <td>{{$candidate->columnAverage('Playsuit Attire')}}</td>
                    <td>{{$candidate->columnAverage('Team Uniform')}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

    <div class="col-md-7">
        <table class="table table-bordered table-condensed" style="table-layout:fixed">
            <thead>
                <th>Beauty</th>
                <th>Body Shape</th>
                <th>Communication</th>
                <th>Poise</th>
                <th>Total</th>
            </thead>
            <tbody>
                @foreach($candidates as $candidate)

                <tr>
                    <td>{{$b=$candidate->columnAverage('Beauty')}}</td>
                    <td>{{$bs=$candidate->columnAverage('Body Shape/Figure')}}</td>
                    <td>{{$cs=$candidate->columnAverage('Communication Skills')}}</td>
                    <td>{{$pp=$candidate->columnAverage('Poise and Projection')}}</td>
                    <td>{{number_format($b+$bs+$cs+$pp, 2)}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>

</div>
