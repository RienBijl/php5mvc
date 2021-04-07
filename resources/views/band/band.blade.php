@extends('layouts.app')
@section('title', 'Band')

@section('content')

    <div style="background-image: url({{asset('/img/default.jpg')}}); padding-top: 10em; padding-bottom: 1em; margin-top: -3em; background-size: cover;">
        <div class="container">
            <h1 class="text-white">Pink Floyd</h1>
        </div>
    </div>

    <br>

   <div class="container">
       <div class="row">
           <div class="col-md-4">
               <strong>Description</strong>
               <hr>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque odit, temporibus? Accusantium atque dignissimos esse eveniet, expedita illum ipsa iure quae ut? Architecto expedita id ipsa minus sequi. Asperiores, debitis?
               <br><br>
               <strong>Biography</strong>
               <hr>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consequatur cumque, dolor dolore eaque eligendi eveniet ex expedita harum iure laborum magnam molestiae odit, officia praesentium quaerat repellat repudiandae sint?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem blanditiis deserunt, distinctio dolor fugiat iste iure maxime repellat suscipit vitae? Atque ipsum iste maiores nemo porro qui rem tenetur voluptatum?
           </div>
           <div class="col-md-8">
               <strong>Embeds</strong>
               <hr>
               <div class="row">
                   <div class="col-md-4">
                       <iframe style="width: 100%;" src="https://www.youtube.com/embed/E_5DRKZI1Ow" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
                   <div class="col-md-4">
                       <iframe style="width: 100%;" src="https://www.youtube.com/embed/CS_FCbQ-okM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
                   <div class="col-md-4">
                       <iframe style="width: 100%;" src="https://www.youtube.com/embed/cWGE9Gi0bB0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-4">
                       <iframe style="width: 100%;" src="https://www.youtube.com/embed/7jMlFXouPk8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection
