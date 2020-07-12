@extends('layouts.Frontend_layouts.frontend_design')

@section('content')


  <!-- 404 error section -->
  <section id="aa-error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-error-area">
            <h2>404</h2>
            <span>Page Not Found</span>
            <p>Non possiamo fornire ciò che è stato richiesto!</p>
            <a href="{{url('home')}}">Vai all'homepage</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / 404 error section -->

  <!-- Subscribe section -->
  <section id="aa-subscribe">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="aa-subscribe-area">
                      <h3>Iscriviti alla nostra newsletter</h3>
                      <form method="post" action="{{ url("/error") }}" id="add_subscribe" name="add_subscribe" class="aa-subscribe-form">
                          @csrf
                          <input type="email" name="emailsubscriber" id="emailsubscriber" placeholder="Inserisci la tua Email" required>
                          <input type="submit" value="Iscriviti">
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- / Subscribe section -->

@endsection
