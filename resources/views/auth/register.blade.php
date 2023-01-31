@extends ('layout')
@section ('title','Register')

@section ('content')
<h1>Register</h1>
<form method="POST" action="{{route('register')}}">
    @csrf
    <label>Name</label>
    <input type="text" class="@error('name') error-border @enderror" name="name" value="{{old('name')}}"/>
    @error ('name')
    <div class="error">
        {{$message}}
    </div>
    @enderror

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

    <button type="submit">Register</button>

    If you already have an account<a href="{{route('login')}}">Login</a>
</form>
@endsection