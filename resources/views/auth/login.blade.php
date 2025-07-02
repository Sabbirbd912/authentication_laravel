 <h1>Login</h1>
    <form action="{{url('/login') }}" method="POST">
         @csrf
         <div>
            User<br>
            <input type="text" name="email" />
         </div>
          <div>
            Password<br>
            <input type="text" name="password" />
         </div>
          <div>
           
            <input type="submit" name="login" value="Login" />
         </div>
          @error('email')
            <p style="color:red">{{ $message }}</p>
          @enderror
    </form>
    <a href="{{url('/register') }}">Register</a>