<div class="navbar bg-slate-800 sticky top-0 z-20">
  <div class="navbar-start">
    <a href="{{ url('/notes') }}" class="btn btn-ghost normal-case text-xl">Notes App</a>
  </div>
  <div class="navbar-end">
    @guest
    <a href="{{ route('register') }}" class="btn btn-outline btn-warning mr-2">Register</a>
    <a href="{{ route('login') }}" class="btn btn-outline btn-primary mr-5">Login</a>
    @else
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('form-logout').submit()" class="btn btn-outline btn-error mr-5">Logout From {{ Auth::user()->name }}</a>
    <form action="{{route('logout')}}" method="post" id="form-logout">@csrf</form>
    @endguest
  </div>
</div>