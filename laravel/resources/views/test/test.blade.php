@extends('master')

@section('content')

@foreach($answers as $answer)

<div class='questions' id='div{{$answer["id"]}}'>
	<div>
<h2>{{	$answer["question"]	}}
		</h2>

<form method="POST" action="http://oplossingen.web-backend.local:90/prototype/laravel/public" accept-charset="UTF-8" id="form{{$answer['id']}}">


	<div class="check">
		{{$answer['answer_1']}}<input  class='radio'type="radio" value="1" name="status"/>	
	</div>
	<div class="check">
		{{$answer['answer_2']}}<input class='radio' type="radio" value="2" name="status"/>	
	</div>
	<div class="check text-center">	
		{{$answer['answer_3']}}<input  class='radio'type="radio" value="3" name="status"/>
	</div>	
	<div class="check text-center">	
		{{$answer['answer_4']}}<input  class='radio'type="radio" value="4" name="status"/>
	</div>		
	<div class="check text-center">	
		{{$answer['answer_5']}}<input  class='radio'type="radio" value="5" name="status"/>
	</div>		
	<div class="check text-center">	
		{{$answer['answer_6']}}<input  class='radio'type="radio" value="6" name="status"/>
	</div>	
	<input type='hidden' name='id' value="{{$answer['id']}}">
     </div>
            <footer>
                <div class='footer'>
                    <button  class="volgende" >Volgende</button>
                </div>
                    
            </footer>
        </div>

	
{!! Form::close() !!}

@endforeach
<div class='questions' id='complete'>
	 <ul id='yo'>
	 <li>	 Hier komt een lijst met de vraag nummer, antwoord, of hij correct was en eventueel een percentages. of eendert welke waarden gespecifieerd zijn.
		 	 De get is al gedefinieerd met ajax en de correcte json is te zien in de console. En kan ook worden weergeven in deze link <a href="{{asset('/session')}}">Json</a>.
	 		En moet gewoon uitgeloopt worden met een append maar ik heb geen tijd meer om dat voor deze kleine demo te doen.
	 		 Het is een ruwe kleine aplicatie met nog fouten in die ik heb aangegeven met commentaar waardoor ze er zijn.</li> 
	 		 <li>Dit is een kleine demonstratie van de basis functies
	 		zn in geen geval een representatie van een volledige test (bv time limit, counter bovenaan compleet afwezig en wat bugs in zoals als je niets aanduid krijg je de error maar word de nieuwe vraag tog gegenereert -> komt door een fout in succes: waardoor ik voor deze demo complete: in mijn ajax script heb gebruikt).
	 		Het is gewoon een kleine demonstratie die ik op een kleine 2 uur gemaakt heb om te laten zien dat ik het basis idee door heb.
	 		En de logica begrijp</li>
	 		<li>
	 		json: counter= aantal juiste antwoorden, 1-> 5 de objecten geven informatie over de inputs id=vraag id , status= het antwoord, controll= of de antwoord juist of fout is.</li>
	 </ul>
	 <footer>
                <div class='footer'>
                 <button  class="volgende" onclick="location.href='{{asset('/refresh')}}'"	 >herstart</button>
                  
                </div>
            </footer>
</div>
</div>
@stop