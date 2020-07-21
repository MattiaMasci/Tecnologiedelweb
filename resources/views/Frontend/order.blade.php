@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="../public/store-image/fetch-fotosito-image/{{ $order_foto->id }}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2 style="color: white">Ordini</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{url('home')}}" style="color: white">Home</a></li>
                        <li class="active" style="color: white">Ordini</li>
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
                                            <th>ID Ordine</th>
                                            <th>Prodotti Ordinati</th>
                                            <th>Metodo di Pagamento</th>
                                            <th>Totale Ordine</th>
                                            <th>Data</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ordini as $ordine)
                                            <tr>
                                                <td>{{ $ordine->id }}</td>
                                                <td>
                                                    @foreach($ordine->prodotti as $mod)
                                                        {!! $mod->nome !!}
                                                        <br>
                                                        @endforeach
                                                    </td>
                                                <td>{{ $ordine->pagamento }}</td>
                                                <td>${{ $ordine->totale }}</td>
                                                <td>{{ $ordine->dataordine }}</td>
                                                <td><a class="aa-add-to-cart-btn" href="{{url("order/$ordine->id")}}">Vedi Dettagli</a></td>
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
