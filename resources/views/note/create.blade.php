@extends('layouts.app') 
@section('main')
<form action="{{ url('/notes') }}" method="post">
    @csrf
    <textarea
        class="h-[90vh] bg-transparent w-full p-5"
        placeholder="Type here.."
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
        title="Done Create Note" >
        <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0" />

            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

            <g id="SVGRepo_iconCarrier">
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M19.7071 6.29289C20.0976 6.68342 20.0976 7.31658 19.7071 7.70711L10.4142 17C9.63316 17.7811 8.36683 17.781 7.58579 17L3.29289 12.7071C2.90237 12.3166 2.90237 11.6834 3.29289 11.2929C3.68342 10.9024 4.31658 10.9024 4.70711 11.2929L9 15.5858L18.2929 6.29289C18.6834 5.90237 19.3166 5.90237 19.7071 6.29289Z"
                    fill="#B5CDF5"
                />
            </g>
        </svg>
        </label
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
            <input type="text" maxlength="55" name="title" value="{{ old('title') }}" class="input input-bordered w-full max-w-xs" placeholder="Input Title Here!">
            <div class="modal-action">
                <label for="my-modal" class="btn btn-outline btn-error">Cancel</label>
                <button type="submit" class="btn btn-outline btn-primary">Create New Note</button>
            </div>
        </label>
    </label>
</form>
@endsection
