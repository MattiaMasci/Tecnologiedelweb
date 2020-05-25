<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="#">Uomo<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($uomo as $man)
                                <li><a href="{{url("product/Uomo&&$man->reference")}}">{{$man->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Donna<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($donna as $woman)
                                    <li><a href="{{url("product/Donna&&$woman->reference")}}">{{$woman->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Bambini<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Bambino<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($bambino as $boy)
                                            <li><a href="{{url("product/Bambino&&$boy->reference")}}">{{$boy->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">Bambina<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($bambina as $girl)
                                            <li><a href="{{url("product/Bambina&&$girl->reference")}}">{{$girl->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        </li>
                        <li><a href="{{url('contact')}}">Contatti</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->
