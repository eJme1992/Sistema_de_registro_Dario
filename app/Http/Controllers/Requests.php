<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Form;
use App\License;


//SECOND STEP
use App\Address;
use App\Solicitud;
use App\Three_address;




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
	
	
	
	
	
	
	public function input_data_bd(Request $request){
		
		$slug = $request->input('slug');
		
		/**/
		$Form = new Form();
        $Job = new Job(); 
		$Address = new Address(); 
		$Solicitud = new Solicitud(); 
		$Three_address = new Three_address();
		
		$Form = Form::where('slug',$slug)->first();
        $Job = Job::where('id',$Form->job_id)->first(); 
		
		
		
		if($request->input('contadorForm') == 1){
			
		//Job
		$Job->phone = $request->input('phone');
		$Job->cell_phone = $request->input('cell_phone');
		$Job->emergency_phone = $request->input('emergency_phone');
		$Job->nacionalidad = $request->input('nacionalidad');
		$Job->permiso_trabajo = $request->input('permiso_trabajo');
        $Job->save();
	
	
	   //Address
	   $Address->job_id = $Form->job_id;
	   $Address->direccion = $request->input('direccion');
	   $Address->apartamento = $request->input('apartamento');
	   $Address->ciudad = $request->input('city');
	           //$Address->estado = ;   HAY QUE AGREGAR LOS ESTADOS EN EL FORM
	   $Address->zip =  $request->input('zip');
	   $Address->cuanto_tiempo = $request->input('howlong');
	   $Address->save();
	   
	   //Solicitud
	   $Solicitud->job_id = $Form->job_id;
	   $Solicitud->disponible = $request->input('disponible');
	   $Solicitud->extrabajador = $request->input('ex_trabajador'); 
	   $Solicitud->inicio_extrabajo = $request->input('inicio_extrabajo');
	   $Solicitud->fin_extrabajo = $request->input('fin_extrabajo');
	   $Solicitud->posicion = $request->input('position_applied_for');
	   $Solicitud->save();
	   
		}
		
		
		
		
		else if ( ($request->input('contadorForm') == 2) && ($request->input('boton_bucle') == "three_adress_button") ){
			
			$Three_address->job_id = $Form->job_id;
			$Three_address->direccion = $request->input('three_address');
			$Three_address->apartamento = $request->input('three_apartamento');;
			$Three_address->ciudad = $request->input('three_city');
			$Three_address->estado = $request->input('three_estado');
			$Three_address->zip = $request->input('three_zip');
			$Three_address->cuanto_tiempo = $request->input('three_howlong');
			
			
			$Three_address->save();
			
			$Three_address = Three_address::where('job_id', $Form->job_id)->get()->toArray();
		//return response()->json(['mensaje' => $Three_address->direccion, 'status' => 'ok'], 200);
		return response()->json(['three_adress' => $Three_address, 'status' => 'ok'], 200);
			
		}
		
		
		
		
		
		else if ($request->input('contadorForm') == 3){}
		else if ($request->input('contadorForm') == 4){}
		else if ($request->input('contadorForm') == 5){}
		else if ($request->input('contadorForm') == 6){}
		else if ($request->input('contadorForm') == 7){}
		else if ($request->input('contadorForm') == 8){}
		
		
		
		
		
		
		
		return response()->json(['mensaje' => 'successfully', 'status' => 'ok'], 200);
	}
	
	
	
	
	

 }  // llave fin de la Clase




