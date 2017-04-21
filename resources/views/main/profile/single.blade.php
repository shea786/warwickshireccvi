@extends('layouts.main')

@section('HTMLTitle')
    {{ $user->firstname }} {{ $user->lastname }} | Profile
@endsection

@section('contents')
            
            <div class="instagram-section">
                <!-- LightWidget WIDGET -->
                <script src="http://lightwidget.com/widgets/lightwidget.js"></script>
                <iframe src="http://lightwidget.com/widgets/f58c7339f2bd50d7baa7a3d22812f2cf.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

                <div class="carry-olpdman-btn">
                    <a href="#"><i class="fa fa-instagram"></i> Visit @CarryOldman</a>
                </div><!-- end /. instragram profile -->
            </div> <!-- end .instagram-section -->
@endsection