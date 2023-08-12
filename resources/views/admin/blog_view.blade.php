
@extends('admin.dashboard')

@section('content')

@include('links')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@if (session('success'))
    <div style="text-align: center;" class="alert alert-success">
        {{session('success')}}
    </div>

@endif




<a href="{{route('admin_blog')}}" class="btn btn-secondary">Back</a>

<div class="row d-flex justify-content-center">


<div class="col-md-12 text-center d-flex ftco-animate">
    <div class="blog-entry">
    <a href="" class="block-20 img" style="background-image: url({{asset('blog_images/'.$blog->image)}})">
    </a>
    <div class="text px-md-5 pt-4">
        <div class="meta mb-3">
        <div><a href="#">{{$blog->created_at}}</a></div>
        <div><a href="#">{{$blog->superuser}}</a></div>
        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
      </div>
      <h3 class="heading mt-2"><a href="#">{{$blog->title}}</a></h3>
      <p>{{$blog->description}}</p>

    </div>
  </div>
</div>
</div>





<style>

.card:hover
{
    background-color:blanchedalmond;
    transition: 1s all ease;
}

img:hover
{
    transition: 1s all ease;
    transform: scale(1.10);
    border-radius: 20px;

}



  .short-text {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
</style>
@include('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
@endsection
