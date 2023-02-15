@extends('layouts.app')
@section('main')
    <a href="{{ url('/notes/create') }}" title="Create New Note">
        <label
            for="my-modal"
            class="fixed z-90 bottom-10 right-8 btn w-20 h-20 rounded-full drop-shadow-lg flex justify-center items-center text-white text-xl hover:drop-shadow-2xl" >
            <svg class="h-10 w-10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="create-note" class="icon glyph" fill="#B5CDF5">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    <g id="SVGRepo_iconCarrier">
                    <path d="M20.71,3.29a2.91,2.91,0,0,0-2.2-.84,3.25,3.25,0,0,0-2.17,1L9.46,10.29s0,0,0,0a.62.62,0,0,0-.11.17,1,1,0,0,0-.1.18l0,0L8,14.72A1,1,0,0,0,9,16a.9.9,0,0,0,.28,0l4-1.17,0,0,.18-.1a.62.62,0,0,0,.17-.11l0,0,6.87-6.88a3.25,3.25,0,0,0,1-2.17A2.91,2.91,0,0,0,20.71,3.29Z"/>
                    <path d="M20,22H4a2,2,0,0,1-2-2V4A2,2,0,0,1,4,2h8a1,1,0,0,1,0,2H4V20H20V12a1,1,0,0,1,2,0v8A2,2,0,0,1,20,22Z" style="fill:#B5CDF5"/>
                    </g>
                </svg>
        </label
    >
    </a>
    <div class="flex flex-row flex-wrap mt-5 mx-8 justify-center gap-10">
        @foreach ($data as $item)
            <form action="{{ url("/notes/$item->id") }}" method="POST">
                <a href="{{ url("/notes/$item->id/edit") }}" title="View Or Edit Note">
                    <div class="card w-96 bg-slate-800 hover:bg-slate-900 transition shadow-2xl">
                        <div class="card-body">
                            <h1 class="card-title">{{ $item->title }}</h1>
                            <p class="max-h-32 overflow-y-auto mt-3">{{ $item->note }}</p>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline btn-error btn-block mt-3" title="Delete Note">
                                <p>Delete</p>
                            </button>
                        </div>
                    </div>
                </a>
            </form>
        @endforeach
    </div>
@endsection