@if(Auth::guard('dosen')->check())
    You are Logged In as a <strong>{{ Auth::user()->name }}</strong>
@endif