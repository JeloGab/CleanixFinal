
<div class="container-fluid py-5">
    <div class="col-12 mx-auto">
        <h2 class="text-left"><b>OUR SERVICES</b></h2>
        <p><i>We've got the help you need for your cleaning problems!</i></p>
        <div class="text-center my-4">
            {{$slot}}
        </div>

        <div class="row row-cols-4 gap-5 justify-content-center">
          
        <div class="card col p-0">
                <img src="{{asset('img/generalcleaning.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><b>GENERAL CLEANING</b></h4>
                    <p class="card-text">Basic cleaning service that includes vacuum cleaning, mopping and dusting services, 
                        and possibly additional tasks such as dishwashing and de-cluttering depending on customer's request.</p>
                    <div class="btn-book">
                    <a href="/book" class="btn-services text-decoration-none">BOOK</a>
                    </div>
                </div>
            </div>

            <div class="card col p-0">
                <img src="{{asset('img/deepcleaning.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><b>DEEP CLEANING</b></h4>
                    <p class="card-text">Deep cleaning process that clears all areas of your home of dust, dirt, bacteria, 
                        and grime. This includes rarely visited surfaces where dirt has had time to accumulate.</p>
                    <div class="btn-book">
                    <a href="/book" class="btn-services text-decoration-none">BOOK</a>
                    </div>
                </div>
            </div>

            <div class="card col p-0">
                <img src="{{asset('img/postconstruction.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><b>POST CONSTRUCTION</b></h4>
                    <p class="card-text">Deep cleaning process that clears all areas of your home of dust, dirt, and bacteria
                        after construction that includes spots seldomly cleaned on all corners of your home.</p>
                    <div class="btn-book">
                    <a href="/book" class="btn-services text-decoration-none">BOOK</a>
                    </div>
                </div>
            </div>

            <div class="card col p-0">
                <img src="{{asset('img/renovationcleaning.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><b>RENOVATION CLEANING</b></h4>
                    <p class="card-text">Cleaning all surfaces to get rid of dust, filth, and scuffs. cleaning appliances, 
                        fixtures, and woodwork with a vacuum and a duster. Trim, baseboards, frames, and door jambs should 
                        be cleaned. cleaning brickwork or tile in masonry.</p>
                    <div class="btn-book">
                    <a href="/book" class="btn-services text-decoration-none">BOOK</a>
                    </div>
                </div>
            </div>
            
            <div class="card col p-0">
                <img src="{{asset('img/homeofficecleaning.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><b>HOME/OFFICE CLEANING</b></h4>
                    <p class="card-text">All basic cleaning in and around the facility or office building. This can entail dusting, 
                        mopping, sweeping, vacuuming, and cleaning smudges off windows and doors; ensuring restrooms are cleaned and 
                        sanitized.</p>
                    <div class="btn-book">
                    <a href="/book" class="btn-services text-decoration-none">BOOK</a>
                    </div>
                </div>
            </div>
            
            <div class="card col p-0">
                <img src="{{asset('img/homeappliancescleaning.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title"><b>HOME APPLIANCES CLEANING</b></h4>
                    <p class="card-text">Need to clean your airconditioners, refrigerators, dishwasher, or washing machine? We got you!
                        We have the perfect equipments and chemicals and sound knowledge to clean your home appliances for you!
                    </p>
                    <div class="btn-book">
                    <a href="/book" class="btn-services text-decoration-none">BOOK</a>
                    </div>
                </div>
            </div>
        </div>
            
            
           
       
        <div class="row row-cols-4 gap-5 justify-content-center mt-5">
            @foreach($services as $services)
            <div class="card col p-0">
                <img src="{{ asset('/img/'.$services->img)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{$services['service_name']}}</h4>
                    <p class="card-text">{{$services['description']}}</p>
                    @if($admin)
                    <div class="d-flex justify-content-center gap-2">
                    <a href="/ourservices/edit/{{$services['id']}}" class="btn-dark-green text-decoration-none ">Edit</a>
                    <form action="{{route('delete', ['id' => $services['id']])}}" method="post">
                    @csrf
                    @method("DELETE")
                    
                    <button type="submit" value="Delete" name="submit" class="btn btn-danger text-decoration-none " onclick="return confirm('Are you sure to delete?')">Delete </button>
                    </form>
                    </div>
                    @else
                    <div class="btn-book">
                    <a href="book" class="btn-services text-decoration-none">BOOK</a>
                    @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container-fluid py-5">
        <div class="col-12 mx-auto">
        <a href="ourservices" class="btn-baby-blue text-decoration-none">click here for more services →</a>
        </div>
        </div>
    </div>
</div>