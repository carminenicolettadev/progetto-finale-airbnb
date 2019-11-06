<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <title></title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">

  </head>
  <body>

    @include('layouts.menu2')

    @yield('menu')


    <div class="profile-container">

      <div class="content">

        <div class="flats-list">
          @foreach ($flats as $flat)
            <a href="{{route ('showFlat', $flat ->id)}}" class="box">
              <img src="https://source.unsplash.com/450x300/?building">
              <div class="box-sections">
                  {{-- $arrDetail = array con dentro un oggetto --}}
                  @foreach ($arrDetail as $key => $details)
                    @if ($details != "[]" && $details[0] ->flat_id == $flat -> id )
                      {{-- <h1>flat_id : {{$details[0] ->flat_id}}</h1> --}}
                      <h1 class="flat-title">{{$details[0] ->title}}</h1>
                      <div class="details">
                        <p>rooms : {{$details[0] ->bed}}</p>
                        <p>bed : {{$details[0] ->bed}}</p>
                      </div>

                    @endif
                  @endforeach
                  {{-- $arrDetail = array con dentro un oggetto --}}

                  <div class="address-section">
                    @foreach ($arrAddress as $key => $address)
                      @if ($address != "[]" && $address[0] ->flat_id == $flat -> id )
                        <p>{{$address[0] ->city}}</p>
                      @endif
                    @endforeach
                  </div>
              </div>
              <div class="rate">
                <p>{{$flat -> rate }}</p>
              </div>
            </a>
          @endforeach
        </div>
        <div class="paginate">
          {{ $flats -> links()}}
        </div>
      </div>
    </div>




  </body>
</html>
