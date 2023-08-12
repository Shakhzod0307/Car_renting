<!DOCTYPE html>
<html lang="en">

    @include('links')


<style>

#alert
{
    text-align: center;
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Select <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Fill Out the page</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="content-wrapper">
    <div class="container">
        <h2 id="alert" class="alert alert-secondary ">Select Your Time</h2>
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
	  					<div class="col-md-4 d-flex align-items-center">
	  					<form action="{{url('cart/'.$car->id)}}" method="POST"  class="request-form ftco-animate bg-primary">
                            @csrf
                            <h2>Make your trip</h2>
                                    <div class="form-group">
                                        <label for="" class="label">Pick-up location</label>
                                        <input type="text" name="pick_up_loc" class="form-control" placeholder="City, Airport, Station, etc">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="label">Drop-off location</label>
                                        <input type="text" name="drop_off_loc" class="form-control" placeholder="City, Airport, Station, etc">
                                    </div>
                                    <div class="d-flex">
                                        <div class="form-group mr-2">
                                <label for="" class="label">Pick-up date</label>
                                <input type="text" name="pick_up_date" class="form-control" id="book_pick_date" placeholder="Date">
                            </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Drop-off date</label>
                                    <input type="text" name="drop_off_date" class="form-control" id="book_off_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Pick-up time</label>
                                <input type="text" name="pick_up_time" class="form-control" id="time_pick" placeholder="Time">
                            </div>
                            <div class="form-group">
                            <input type="submit" onclick="return confirm('Are You sure to reserve this car?')" value="Rent A Car Now" class="btn btn-secondary">
                            </div>
			    		</form>
	  					</div>

	  					<div class="col-md-8 d-flex align-items-center">
                          <div class="card mb-3" style="max-width:800px;max-height:100%">
                            <div class="row no-gutters">
                                <div  class="col-md-4">
                                <img style="width: 350px;height:500px;padding:15px" src="{{asset('car_images/'.$car->image)}} " alt="...">
                                </div>
                                <div style="margin-left: 150px;" class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">Name: {{$car->name}}</h5>
                                    <p class="card-text">Brand: {{$car->brand}} </p>
                                    <p class="card-text">Price: $ {{$car->price_day}} a Day</p>
                                    <p class="card-text">Mileage:  {{$car->mileage}}</p>
                                    <p class="card-text">Transmission:  {{$car->transmission}}</p>
                                    <p class="card-text">Seats:  {{$car->seats}}</p>
                                    <p class="card-text">Luggage:  {{$car->luggage}}</p>
                                    <p class="card-text">Fuel: {{$car->fuel}} </p>
                                </div>
                                </div>
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
