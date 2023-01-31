@extends ('layout')
@section ('title','Update Post '. $post->title)

@section ('content')
<h1>Update Post{{$post->title}}</h1>
<form method="POST" action="{{ route('posts.update',[$post])}}">
    @csrf
    @method('PUT')
    <label>Title</label>
    <input type="text" class="@error('title') error-border @enderror" name="title" 
    value="{{old('title', $post->title)}}"/>
    @error ('title')
    <div class="error">
        {{$message}}
    </div>
    @enderror

    <label>Description</label>
    <textarea class="@error('title') error-border @enderror" name="description">{{old('description',
        $post->description)}}</textarea>
    @error ('description')
    <div class="error">
        {{$message}}
    </div>
    @enderror

    <button type="submit">Update</button>

</form>
@endsection