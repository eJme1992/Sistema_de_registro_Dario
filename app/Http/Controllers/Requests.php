<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Form;
use App\License;
class Requests extends Controller
{
   
    public function create() {
        return view('layouts.requests.request_validate');
    }
	
    public function datacreate($slug) {
        $Form = Form::where('slug',$slug)->first();
        $Job = Job::where('id',$Form->job_id)->first(); 
        return view('layouts.requests.request_datos',compact('Form','Job'));
    }
	
        public function datos(Request $request) {
    	$validatedData = $request->validate(['firma' => 'required', 'nombre' => 'required', 'apellido' => 'required', 'edad' => 'required', 'email' => 'required']);
        $Job = Job::where('id',$request->input('id'))->first(); 
        $Form = Form::where('job_id',$Job->id)->first();
        $License = new License();

        $baseFromJavascript = $request->input('firma');
        $data = base64_decode($baseFromJavascript); 
 	            $Job = Job::where('id',$request->input('id'))->first();  
 	            $fic_name  =  'firma'.date("Y-m-d").'_'.$Job->SSN.'.png' ;
 	            $filepath  =  "/firmas/".$fic_name;
 	            file_put_contents(public_path() .$filepath,$data);
                $mipdf = 'pdf/'.$Form->id.'_'.date("Y-m-d").'.pdf';
                $pdf = resolve('dompdf.wrapper');
                
        
      
        $Form->status = 'enviada';
        $Form->pdf1 = $mipdf;
        $Job->nombre = $request->input('nombre');
        $Job->apellido = $request->input('apellido');
        $Job->email = $request->input('email');
        $Job->firma = $filepath;
        $Job->edad = $request->input('edad');
        $License->job_id = $Job->id;
        $License->licencia = $request->input('licencia');
        $License->estado = $request->input('estado');
      
        $Job->save();
        $Form->save();    
        $License->save();
        $Job->firma=public_path().$filepath;

       $pdf->loadView('pdf.requests.request_datos',compact('Form','Job','License'));
       $pdf->save($mipdf);
        return response()->json(['mensaje' => 'The application has been sent successfully. If the request is pre-approved then you will receive an email to complete your information.', 'status' => 'ok'], 200);
    }




     public function store(Request $request){
        $Job = Job::where('SSN',$request->input('SSN'))->first();  
        if($Job==null){
        $Form = new Form();
        $Job = new Job(); 
        $Job->SSN = $request->input('SSN');
        $Job->save();
        $Form->job_id = $Job->id;
        $Form->slug = uniqid($request->input('SSN'));
        $Form->save();
        return response()->json(['mensaje' => 'The application has been sent successfully', 'status' => 'ok', 'url' => 'datacreate/'.$Form->slug], 200);
        }else{
        $Form = Form::where('job_id',$Job->id)->first(); 
           if($Form->status=='enviada'){
              return response()->json(['mensaje' => 'The last request has not been checked', 'status' => 0], 200);
            }
           if($Form->status=='rechazada'){
           $fecha_actual = $Form->updated_at;
           $fecha_n=date("Y-m-d",strtotime($fecha_actual."+ 2 week")); 
               if(date("Y-m-d")>=$fecha_n){
                   return response()->json(['mensaje' => 'The application has been sent successfully', 'status' => 'ok', 'url' => 'datacreate/'.$Form->slug], 200);
               }else{
               return response()->json(['mensaje' => 'The last request has been rejected. You must wait two weeks to re-apply', 'status' => 0 ], 200);
               }
            }
            if($Form->status==null){
                $Job->save();
                $Form->save();
                 return response()->json(['mensaje' => 'The application has been sent successfully', 'status' => 'ok', 'url' => 'datacreate/'.$Form->slug], 200);
            }
            if($Form->status=='aceptada'){
               // return redirect('second_step/'.$Form->slug);
              //  return redirect('cuentas');
             
			 return response()->json(['mensaje' => 'The application has been sent successfully', 'status' => 'ok', 'url' => 'second_step/'.$Form->slug], 200);
            
			}
        }
    }
	
	
	
	
	////  SEGUNDO PASO FORMULARIO
	public function second_step($slug){
        $Form = Form::where('slug',$slug)->first();
        $Job = Job::where('id',$Form->job_id)->first(); 		
			
			if($Form->status=='aceptada'){
				
				
				      //return response()->json(['mensaje' => 'successfully', 'status' => 'ok'], 200);
           
			}
			
        return view('layouts.requests.request_second_step', compact('Form','Job'));
	 }
	
	
	
	

 }  // Etiqueta fin de la Clase




