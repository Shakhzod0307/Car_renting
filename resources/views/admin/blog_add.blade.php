@extends('admin.dashboard')

@section('content')

@include('links')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@if (session('success'))
    <div style="text-align: center;" class="alert alert-success">
        {{session('success')}}
    </div>

@endif


<div  id="form"  class="row row-cols-1 row-cols-md-2">
    <form action="{{route('blog_store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-3 control-label">Title:</label>
            <input type="text" class="form-control col-md-9" id="name" name="title" required>
        </div>

        <div class="form-group row">
            <label for="desc" class="col-md-3 control-label">Description:</label>
            <textarea  class="form-control col-md-9" rows="3"  id="desc" name="description" required></textarea>
        </div>
        <div class="form-group row">
            <label for="image" class="col-md-3 control-label">Image:</label>
            <input type="file" class="form-control col-md-9"  id="image" name="image" required>
        </div>
        <a href="{{route('admin_blog')}}" class="btn btn-secondary">Back</a>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>

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
