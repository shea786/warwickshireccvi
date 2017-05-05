<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<title>Admin Panel</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <ul>
                    <li><a href="{{ route('admin.match.index') }}">Matches</a></li>
                    <li><a href="{{ route('admin.teams.index') }}">Teams</a></li>
                    <li><a href="{{ route('admin.venue.index') }}">Venue</a></li>
                    <li><a href="{{ route('admin.results.index') }}">Results</a></li>
                    
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                </ul>
            </div>
            <div class="col-md-10">
                @yield('contents')
            </div>
        </div>
    </div>
</body>
</html>