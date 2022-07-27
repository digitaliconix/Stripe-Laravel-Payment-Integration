

@extends('layout.master')


@section('content')



    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Thanks for your order</h1>
            <p> We appreciate your business!  If you have any questions, please email
                <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>.
            </p>

        </div>

    </div> <!-- /container -->



@endsection

