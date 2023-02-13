@extends('layouts.app') 
@section('main')
<form action="{{ url('/notes') }}" method="post">
    @csrf
    <textarea
        class="h-screen bg-transparent w-full"
        placeholder="  Type here.."
        name="note"
    >{{ old('note') }}</textarea>


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
        >Done</label
    >
    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <label for="my-modal" class="modal cursor-pointer">
        <label class="modal-box relative">
            <h3 class="font-bold text-lg">
                Create A New Note!
            </h3>
            <label class="label mt-4">
                <span class="label-text">Title :</span>
            </label>
            <input type="text" name="title" value="{{ old('title') }}" class="input input-bordered w-full max-w-xs" placeholder="Input Title Here!">
            <div class="modal-action">
                <label for="my-modal" class="btn btn-outline btn-error">Cancel</label>
                <button type="submit" class="btn btn-outline btn-primary">Create New Note</button>
            </div>
        </label>
    </label>
</form>
@endsection
