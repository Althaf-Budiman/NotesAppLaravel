@extends('layouts.app')
@section('main')
    <div class="flex justify-center">
        <a href="{{ url('/notes/create') }}">
            <button class="btn gap-2 mt-5">
                Create New Note
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
            </button>
        </a>
    </div>
    <div class="flex flex-row flex-wrap mt-5 mx-8 justify-center gap-10">
        @foreach ($data as $item)
            <form action="{{ url("/notes/$item->id") }}" method="POST">
                <a href="{{ url("/notes/$item->id/edit") }}">
                    <div class="card w-96 bg-slate-800 hover:bg-slate-900 transition shadow-2xl">
                        <div class="card-body">
                            <h1 class="card-title">{{ $item->title }}</h1>
                            <p class="max-h-32 overflow-y-auto mt-3">{{ $item->note }}</p>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline btn-error btn-block mt-3">
                                <p>Delete</p>
                            </button>
                        </div>
                    </div>
                </a>
            </form>
        @endforeach
    </div>
@endsection