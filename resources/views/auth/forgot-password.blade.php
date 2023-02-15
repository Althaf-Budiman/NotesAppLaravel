@extends('layouts.app') @section('main')

<div class="flex justify-center items-center mt-5 h-[80vh]">
    <div
        class="card card-compact w-fit p-2 bg-neutral shadow-xl flex items-center text-center"
    >
        <div class="card-body">
            @if (session('status'))
                <div class="text-center p-5">
                    <h3 class="font-bold text-xl">{{ session('status') }}</h3>
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <label class="label">
                    <span class="label-text">Enter Email</span>
                </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Input Email Here"
                    class="input input-bordered input-primary w-96 max-w-xs"
                    value="{{ old('email') }}"
                />
                <br>
                @error('email')
                <span class="text-red-500">
                    {{ $message }}
                </span>
                @enderror
                <br>
                <button type="submit" class="btn btn-outline btn-success mt-3">
                    Send Reset Password
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
