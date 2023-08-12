@extends('admin.dashboard')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@if (session('success'))
    <div style="text-align: center;" class="alert alert-success">
        {{session('success')}}
    </div>

@endif
<div class="alert alert-secondary"><h4 id="cars_page">Blogs Page</h4></div>
<div class="row row-cols-1 row-cols-md-3">
@foreach ( $blogs as $p )
  <div class="col mb-4">
    <div class="card">
      <img id="blog_image" src="{{asset('blog_images/'.$p->image)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">Title: {{$p->title}}</h4><p>Created: {{$p->created_at}}</p>

        <p class="card-text">Superuser: {{$p->superuser}} </p>
        <p class="my-3">
            <a href="{{route('blog_view',$p->id)}}" class="card-text btn btn-success">View</a>
            <a href="{{route('blog_edit',$p->id)}}" class="card-text btn btn-primary">Edit</a>
            <a  onclick="return confirm('Are you sure to delete?')" href="{{route('blog_delete',$p->id)}}" class="card-text btn btn-danger">Delete</a>
        </p>
      </div>
    </div>
  </div>
@endforeach
</div>




<style>
#cars_page
{
    text-align: center;
    margin-bottom: 20px;
    margin-top: 20px;
}



#blog_image
{

    padding:10px 15px;
}

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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
@endsection
