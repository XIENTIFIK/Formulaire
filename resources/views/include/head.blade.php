@extends('layouts')


@section('content')
 
 <!-- container section start -->
 <section id="container" class="">


<header class="header dark-bg">
  <div class="toggle-nav">
    <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
  </div>

  <!--logo start-->
  <a href="index.html" class="logo">ETU <span class="lite">CARD</span></a>
  <!--logo end-->

  <div class="nav search-row" id="top_menu">
    <!--  search form start -->
    <ul class="nav top-menu">
      <li>
        <form class="navbar-form">
          <input class="form-control" placeholder="Search" type="text">
        </form>
      </li>
    </ul>
    <!--  search form end -->
  </div> 
 
  <div class="buton">
  <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <!-- @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest -->
                </ul>
  </div>

    <!-- notificatoin dropdown end-->
  </div>
</header>
<!--header end-->

<!--sidebar start-->
<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <!-- <ul class="sidebar-menu">
      <li class="active">
        <a class="" href="{{route('accueil')}}">
                      <i class="icon_house_alt"></i>
                      <span>Accueil</span>
                  </a>
      </li>
      <li class="sub-menu">
        <a href="{{route('etudiant')}}" class="">
                      <i class="icon_document_alt"></i>
                      <span>Etudiants</span>
                     
                  </a>
      </li>
      <li class="sub-menu">
        <a href="{{route('carte')}}" class="">
                      <i class="icon_desktop"></i>
                      <span>Cartes</span>
                     
                  </a>
      </li>
      <li class="sub-menu">
        <a class="" href="{{route('email')}}">
            <i class="icon-envelope-l"></i>
                      <span>Email</span>
                 </a>
      </li>
     

    </ul> -->
    <!-- sidebar menu end-->
  </div>
</aside>
@endsection