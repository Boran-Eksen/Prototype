<?php

namespace App\Http\Controllers;

use Request;
use App\answer;
use App\questions;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use Input;


class testcontroller extends Controller
{
    //begin pagina
        public function home()
            {   
                //Session::put('1','');
                Session::put('counter', 0);
                $answers= questions::all();
              
                return view('test.test',compact('answers'));
            }

    //begin van de test
    //    public function questions()
    //        {   
    //            $questions= questions::all()->toJson();
    //            return $questions;
    //        }
    // registreerd antwoord en genereerd volgende vraag
        public function register()
            {
                //slaat antwoord op
                $input= Request::all();
                $controll= answer::find($input['id']);
                $controll= $controll['controll'];
                $answer= array();
                $answer['answer']= $input['status'];
                $answer['question']= $input['id'];
                $session = Session::all();
                $counter = $session['counter'];
                if ($controll == $input['status']) {
                    $answer['controll']='correct';
                    $counter= $counter +1;
                }
                else{
                    $answer['controll']='incorrect';
                }
               
                Session::put($input['id'],$answer);
                Session::put('counter', $counter);
                $session=Session::all();
                $session=json_encode($session);
                $input= json_encode($input);
                //controle voor het einde van de test
             
                header('Content-type: application/json');
                print_r($input);die;
            }
            
    //toont antwoorden
        public function session()
            {      
                $session=Session::all();
                $session= json_encode($session);
                return $session;
            }
           public function refresh()
            {      
                $Session= Session::flush();
                
                return Redirect::to('/');
            }

   }
