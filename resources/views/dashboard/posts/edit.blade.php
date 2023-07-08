@extends('dashboard.layouts.main')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
 <h1 class="h2">edit  post, </h1>
      
</div>

<div class="col-lg-8">
<form method="post" action="{{url('/dashboard/posts/'.$post->slug)}}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf

  <div class="mb-3">
    <label for="title" class="form-label">Tittle</label>
    <input type="text" class="form-control  @error('title') is-invalid @enderror" autofocus required value="{{old ('title', $post->title)}}" id="title" name="title">
    @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror

  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control  @error('slug') is-invalid @enderror" autofocus required value="{{old ('slug', $post->slug)}}" id="slug" name="slug">
    @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror

  </div>

  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select" name="category_id">
        @foreach ($categories as $category)
        @if(old('category_id', $post->category_id) == $category->id)
        <option value="{{ $category->id}}" selected>{{$category->name}}</option>
        @else
        <option value="{{ $category->id}}">{{$category->name}}</option>
        @endif
        @endforeach
 
</select>
  </div>
  </div>
  <div class="mb-3">
  <label for="image" class="form-label">Post Image</label>
  <input type="hidden" name="oldImage" value="{{ $post->image}}">
  @if($post->image)
  <img src="{{asset('storage/'.$post->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block" >
  @else
  <img class="img-preview img-fluid mb-3 col-sm-5" >
  @endif
  
  <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
  @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror

  </div>

  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
    <textarea  id="your_summernote" type="hidden" name="body" class="form-control " rows="4" autofocus required value="{{old ('body', $post->body)}}"></textarea>
    @error('body')
      <p class="text-danger">
        {{ $message }}
      </p>
      </div>
      @enderror

   
  </div>



  
  
  <button type="submit" class="btn btn-primary">update Post</button>
</form>
</div>
<script>
 const title = document.querySelector('#title');
 const slug = document.querySelector('#slug');

 title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

        function previewImage() {
const image = document.querySelector('#image');
const imgPreview = document.querySelector('.img-preview');


imgPreview.style.display ='block';

const oFReader = new FileReader();
oFReader.readAsDataURL(image.files[0]);

oFReader.onload = function(oFREvent) {
  imgPreview.src = oFREvent.target.result;
}
}

</script>




@endsection