@extends('layouts.admin')

@section('contents')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.venue.create') }}" class="btn btn-success">Add Venue</a>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Club Name</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>Post Code</th>
                    <th>City/Town</th>
                    <th>County</th>
                    <th>Logo</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                @foreach($venues as $venue)
                    <tr>
                        <td>{{ $venue->id }}</td>
                        <td>{{ $venue->club_name }}</td>
                        <td>{{ $venue->address_1 }}</td>
                        <td>{{ $venue->address_2 }}</td>
                        <td>{{ $venue->post_code }}</td>
                        <td>{{ $venue->city_town }}</td>
                        <td>{{ $venue->County }}</td>
                        <td><img src="{{ $venue->thumbnail }}"></td>
                        <td>{!! $venue->description !!}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection