@extends('layouts.admin')

@section('contents')
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Match Type</th>
                    <th>Season ID</th>
                    <th>Home Team</th>
                    <th>Away Team</th>
                    <th>Venue</th>
                    <th>Start date and time</th>
                    <th>Actions</th>
                    <th></th>
                </tr>
                @foreach ($matches as $match)
                    <tr>
                        <td>{{ $match->id }}</td>
                        <td>{{ $match->match_type }}</td>
                        <td>{{ $match->season_id }}</td>
                        <td>{{ $match->home_team_model->name }}</td>
                        <td>{{ $match->away_team_model->name }}</td>
                        <td>{{ $match->venue_model->club_name }}</td>
                        <td>{{ $match->start_date_and_time }}</td>
                        <td>
                            @if(count($match->scorecardModel) == 1)
                                <a href="{{ route('admin.results.scorecard',$match->id) }}" class="btn btn-success">View Scorecard</a>
                            @else
                                <a href="#" id="myBtn" onclick="matchID={{ $match->id }};showForm(this.id);" class="btn btn-success">Add Scorecard</a>
                            @endif
                        </td>
                        <td>
                            <!-- The Modal -->
                            <div id="myModal{{ $match->id }}" class="modal">
                              <!-- Modal content -->
                              <div class="modal-content">
                                <span class="close">&times;</span>
                                {!! Form::open([route('admin.results.add'),'METHOD' => 'POST']) !!}
                                    {!! Form::label('toss','Who won the toss?') !!}
                                    {!! Form::select('toss', [$match->home_team_model->id => $match->home_team_model->name, $match->away_team_model->id => $match->away_team_model->name],null,['class' => 'form-control']) !!}
                                    
                                    {!! Form::label('tossResult','What was the result of the toss?') !!}
                                    {!! Form::select('tossResult', ['Batting First' => 'Batting First', 'Bowling First' => 'Bowling First'],null,['class' => 'form-control']) !!}
                                    
                                    {{ Form::hidden('match_id', $match->id) }}
                                    
                                    {!! Form::submit('Add Scorecard',['class' => 'form-control btn btn-success']) !!}
                                {!! Form::close() !!}
                              </div>
                            
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    <script>
    var matchID = "";
        function showForm(item){
            // Get the modal
            var modal = document.getElementById("myModal" + matchID);
            // Get the button that opens the modal
            var btn = document.getElementById(item);
            
            
            // When the user clicks on the button, open the modal 
            modal.style.display = "block";
            var span = document.getElementsByClassName("close")[0];
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>
@endsection