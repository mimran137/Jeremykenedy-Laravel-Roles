@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <br>

                    <strong>Role:</strong> 
                    @php
                        $roleArr = array();
                    @endphp
                    
                    @foreach(auth()->user()->getRoles() as $role)
                        @php
                            $roleArr[] = $role->name
                        @endphp
                    @endforeach

                    {{ implode(', ', $roleArr) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
