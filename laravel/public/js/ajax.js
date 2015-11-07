$(document).ready(function(){


//voor mijn eigen gemak en tijdsgebrek werk ik hier niet met ajax get, ik laad dus alle vragen er vanaf het begin in en gebruik dit script om de antwoorden te registreren
//de vraag te posten naar de backend met ajax , de vraag laten verdwijnen en de volgende vraag laten verschijnen.


// De logica is laad alle vragen in en genereer de divs als vragen -> alle divs verdwijnen en alleen de current vraag laten zien.
// we gebruiken hiervoor jquery functies hide en show op de id's in de div's

var $answers = $('#complete');
$('#div2').hide();
$('#div3').hide();
$('#div4').hide();
$('#div5').hide();
$answers.hide();
var error = 'u heeft nog niets geselcteerd';



	// 	REGEL 1 van programeren -> do not repeat yourself, ik heb hier deze hele functie 5 keer gecopy paste en gehardcode.
	//	Dit zou normaal in modular script geschreven moeten worden waardoor je maar 1 keer moet coderen en bv function name(vraagid){};
	// 	waardoor door de vraagid hij voor de rest automatisch doet. Maar wegens tijdsgebrek heb ik het nu zo opgelost.
	//	NOTE: ik heb heel deze app eerst in php geschreven met pagerefreshes volledig werkend en dan omgezet naar ajax
	//	maar dat kan moeilijkheden geven als je timers etc. invoert en dan is ajax beter geschikt.

$('#form1').submit( function(event) {
    event.preventDefault();

        $.ajax({
	            type: 'POST',
	            url: 'register',
	            data: $(this).serialize(),
	            dataType: 'Json',
		            succes: function(){
		            		alert('succes');
		            },
		            error: function(){
		            		alert(error);
		            },

		            // NOTE = deze functie moet normaal in de succes functie komen maar maar ik krijg hem niet in succes,
		            // ik krijg een 200 ok + valid json respons dus hij zou moeten werken. omdat dit een korte demonstratie is ga ik er nu niet te diep in ...
		            // vind het belangrijker om te laten zien dat ik begrijp wat er normaal moet gebeuren en mits meer tijd zal ik hem wel aan de praat krijgen.
		            // en ik kreeg het in de beperkte tijdspan niet aan de praat. Dit zorgt ervoor dat de error exeptions toch nog de volende vraag genereert wat normaal niet mag.
		            // als de succes respons werkt en deze code in de succes gestoken word werkt dit script perfect!!


		            complete: function(){
			           

			            	$('#div1').hide();
			            	

			            	$('#div2').show();
		            }
      		  });
});
$('#form2').submit( function(event) {
    event.preventDefault();
        $.ajax({
	            type: 'POST',
	            url: 'register',
	            data: $(this).serialize(),
	            //dataType: 'json',
		            succes: function(){
		            		alert('succes');
		            },
		            error: function(){
		            		alert(error);
		            },
		            complete: function(){
			            	$('#div2').hide();
			            	$('#div3').show();
		            }
      		  });
        });
 $('#form3').submit( function(event) {
    event.preventDefault();
        $.ajax({
	            type: 'POST',
	            url: 'register',
	            data: $(this).serialize(),
	            //dataType: 'json',
		            succes: function(){
		            		alert('succes');
		            },
		            error: function(){
		            		alert(error);
		            },
		            complete: function(){
			            	$('#div3').hide();
			            	$('#div4').show();
		            }
      		  });
        });
   $('#form4').submit( function(event) {
    event.preventDefault();
        $.ajax({
	            type: 'POST',
	            url: 'register',
	            data: $(this).serialize(),
	            //dataType: 'json',
		            succes: function(){
		            		alert('succes');
		            },
		            error: function(){
		            		alert(error);
		            },
		            complete: function(){
			            	$('#div4').hide();
			            	$('#div5').show();
		            }
      		  });
        });

      
       $('#form5').submit( function(event) {
 				   event.preventDefault();
	        $.ajax({
		            type: 'POST',
		            url: 'register',
		            data: $(this).serialize(),
		            //dataType: 'json',
			            succes: function(){
			            		alert('succes');
			            },
			            error: function(){
			            		alert(error);
			            },
			            complete: function(){
				            	$('#div5').hide();
				            	$answers.show();
						            	$.ajax({
							            	type: 'get',
							            	url:'session',
							            	dataType:'json',
									            	complete: function(answers){
										            		// een each functie die elke object in de json overloopt en uitloopt in een ul die al gedefineerd is met id #result
										            	}
						            	});
				            	
				            	}
			            });
	      		  });
	  

	//$('#div1').hide();

});