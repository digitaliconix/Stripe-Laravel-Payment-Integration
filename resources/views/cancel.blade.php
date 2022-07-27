

@extends('layout.master')


@section('content')



    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Payment Failed</h1>
            <p> Payment not processed! If you have any questions, please email
                <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>.
            </p>
        </div>

    </div> <!-- /container -->



@endsection

