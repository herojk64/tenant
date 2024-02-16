@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-lg-4">
                <x-glovalnav />
            </div>
            <div class="col">
                <form class="container" method="POST" action="{{route('dashboard.store')}}">
                    @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                       {{Session::get('success')}}
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter the name of the tenant" class="form-control bg-white mb-3"/>
                        @error('name')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-primary d-block w-100">
                    submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
