@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{ asset('img/Frontend.img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Lista dei desideri</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('home')}}">Home</a></li>
          <li class="active">Lista dei desideri</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table aa-wishlist-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Modello</th>
                        <th>Prezzo</th>
                        <th>Stock Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($wish as $wishlist)
                      <tr>
                          <td><a rel="{{$wishlist->modello_id}}" rel1="delete-wishlist" href="javascript:" class="remove deleteRecord"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="{{url("product-details/$wishlist->genere&&$wishlist->idphoto")}}"><img src="{{url('store-image/fetch-image')}}/{{ $wishlist->idphoto }}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="{{url("product-details/$wishlist->genere&&$wishlist->idphoto")}}">{{$wishlist->modello_nome}}</a></td>
                        <td>${{$wishlist->prezzo}}</td>
                        <td>{{$wishlist->stock}}</td>
                        <td><a href="{{url("product-details/$wishlist->genere&&$wishlist->idphoto")}}" class="aa-add-to-cart-btn">Vedi Dettagli</a></td>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


  <!-- Subscribe section -->
  <section id="aa-subscribe">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="aa-subscribe-area">
                      <h3>Iscriviti alla nostra newsletter</h3>
                      <form method="post" action="{{ url("/wishlist") }}" id="add_subscribe" name="add_subscribe" class="aa-subscribe-form">
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
