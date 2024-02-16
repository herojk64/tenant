@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="container bg-white">
                    <div class="row">
                        <div class="col">
                            <h1 class="text-center">
                            Welcome
                            </h1>
                            <p class="text-center">

                                @auth()
                                    <a href="{{route('dashboard.index')}}">Click here</a>
                                    to go to dashboard
                                @endauth
                            @guest()

                            Please login to continue, <a href="{{route('login')}}">login</a>
                            @endguest
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
