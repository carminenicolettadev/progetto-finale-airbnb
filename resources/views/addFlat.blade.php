<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>


  </head>
  <body>

    <div class="container">
      <div class="row mb-4">
        <div class="col-12">
          <a href="{{ URL::previous() }}" class="mb-5">Back</a>
        </div>
      </div>




      <div class="row">
        <div class="col-12">
          <form  action="{{ route('storeFlat')}}"  method="post" >
            @csrf
            @method('POST')
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title"  placeholder="title">
                </div>

                <div class="form-group col-md-6">
                  <label>rooms</label>
                  <input type="number" class="form-control" name="num_room"  placeholder="room number">
                </div>

                <div class="form-group col-md-6">
                  <label>beds</label>
                  <input type="number" class="form-control" name="bed"  placeholder="beds">
                </div>

                <div class="form-group col-md-6">
                  <label>bathroom</label>
                  <input type="number" class="form-control" name="bathroom"  placeholder="bathroom">
                </div>


                <div class="form-group col-md-6">
                  <label>space area</label>
                  <input type="number" class="form-control" name="mq"  placeholder="space area">
                </div>


                <div class="form-group col-md-6">
                  <label>img</label>
                  <input type="text" class="form-control" name="img"  placeholder="img">
                </div>

                <div class="form-group col-md-6 d-none">
                  <label>user_id</label>
                  <input type="text" class="form-control" name="user_id"  value="{{Auth::user()->id}}">
                </div>

                {{-- Address section  --}}
                <div class="form-group col-md-12 mt-5">
                  <h4>Address</h4>
                </div>

                <div class="form-group col-md-6">
                  <label>state</label>
                  <input type="text" id="state" class="form-control" name="state"  placeholder="State">
                </div>

                <div class="form-group col-md-6">
                  <label>city</label>
                  <input type="text" id="city" class="form-control" name="city"  placeholder="city">
                </div>

                <div class="form-group col-md-6">
                  <label>CAP</label>
                  <input type="number" id="cap" class="form-control" name="cap"  placeholder="CAP">
                </div>

                <div class="form-group col-md-6">
                  <label>road</label>
                  <input type="text" id="road" class="form-control" name="road"  placeholder="road">
                </div>

                <div class="form-group col-md-6">
                  <label>civic number</label>
                  <input type="text" id="civ_num" class="form-control" name="civ_num"  placeholder="civic number">
                </div>

                <div class="form-group col-md-6">
                  <label>latitudine</label>
                  <input type="text" id="lat" class="form-control" name="lat"  value="">
                </div>
                <div class="form-group col-md-6">
                  <label>longitudine</label>
                  <input type="text" id="lon" class="form-control" name="lon"  value="">
                </div>


              </div>
              <button id="bottone" class="btn btn-dark mt-2">Add cordinate</button>
              <button  class="btn btn-primary mt-2">Add Flat</button>
          </form>
        </div>
      </div>
    </div>




  </body>
</html>
