<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>

        <link href="{{ asset('sdk/SearchBox.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
        <link rel="stylesheet" href="{{asset('css/12bool.css')}}">
        <link rel="stylesheet" href="{{asset('css/homepage.css')}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
      @include('layouts.menu2')

      @yield('menu')


      <div class="mainhomepage">

        <div class="container search "id="background-1">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-offset-1 col-lg-11 col-md-offset-1 col-md-11 col-sm-offset-1 col-sm-11 ">
                  <div class="searchbox" style="position:relative">
                    <h1 >Cerca alloggi unici al mondo</h1>
                    <div class="cerca">
                      <div class="searchform" id="map" style="height: 200px;width:70%"></div>
                      <button type="submit" class="bottone-invia"name="button">invia</button>
                    </div>
                    <input type="text" class="place" value="">


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--fine container search-->

        <div class="container showflats">
          <div class="centrone">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="linkallflats">
                  <a href="#">Alloggi in evidenza</a>
                </div>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 someflats">
                <div class="row">
                @foreach ($flatsevidency as $flat)
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="flat">
                      <a href="{{route('showFlat',$flat -> id)}}">
                        <img src="../img/{{$flat ->detail -> img}}" alt="">
                      <div class="flex-rate">
                        <div class="">
                          <h3>{{$flat -> address -> city}}</h3>
                          <p>Appartamento - {{$flat -> detail -> bed}}
                            @if ($flat -> detail -> bed === 1)
                              letto
                            @else
                              letti
                            @endif
                          </p>
                        </div>
                        <p>{{$flat -> rate}}<span><i class="fas fa-star rate"></i></span></p>
                      </div>
                      </a>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container showflats">
          <div class="centrone">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="flatsratetitle">
                  <h3 href="#">Alloggi Con Le Migliori Valutazioni</h3>
                </div>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 someflats">
                <div class="row">
                @foreach ($flatsrates as $flat)
                  <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="flat">
                      <a href="{{route('showFlat',$flat -> id)}}">
                        <img src="../img/{{$flat ->detail -> img}}" alt="">
                      </a>
                      <div class="flex-rate">
                        <p>{{$flat -> address -> city}}</p>
                        <p >{{$flat -> rate}}<span><i class="fas fa-star rate"></i></span></p>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>




    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.38.0/services/services-web.min.js"></script>
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.38.0/maps/maps-web.min.js"></script> -->

    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/plugins/SearchBox/1.0.6/SearchBox-web.js"></script>
    <script type="text/javascript" src="{{ asset('sdk/tomtom.min.js')}}"></script>

    <!-- <script type="text/javascript" src="{{ asset('sdk/marker.js')}}"></script>

    <script type="text/javascript" src="{{ asset('sdk/marker-manager.js')}}"></script> -->

    <style media="screen">
      .mapboxgl-canvas{
        display: none;
      }
      .mapboxgl-ctrl-top-right{
        display: none;
      }
      .mapboxgl-ctrl-bottom-right{
        display: none;
      }
      .tt-search-box-result-list-container{
        z-index: 10;
        width:100%;
        max-height:188px !important;

      }
      .tt-search-box-search-icon{
        padding-right:20px;
      }
      .tt-search-box-result-list:hover{
       background:rgb(60,179,113);
       color:red;

      }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script type="text/javascript">
      console.log("ok funziono");

      $(document).ready(function(){

        $(".tt-search-box-result-list-container").click(function(e){
          var valInput = $('.tt-search-box-input').val();
             $('input.place').val(valInput) ;
           });
        });




           var map = tt.map({
               key: 'i2D5CGYtl0tUEgcZfIEET1lZo9mBMtMy',
               container: 'map',
               style: 'tomtom://vector/1/basic-main',
               options : {
                 showZoom: false,
                 showPitch: false
               }
           });

           var ttSearchBox = new tt.plugins.SearchBox(tt.services.fuzzySearch, {
               searchOptions: {
                   key: 'i2D5CGYtl0tUEgcZfIEET1lZo9mBMtMy'
               }
           });


           map.addControl(ttSearchBox, 'top-left');


      </script>
    </body>
</html>
