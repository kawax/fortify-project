@extends('layouts.app')

@section('content')

    <h1>{{ __('Dashboard') }}</h1>

    @if (session('status'))
        <div role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div>
        <strong>{{ auth()->user()->name }}</strong>
    </div>

    <div>
        {{ __('You are logged in!') }}
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">
            {{ __('Logout') }}
        </button>
    </form>

@endsection
