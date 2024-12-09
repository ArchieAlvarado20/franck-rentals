<div>
    <header>
      <div class="header__container" id="home" >
        <div class="header__image">
          <img style="border-radius:10px; position:absolute" src="{{url('assets/new.png')}}" alt="header" >
        </div>
        <div class="header__content">
          <h2>👍 100% Trusted car rental platform in Philippines</h2>
          <h1>Franck Automobile Rental Services</h1>
          <p class="section__description">
            Discover a seamless car rental experience with us. Choose from a
            range of premium vehicles to suit your style and needs, and hit the
            road with confidence. Quick, easy, and reliable - rent your ride
            today!
          </p>
        </div>
      </div>
    </header>

    <!-- <section class="header__form">
      <form action="/">
        <div class="input__group">
          <label for="location">Pick up & Return location</label>
          <input
            type="text"
            name="location"
            id="location"
            placeholder="General Trias Cavite"
          />
        </div>
        <div class="input__group">
          <label for="start">Pick up date</label>
          <input
            type="text"
            name="start"
            id="start"
            placeholder="Aug 16, 10:00 AM"
          />
        </div>
        <div class="input__group">
          <label for="stop">Return date</label>
          <input
            type="text"
            name="stop"
            id="stop"
            placeholder="Aug 18, 10:00 PM"
          />
        </div>
        <button class="btn">Search <i class="ri-search-line"></i></button>
      </form>
    </section> -->

    <section class="section__container about__container" id="about">
      <h2 class="section__header">How it work</h2>
      <p class="section__description">
        Renting a car with us is simple! Choose your vehicle, pick your dates,
        and complete your booking. We'll handle the rest, ensuring a smooth
        start to your journey.
      </p>
      <div class="about__grid">
        <div class="about__card">
          <span><i class="ri-map-pin-2-fill"></i></span>
          <h4>Choose Location</h4>
          <p>
            Select from a variety of pick-up locations that best suit your
            needs, whether it's close to home, work, or airport.
          </p>
        </div>
        <div class="about__card">
          <span><i class="ri-calendar-event-fill"></i></span>
          <h4>Pick-up Date</h4>
          <p>
            Choose the exact date and time for your car pick-up, ensuring that
            your vehicle is ready when you need it.
          </p>
        </div>
        <div class="about__card">
          <span><i class="ri-roadster-fill"></i></span>
          <h4>Book your Car</h4>
          <p>
            Complete your booking with just a few clicks, and we'll prepare your
            vehicle to ensure a hassle-free pick-up.
          </p>
        </div>
      </div>
    </section>

    <section class="deals" id="deals">
      <div class="section__container deals__container">
        <h2 class="section__header">Most popular car rental deals</h2>
        <p class="section__description">
          Explore our top car rental deals, handpicked to give you the best
          value and experience. Book now and drive your favorite ride at an
          incredible rate!
        </p>
        <div class="deals__tabs">
          <button class="btn active" data-id="Tesla" style="width: 200px;">Mitusbishi Mirage G4</button>
          <button class="btn" data-id="Mitsubishi" style="width: 200px;">Changan Alsvin</button>
          <!-- <button class="btn" data-id="Mazda">Mazda</button>
          <button class="btn" data-id="Toyota">Toyota</button>
          <button class="btn" data-id="Honda">Honda</button> -->
        </div>
        <div id="Tesla" class="tab__content active">

          <div class="deals__card">
            <img src="{{url('assets/mirage.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span>(450)</span>
            </div>
            <h4>Mirage G4</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Automatic
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> Sedan
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Gasoline
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>₱1499<span>/Start rate</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img style="border-radius:10px; max-height: 400px;" src="{{url('assets/inside.jpg')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span>(450)</span>
            </div>
            <h4>Inside</h4>
            <!-- <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Automatic
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 400km
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Gasoline
              </div>
            </div> -->
            <hr />
            <!-- <div class="deals__card__footer">
              <h3>₱999<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div> -->
          </div>
          <div class="deals__card">
            <img style="padding-top:100px; padding-bottom:85px" src="{{url('assets/back.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span>(450)</span>
            </div>
            <h4>Back</h4>
            <!-- <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Automatic
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 400km
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Gasoline
              </div>
            </div> -->
            <hr />
            <!-- <div class="deals__card__footer">
              <h3>₱999<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div> -->
          </div>
          
        </div>
        <div id="Mitsubishi" class="tab__content">
          <div class="deals__card">
            <img src="{{url('assets/changan.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span>(350)</span>
            </div>
            <h4>Changan Alsvin</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 5 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span>Sedan
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Gasoline
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>₱1499<span>/Start rate</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img style="max-height:400px" src="{{url('assets/inside-alsvin.jpg')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(350)</span>
            </div>
            <h4>Inside</h4>
            <!-- <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>₱999<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div> -->
          </div>
          <div class="deals__card">
            <img style="padding-top:100px; padding-bottom:85px" src="{{url('assets/back-alsvin.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(350)</span>
            </div>
            <h4>Back</h4>
            <!-- <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>₱999<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div> -->
          </div>
          
        </div>
        <div id="Mazda" class="tab__content">
          <div class="deals__card">
            <img src="{{url('assets/deals-7.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(200)</span>
            </div>
            <h4>Mazda CX5</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$130<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="{{url('assets/deals-8.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(100)</span>
            </div>
            <h4>Mazda CX-30</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$200<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="{{url('assets/deals-9.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(180)</span>
            </div>
            <h4>Mazda CX-9</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$180<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
        </div>
        <div id="Toyota" class="tab__content">
          <div class="deals__card">
            <img src="{{url('assets/deals-10.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(250)</span>
            </div>
            <h4>Corolla</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$180<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="{{url('assets/deals-11.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(550)</span>
            </div>
            <h4>Innova</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$150<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="{{url('assets/deals-12.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(180)</span>
            </div>
            <h4>Fortuner</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$190<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
        </div>
        <div id="Honda" class="tab__content">
          <div class="deals__card">
            <img src="{{url('assets/deals-13.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(200)</span>
            </div>
            <h4>Amaze</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$100<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="{{url('assets/deals-14.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(350)</span>
            </div>
            <h4>Elevate</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$120<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
          <div class="deals__card">
            <img src="{{url('assets/deals-15.png')}}" alt="deals" />
            <div class="deals__rating">
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-fill"></i></span>
              <span><i class="ri-star-line"></i></span>
              <span>(300)</span>
            </div>
            <h4>City</h4>
            <div class="deals__card__grid">
              <div>
                <span><i class="ri-group-line"></i></span> 4 People
              </div>
              <div>
                <span><i class="ri-steering-2-line"></i></span> Manual
              </div>
              <div>
                <span><i class="ri-speed-up-line"></i></span> 18km/l
              </div>
              <div>
                <span><i class="ri-car-line"></i></span> Diesel
              </div>
            </div>
            <hr />
            <div class="deals__card__footer">
              <h3>$150<span>/Per Day</span></h3>
              <a href="#">
                Rent Now
                <span><i class="ri-arrow-right-line"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="choose__container" id="choose">
      <div class="choose__image">
        <img style="border-radius:10px; margin:10px;margin-bottom:20px" src="{{url('assets/changan-alsvin.jpg')}}" alt="choose" />
      </div>
      <div class="choose__content">
        <h2 class="section__header">Why choose us</h2>
        <p class="section__description">
          Discover the difference with our car rental service. We offer reliable
          vehicles, exceptional customer service, and competitive pricing to
          ensure a seamless rental experience.
        </p>
        <div class="choose__grid">
          <div class="choose__card">
            <span><i class="ri-customer-service-line"></i></span>
            <div>
              <h4>Customer Support</h4>
              <p>Our dedicated support team is available to assist you 24/7.</p>
            </div>
          </div>
          <div class="choose__card">
            <span><i class="ri-map-pin-line"></i></span>
            <div>
              <h4>Many Locations</h4>
              <p>
                Convenient pick-up and drop-off locations to suit your travel
                needs.
              </p>
            </div>
          </div>
          <div class="choose__card">
            <span><i class="ri-wallet-line"></i></span>
            <div>
              <h4>Best Price</h4>
              <p>Enjoy competitive rates and great value for every rental.</p>
            </div>
          </div>
          <!-- <div class="choose__card">
            <span><i class="ri-user-star-line"></i></span>
            <div>
              <h4>Experience Driver</h4>
              <p>Reliable, professional drivers available upon request.</p>
            </div>
          </div> -->
          <div class="choose__card">
            <span><i class="ri-verified-badge-line"></i></span>
            <div>
              <h4>Verified Brands</h4>
              <p>Choose from trusted and well-maintained car brands.</p>
            </div>
          </div>
          <!-- <div class="choose__card">
            <span><i class="ri-calendar-close-line"></i></span>
            <div>
              <h4>Free Cancellations</h4>
              <p>Flexible bookings with free cancellation options.</p>
            </div>
          </div> -->
        </div>
      </div>
    </section>

    <section class="subscribe__container">
      <div class="subscribe__image">
        <img style="border-radius:10px; margin:10px;margin-bottom:20px" src="{{url('assets/mirage-g4.png')}}" alt="subscribe" />
      </div>
      <div class="subscribe__content">
        <h2 class="section__header">
          Setup a call back for reservation
        </h2>
        <!-- <p class="section__description" style="color: black;">
         Facebook Page:  
        </p> -->
        <button></button>
  
          <input type="text" placeholder="Franck Automobile Rental Services" />
          <button class="btn"><a href="https://www.facebook.com/profile.php?id=61570344325893" target="_blank">Click here!</a></button>
        
      </div>
    </section>

    <!-- <section class="section__container client__container" id="client">
      <h2 class="section__header">What people say about us?</h2>
      <p class="section__description">
        Discover why our customers love renting with us! Read real reviews and
        testimonials to see how we deliver exceptional service.
      </p>
    
      <div class="swiper">
     
        <div class="swiper-wrapper">
    
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="{{url('assets/client-1.jpg')}}" alt="client" />
                <div>
                  <h4>Sarah Johnson</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                I had an amazing experience renting a car from this service. The
                booking process was quick and easy, and the car was in perfect
                condition. Highly recommend!
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="{{url('assets/client-2.jpg')}}" alt="client" />
                <div>
                  <h4>Michael Adams</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                Customer support was excellent! They helped me with all my
                questions, and I felt confident about my booking. I will
                definitely rent from them again.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="{{url('assets/client-3.jpg')}}" alt="client" />
                <div>
                  <h4>Emily Martinez</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                Affordable prices and great selection of vehicles! I found
                exactly what I needed, and the pick-up and drop-off process was
                seamless. Very happy with my rental.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="{{url('assets/client-4.jpg')}}" alt="client" />
                <div>
                  <h4>Jason Lee</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                The flexibility of free cancellations made my trip stress-free.
                I ended up changing my plans, and it was no hassle to adjust my
                booking. Great service overall!
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <div class="client__details">
                <img src="{{url('assets/client-5.jpg')}}" alt="client" />
                <div>
                  <h4>David Thompson</h4>
                  <div class="client__rating">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                </div>
              </div>
              <p>
                The car I rented was top-notch, and the driver was very
                experienced. It made my road trip so much more enjoyable. Will
                use them again next time!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
</div>
   

