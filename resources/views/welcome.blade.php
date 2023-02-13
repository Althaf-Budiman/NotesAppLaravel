@extends('layouts.app') @section('main')
<div class="flex w-full justify-center h-full">
    <div class="w-fit p-5 mockup-window border bg-base-300 rounded-xl mt-52">
        <h1 class="text-center font-semibold text-xl">Welcome to Notes App!</h1>
        <a href="{{ url('/notes') }}">
            <div
                class="text-center p-2 mt-5 w-full rounded-3xl btn btn-outline"
            >
                Go to the App
            </div>
        </a>
    </div>
</div>
@endsection
