@extends('layouts.main')

@section('HTMLTitle')
Cricket Scorecard
@endsection

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <tr>
                        <th id="tableAddInnings">Innings Name</th>
                        <th><a id="buttonAddInnings" class="btn btn-success" href="#" onclick="addInnings();return false;">Add Innings</a></th>
                    </tr>
                    <tr>
                        <th></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="/cricket/src/core.js"></script>
    <script>
        function addInnings(s){
            s = scorebook();
            var battingTeam = "Warwickshire CCVI";
            s.addInnings(battingTeam);
            document.getElementById("tableAddInnings").innerHTML = battingTeam + " Batting";
            
        }
    </script>
@endsection