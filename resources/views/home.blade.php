@extends('layouts.base')

@section('pageTitle')
DC COMICS - Home

    
@endsection

@section('mainContent')

<div class="jumbotron">
</div>

<div class="items-container">
  <div class="button-second">

  <h3>CURRENT SERIES</h3>
  </div>
  <div class="container-c">
    @foreach ($collection as $item)
      <div  class="cards">
        <img src="" alt="">
        <p></p>
            
      </div>
      @endforeach

      


  </div>
  <div class="button-secondo">
    <h4>LOAD MORE</h4>

  </div>



    




    
@endsection