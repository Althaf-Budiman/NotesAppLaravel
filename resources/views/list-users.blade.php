@extends('layouts.app')
@section('main')
    <div class="flex mt-5 justify-center">
        <h1 class="font-bold text-3xl">List Users</h1>
    </div>
    <div class="flex justify-center flex-wrap items-center mt-6 gap-4">
        @foreach ($users as $user)
            <div class="card w-fit bg-neutral shadow-xl">
                <div class="card-body p-5">
                    <h2 class="card-title">{{ $user->name }}</h2>
                    @if ($user->role == 'admin')
                        <p class="text-lg">Admin</p>
                    @else
                        <p class="text-lg">User</p>
                    @endif
                    <p class="text-sm font-light">{{ $user->email }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection