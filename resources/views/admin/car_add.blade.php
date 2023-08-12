@extends('admin.dashboard')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@if (session('success'))
    <div style="text-align: center;" class="alert alert-success">
        {{session('success')}}
    </div>

@endif
<div  id="form"  class="row row-cols-1 row-cols-md-2">
    <form action="{{route('car_store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-3 control-label">Name:</label>
            <input type="text" class="form-control col-md-9" id="name" name="name" required>
        </div>
        <div class="form-group row">
            <label for="brand" class="col-md-3 control-label">Brand:</label>
            <input type="text" class="form-control col-md-9" id="brand" name="brand" required>
        </div>
        <div class="form-group row">
            <label for="price_day" class="col-md-3 control-label">Price_day:</label>
            <input type="text" class="form-control col-md-9"  id="price_day" name="price_day" required>
        </div>
        <div class="form-group row">
            <label for="mileage" class="col-md-3 control-label">Mileage:</label>
            <input type="text" class="form-control col-md-9"  id="mileage" name="mileage" required>
        </div>
        <div class="form-group row">
            <label for="transmission" class="col-md-3 control-label">Transmission:</label>
            <input type="text" class="form-control col-md-9"  id="transmission" name="transmission" required>
        </div>
        <div class="form-group row">
            <label for="seats" class="col-md-3 control-label">Seats:</label>
            <input type="text" class="form-control col-md-9"  id="seats" name="seats" required>
        </div>
        <div class="form-group row">
            <label for="luggage" class="col-md-3 control-label">Luggage:</label>
            <input type="text" class="form-control col-md-9"  id="luggage" name="luggage" required>
        </div>
        <div class="form-group row">
            <label for="fuel" class="col-md-3 control-label">Fuel:</label>
            <input type="text" class="form-control col-md-9"  id="fuel" name="fuel" required>
        </div>
        <div class="form-group row">
            <label for="desc" class="col-md-3 control-label">Description:</label>
            <textarea  class="form-control col-md-9" rows="3"  id="desc" name="description" required></textarea>
        </div>
        <div class="form-group row">
            <label for="image" class="col-md-3 control-label">Image:</label>
            <input type="file" class="form-control col-md-9"  id="image" name="image" required>
        </div>
        <a href="{{route('admin')}}" class="btn btn-secondary">Back</a>
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
@endsection
