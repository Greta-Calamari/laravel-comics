@extends('layouts.base')

@section('pageTitle')
DC COMICS - Home

    
@endsection

@section('mainContent')



<div class="items-container">
  <div class="button-second">

  <h3>CURRENT SERIES</h3>
  </div>
  <div class="container-c">
    @foreach ($comics as $item)
      <div  class="cards">
        <img src="{{$item['thumb']}}" alt="">
        <p>{{$item['title']}}</p>
            
      </div>
      @endforeach

      


  </div>
  <div class="button-secondo">
    <h4>LOAD MORE</h4>

  </div>



    




    
@endsection