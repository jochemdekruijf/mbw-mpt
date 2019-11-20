@extends('templates.layout')

@section('content')      
<style>
  .uper {
    margin-top: 40px;
  }

  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

input[type=number] {
    -moz-appearance:textfield;
}
</style>
<div class="card uper">
  <div class="card-header">
    <h1>Boeken</h1>
  </div>
      <!-- success message -->

    @if ($alert = Session::get('alert'))
          <div class="alert alert-success">
              <p>{{ $alert }}</p>
          </div>
      @endif

 <!-- validation errors -->

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          <br /> 
      @endif   

  <div class="card-body">
      <form method="post" action="{{ route('bookings.store') }}">
      @csrf   
          <div class="form-group">           
               <label for="voornaam">Voornaam</label>
              <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}"/>
          </div>
          <div class="form-group">
              <label for="achternaam">Achternaam</label>
              <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"/>
          </div> 
          <div class="form-group">
              <label for="mail">E-mail adres</label>
              <input type="text" class="form-control" name="email" value="{{ old('email') }}"/>
          </div> 
          <div class="form-group">
              <label for="nummer">telefoonnummer</label>
              <input type="text" class="form-control" name="telephone_number" value="{{ old('telephone_number') }}"/>
          </div> 
          <div class="form-group">             
               <label for="check-in">Check-in tijd</label>
              <input type="time" class="form-control" name="check_in" value="{{ old('check_in') }}"/>
          </div>
          <div class="form-group">
              <label for="check-uit">Check-uit tijd </label>
              <input type="time" class="form-control" name="check_out" value="{{ old('check_out') }}"/>
          </div>
          <div class="form-group">
              <label for="aankomst">Aankomst</label>
              <input type="date" class="form-control" name="arrival" value="{{ old('arrival') }}"/>
          </div>
          <div class="form-group">
              <label for="vertrek">Vertrek</label>
              <input type="date" class="form-control" name="departure" value="{{ old('departure') }}"/>
          </div>
          <div class="form-group">
              <label for="personen">Aantal personen</label>
              <input type="text" class="form-control" name="people" value="{{ old('people') }}"/>
          </div>
          <div class="form-group">
              <label for="huisdieren">Huisdieren</label>
              <input type="text" class="form-control" name="pets" value="{{ old('pets') }}"/>
          </div> 
          <div class="form-group">
              <label for="prijs">Prijs</label>
              <input type="number" min="0" step="any" class="form-control" name="price" value="{{ old('price') }}"/>
          </div>
          <div class="form-group">
              <label for="chalet">Chalet</label>
              <input type="text" class="form-control" name="chalet" value="{{ old('chalet') }}"/>
          </div>                                                      
          <button  onclick="checkSubmit(this)" type="button" class="btn btn-primary" >boeken</button>
      </form>
  </div>
</div>


@endsection