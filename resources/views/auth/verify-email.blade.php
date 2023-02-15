@extends('layouts.app')
@section('main')

    <div class="flex justify-center flex-col items-center h-[80vh]">
            @if (session('status'))
                    <div class="card card-compact w-fit p-5 bg-success mt-4 shadow-xl flex items-center text-center">
                        <h3 class="font-bold text-xl text-black">Success!</h3>
                        <p class="text-lg text-black">Verification link has been sent!</p>
                    </div>
                @else
                    <div class="card card-compact p-5 w-fit mt-4 bg-warning shadow-xl flex items-center text-center">
                        <h3 class="font-bold text-xl text-black">Warning!</h3>
                        <p class="text-lg text-black">You must verify your email to go to the app!</p>
                    </div>
            @endif
        <form method="POST" action="{{ route('verification.send') }}" class="text-center">
            @csrf
            <button type="submit" class="mt-5 btn btn-outline btn-primary">Send Verification Email</button>
        </form>  
    </div>
@endsection