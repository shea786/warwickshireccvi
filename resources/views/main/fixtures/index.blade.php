@extends('layouts.main')

@section('HTMLTitle')
Fixtures
@endsection

@section('contents')
           <!-- START PAGE TITILE SECTION -->
			<div class="player-profile-section page-title-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="section-title profile-title">
                                <h1>Fixtures</h1>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="pagination-area">
                                <ul>
                                    <li><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li><a href="#">Bread<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    <li class="active"><a href="#">Crumbs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF /. PAGE TITLE SECTION -->
            <div class="fixture-section">
                <div class="container">
                    @foreach($matchtypes as $matchtype)
                        <div class="row">
                            <div class="col-md-12">
                                <div class="world-cup">
                                    <h1>{{ $matchtype->display_name }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row inner-custom-row">
                            <div class="col-md-12">
                                @foreach($fixtures as $fixture)
                                    @if($fixture->match_type == $matchtype->id)
                                    <div class="row">
                                            <div class="white-match">
                                                <div class="col-md-4">
                                                    <div class="match-left">
                                                        <div class="fixture-team-img">
                                                            <a href="#"><img src="/uploads/teams/{{ $fixture->home_team_model->id }}/{{ $fixture->home_team_model->logo }}" width="80" height="77" alt=""></a>
                                                        </div>
                                                        <div class="fixture-team-name fixture-team-left">
                                                            <h2>{{ $fixture->home_team_model->name }}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="fixture-team-date">
                                                        <h1>{{ Carbon\Carbon::parse($fixture->start_date_and_time)->toDayDateTimeString() }}</h1>
                                                        <p>{{ $fixture->venue_model->club_name }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="match-right">
                                                        <div class="fixture-team-name fixture-team-right text-right">
                                                            <h2>{{ $fixture->away_team_model->name }}</h2>
                                                        </div>
                                                        <div class="fixture-team-img">
                                                            <a href="#"><img src="/uploads/teams/{{ $fixture->away_team_model->id }}/{{ $fixture->away_team_model->logo }}" width="64" height="84" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                
                
            <div class="prev-and-next-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="prev-and-next-btn-section prev-and-next-btn-section1">
                                <div class="prev-and-next-btn">
                                    <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Prev</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="prev-and-next-btn-section">
                                <div class="prev-and-next-btn">
                                    <a href="#">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection