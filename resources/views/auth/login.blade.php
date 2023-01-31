@extends ('layout')
@section ('title','Login')

@section ('content')
<h1>Login</h1>
<form method="POST" action="{{route('login')}}">
    @csrf
    

    <label>Email</label>
    <input type="text" class="@error('email') error-border @enderror" name="email" value="{{old('email')}}"/>
    @error ('email')
    <div class="error">
        {{$message}}
    </div>
    @enderror

    <label>Password</label>
    <input type="text" class="@error('password') error-border @enderror" name="password" value="{{old('password')}}"/>
    @error ('password')
    <div class="error">
        {{$message}}
    </div>
    @enderror

    <button type="submit">Login</button>

    
</form>
@endsection