<form method="POST" action="{{ url('/register') }}">
    @csrf
    <div>
     Full Name<br>
    <input type="text" name="name" placeholder="Full Name" required>
   </div>
    <div>
     Email<br>
    <input type="email" name="email" placeholder="Email" required>
    </div>
    <div>
     Password<br>
    <input type="password" name="password" placeholder="Password" required>
   </div>
   <div>
    Retype Password<br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
   </div>
   <div>
    <button type="submit">Register</button>   

     @if ($errors->any())
        <ul style="color:red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
</form>