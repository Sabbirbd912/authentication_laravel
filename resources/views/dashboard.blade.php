<h1>Dashboard</h1>
{{$user->name}}<br>
{{$user->email}}
<form method="POST" action="{{ url('/logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>