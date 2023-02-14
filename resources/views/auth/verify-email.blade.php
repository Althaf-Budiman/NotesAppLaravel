@extends('layouts.app')
@section('main')

    <div class="flex justify-center flex-col items-center">
        <div class="card card-compact w-fit bg-success mt-4 shadow-xl flex items-center text-center">
                @if (session('status') == 'verification-link-sent')
                    <div class="text-center p-5">
                        <h3 class="font-bold text-xl text-black">Success!</h3>
                        <p class="text-lg text-black">Verification link has been sent!</p>
                    </div>
                @endif
            </div>
            <form method="POST" action="{{ route('verification.send') }}" class="text-center">
                @csrf
                <button type="submit" class="mt-5 btn btn-outline btn-primary">Resend Verification Email</button>
            </form>  
    </div>
@endsection