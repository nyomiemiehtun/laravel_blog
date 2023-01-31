@extends ('layout')
@section ('title','Create new post')

@section ('content')
<h1>Create a New Blog Post</h1>
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <label>Title</label>
    <input type="text" class="@error('title') error-border @enderror" name="title" value="{{old('title')}}"/>
    @error ('title')
    <div class="error">
        {{$message}}
    </div>
    @enderror

    <label>Description</label>
    <textarea class="@error('title') error-border @enderror" name="description">{{old('description')}}</textarea>
    @error ('description')
    <div class="error">
        {{$message}}
    </div>
    @enderror

    <button type="submit">Submit</button>

</form>
@endsection