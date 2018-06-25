@if(Auth::guard('web')->check())
    You are Logged In as a <strong>{{ Auth::user()->name }}</strong>
@endif