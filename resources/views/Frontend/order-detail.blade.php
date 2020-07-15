@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="../store-image/fetch-fotosito-image/{{ $order_details_foto->id }}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2 style="color: black">Dettagli Ordine</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{url('home')}}" style="color: black">Home</a></li>
                        <li><a href="{{url('order')}}" style="color: black">Ordini</a></li>
                        <li class="active">{{ $id }}</li>
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
                        <div class="cart-view-table">
                            <form method="post" action="{{ url("/cart") }}" id="add_cart" name="add_cart">
                            @csrf
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Codice Prodotto</th>
                                        <th>Nome Prodotto</th>
                                        <th>Taglia</th>
                                        <th>Colore</th>
                                        <th>Quantità</th>
                                        <th>Prezzo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($prodotti_ordinati as $prodotto)
                                    <tr>
                                        <td>GX56H{{ $prodotto->modello_id }}</td>
                                        <td>{{ $prodotto->nome }}</td>
                                        <td>{{ $prodotto->taglia_id }}</td>
                                        <td>{{ $prodotto->colore_id }}</td>
                                        <td>{{ $prodotto->quantita }}</td>
                                        <td>${{ $prodotto->prezzo }}</td>
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
                        <form method="post" action="{{ url("/cart") }}" id="add_subscribe" name="add_subscribe" class="aa-subscribe-form">
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

