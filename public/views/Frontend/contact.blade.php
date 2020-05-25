@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{ asset('img/Frontend.img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Contatti</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contatti</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
             <h2>Ti aspettiamo nei nostri store...</h2>
             <p>Per qualsiasi informazione scrivici e saremo lieti di aiutarti.</p>
           </div>
           <!-- contact map -->
           <div class="aa-contact-map">
              <iframe src="https://www.google.com/maps/d/embed?mid=1Swcl7Eorb6WqOsBjg_zN_50Z69qRDdcD" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" method="post" action="{{ url("/contact") }}" id="send_message" name="send_message">
                    @csrf
                       <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="nome" placeholder="Nome (Facoltativo)" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="oggetto" placeholder="Oggetto" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="societa" placeholder="Società (Facoltativo)" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Messaggio" required></textarea>
                    </div>
                    <button class="aa-secondary-btn">Invia</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>Xenomod</h4>
                     <p>Fondata nel 2002, la società Xenomod è leader nel settore d'abbigliamento online in Italia e connette clienti, brands e partners.</p>
                     <p><span class="fa fa-home"></span>L'Aquila, AQ 67100, IT</p>
                     <p><span class="fa fa-phone"></span>+ 0862.7575</p>
                     <p><span class="fa fa-envelope"></span>Email: xenomod@shop.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

  <!-- Subscribe section -->
  <section id="aa-subscribe">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="aa-subscribe-area">
                      <h3>Iscriviti alla nostra newsletter</h3>
                      <form method="post" action="{{ url("/contact") }}" id="add_subscribe" name="add_subscribe" class="aa-subscribe-form">
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
