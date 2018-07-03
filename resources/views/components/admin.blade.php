@if(Auth::guard('admin')->check())
    You are Logged In as a <strong>Admin</strong>
@else
    You are Logged Out as a <strong>Admin</strong>
@endif