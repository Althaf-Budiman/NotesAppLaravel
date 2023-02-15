@extends('layouts.app') 
@section('main')
<form action="{{ url("/notes/$note->id") }}" method="post">
    @csrf
    @method('PATCH')
    <textarea
        class="h-[90vh] bg-transparent w-full p-5"
        placeholder="Type here.."
        name="note"
    >{{ old('note', $note->note) }}</textarea>


    @if ($errors->any())
        <div class="alert alert-error fixed top-60 left-auto right-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-white font-bold">{{ $error }}</li> <br>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- The button to open modal -->
    <label
        for="my-modal"
        class="fixed z-90 bottom-10 right-8 btn w-20 h-20 rounded-full drop-shadow-lg flex justify-center items-center text-white text-xl hover:drop-shadow-2xl"
        title="Save Editing" >
        <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0" />

            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

            <g id="SVGRepo_iconCarrier">
                <path
                    d="M4 6C4 4.89543 4.89543 4 6 4H12H14.1716C14.702 4 15.2107 4.21071 15.5858 4.58579L19.4142 8.41421C19.7893 8.78929 20 9.29799 20 9.82843V12V18C20 19.1046 19.1046 20 18 20H6C4.89543 20 4 19.1046 4 18V6Z"
                    stroke="#B5CDF5"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <path d="M8 4H13V7C13 7.55228 12.5523 8 12 8H9C8.44772 8 8 7.55228 8 7V4Z" stroke="#B5CDF5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7 15C7 13.8954 7.89543 13 9 13H15C16.1046 13 17 13.8954 17 15V20H7V15Z" stroke="#B5CDF5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </g>
        </svg>
        </label
    >
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <label for="my-modal" class="modal cursor-pointer">
        <label class="modal-box relative">
            <h3 class="font-bold text-lg">
                Update the note
            </h3>
            <label class="label mt-4">
                <span class="label-text">Title :</span>
            </label>
            <input type="text" maxlength="55" name="title" value="{{ old('title', $note->title) }}" class="input input-bordered w-full max-w-xs" placeholder="Input Title Here!">
            <div class="modal-action">
                <label for="my-modal" class="btn btn-outline btn-error">Cancel</label>
                <button type="submit" class="btn btn-outline btn-primary">Update the note</button>
            </div>
        </label>
    </label>
</form>
@endsection
