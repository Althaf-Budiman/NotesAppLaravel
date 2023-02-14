@extends('layouts.app')
@section('main')

    <div class="flex justify-center items-center mt-5 flex-col">
        @if ($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            <div class="card card-compact w-fit p-3 bg-neutral shadow-xl flex items-center text-center">
                <div class="card-body">
                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <label class="label">
                            <span class="label-text">Enter Email</span>
                        </label>
                        <input type="email" name="email" id="email" placeholder="Input Email Here" class="input input-bordered input-primary w-96 max-w-xs" value="{{old('email')}}" />
                        @error('email')
                            <span class="text-red-500">
                                {{ $message }}
                            </span>
                        @enderror
                        <button type="submit" class="btn btn-outline btn-success mt-3">Send Reset Password</button>
                    </form>
                </div>
            </div>
        </form>
    </div>
@endsection