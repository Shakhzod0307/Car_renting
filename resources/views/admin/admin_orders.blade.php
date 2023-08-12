

@extends('admin.dashboard')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

@if (session('success'))
    <div style="text-align: center;" class="alert alert-success">
        {{session('success')}}
    </div>

@endif

<div class="alert alert-secondary"><h4 id="cars_page">Orders Page</h4></div>



<section class="ftco-section ftco-no-pt bg-light " style="margin-top: 20px;">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">

                    <div class="card shadow mb-4 my-3" style="background-color: white; width: 100%;">
                <div style="background-color: black;" class="card-header py-3">
                </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">N</th>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Pick up Date</th>
                                        <th>Drop off Date</th>
                                        <th>Pick up Time</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th style="width: 5%;">N</th>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Name</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Pick up Date</th>
                                        <th>Drop off Date</th>
                                        <th>Pick up Time</th>
                                        <th >Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ($orders as $order)


                                    <tr>
                                        <td style="padding-top: 125px;">{{$loop->iteration}}</td>
                                        <td style="padding-top: 125px;">{{$order->user_name}}</td>
                                        <td style="padding-top: 125px;">{{$order->user_email}}</td>
                                        <td style="padding-top: 125px;">{{$order->user_phone}}</td>

                                        <td style="padding-top: 125px;">{{$order->name}}</td>
                                        <td style="padding-top: 125px;">{{$order->brand}}</td>
                                        <td style="padding-top: 125px;">${{$order->price}}</td>
                                        <td style="color:green;padding-top: 125px;">{{$order->pick_up_date}}</td>
                                        <td style="color:red;padding-top: 125px;">{{$order->drop_off_date}}</td>
                                        <td style="padding-top: 125px;">{{$order->pick_up_time}}</td>
                                        <td style="color:red;"><img style="height: 250px;width:200px;" src="{{asset('car_images/'.$order->image)}}" alt="..."></td>


                                        <td style="padding-top: 125px;">
                                        <a  onclick="return confirm('Are you sure to Cancel ?')" href="{{route('order_cancel',$order->id)}}" class="btn btn-danger" >Cancel</a>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>


	  				</div>
				</div>
  		</div>
    </section>





<style>
#cars_page
{
    text-align: center;
    margin-bottom: 20px;
    margin-top: 20px;
}



#alert
{
    text-align: center;
}
td{
    text-align:center;
    padding-top: 50px;
}

th{
    width: 11%;
    text-align:center;

}





</style>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
@endsection
