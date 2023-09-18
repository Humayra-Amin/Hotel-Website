

@extends('customer.layouts.apps')

@section('apps')

 
 <section class="section bg-light">
    <div class="container">
      <h1 class="section-heading">Relaxation</h1>
      <p class="section-description">A vacation now days are a combination of leisure and activity. One can get relaxed and enjoy the calmness in our lavish infinity pool, a nerve soothing spa or one can enjoy the beach with kite flying, fire display, sea surf. Choose your own vacation at Hotel Pradise and enjoy your stay and discover Chittagong in your own way.</p>
      <div class="row image-container">
        <div class="col-md-6">
            <img src="{{asset('image/swimming pool.jpeg')}}" class="img-fluid imgfile" alt="">
          <h2 class="mt-3">Swimming Pool</h2>
          <p class="section-description">The infinity swimming pool is a breathtaking architectural feature commonly found in upscale hotels, designed to provide an awe-inspiring visual experience by seamlessly blending the pool's water with the surrounding  landscape or cityscape. Imagine yourself lounging beside this luxurious oasis, soaking in the panoramic views of the bustling city below.</p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('image/Spa.jpg')}}" class="img-fluid imgfile" alt="">
          <h2 class="mt-3">Spa</h2>
          <p class="section-description">Leaving behind the pressure of everyday life, you enter a world where time stands still, and relaxation pervades. Our Authentic Thai Spa offers the perfect  retreat:  be it to heal, pamper, rejuvenate or revitalize, rest assured that your desire will be met, completely.Drawing on ancient rituals with modern day touches,the unique Tararom Spa treatment menu merges old with new to create luxur-
          ious treatments that recharge your body`s essential energies. Leave your worries  somewhere  for  a moment 
          and let your spa journey begin!</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row image-container">
        <div class="col-md-6">
            <img src="{{asset('image/gym (2).jpg')}}" class="img-fluid imgfile" alt="">
          <h2 class="mt-3">Gym</h2>
          <p class="section-description">Be a regular gym lover or not you can enjoy a quick work out   session in the Life Style Gym at the pool side. Luxury of Private Steam & Sauna suites to stimulate after exercise relaxation.</p>
        </div>
        <div class="col-md-6">
            <img src="{{asset('image/Biliard zone.jpg')}}" class="img-fluid imgfile" alt="">
          <h2 class="mt-3">Billiard Zone</h2>
          <p  class="section-description">Groups of friends, both new and old, gather around the billiard tables, engaged in animated discussions and lighthearted banter as they take turns attempting tricky shots.Have fun with friends and family in our billiard zone, a perfect spot for entertainment.</p>
        </div>
      </div>
    </div>
  </section>

  @endsection