<!DOCTYPE html>
<html lang="en">

    @include('links')


<style>

#alert
{
    text-align: center;
}
td{
    text-align:center;
    padding-top: 50%;
}

th{
    width: 11%;
    text-align:center;

}
</style>


  <body>

    @include('head')
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{asset('images/bg_3.jpg')}})" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Order <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Orders page</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="content-wrapper">
    <div class="container">
        <h2 id="alert" class="alert alert-secondary ">Your Orders </h2>
        @if (session('success'))
            <h6 id="alert" class="alert alert-success ">{{session('success')}}</h6>
        @endif


    </div>
</div>
<section class="ftco-section ftco-no-pt bg-light " style="margin-top: 280px;">
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
                                        <td>{{$loop->iteration}}</td>
                                        <td >{{$order->name}}</td>
                                        <td >{{$order->brand}}</td>
                                        <td>${{$order->price}}</td>
                                        <td style="color:green;">{{$order->pick_up_date}}</td>
                                        <td style="color:red;">{{$order->drop_off_date}}</td>
                                        <td >{{$order->pick_up_time}}</td>
                                        <td style="color:red;"><img style="height: 250px;" src="{{asset('car_images/'.$order->image)}}" alt="..."></td>


                                        <td>
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







    @include('footer')
    @includeIf('scripts')
  </body>
</html>
