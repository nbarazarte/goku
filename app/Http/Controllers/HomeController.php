<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_curso;
use App\tbl_equipoilernus;
use App\tbl_instructores;
use DB;
use App\Consultas;
use App\Menu;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use PHPMailer;

class HomeController extends Controller
{
    
    /**
     *
     * @return void
     */
    public function __construct()
    {
        Menu::opcionesMenu();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$cursos = DB::table('tbl_cursos')->orderByRaw("RAND()")->get();    
        $cursos = DB::table('tbl_cursos')->get();

        $directores = DB::table('tbl_equipoilernus')->where('str_tipo', 'director')->orderBy('str_orden', 'asc')->get();

        $gerentes = DB::table('tbl_equipoilernus')->where('str_tipo', 'gerencial')->where('str_orden', '>', 1)->orderBy('str_orden', 'asc')->get();

        $ceos = DB::table('tbl_equipoilernus')->where('str_tipo', 'gerencial')->where('str_orden', '=', 1)->orderBy('str_orden', 'asc')->get();

        return \View::make('index', compact('cursos','directores','gerentes','ceos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function instructores()
    {

        $instructores = DB::table('tbl_instructores')->get();

        return \View::make('instructores', compact('instructores'));
    }  


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {

        return \View::make('blog');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactanos()
    {

        return \View::make('contactanos');
        
    }  


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terminos()
    {

        return \View::make('terminos');
        
    }  


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function politicas()
    {

        return \View::make('politicas');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {

        return \View::make('faq');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mapa()
    {

        return \View::make('mapa');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trabaja()
    {

        return \View::make('trabaja');
        
    }                      


    public function enviar()
    {       
        /*$message = $_POST['message']."<br><br> Atte.: ".$_POST['name']."<br> Teléfono: ".$_POST['phone'];
                
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $cabeceras .= "Content-Type: image/png";    
        $cabeceras .= 'To: Neil Barazarte <ezebarazarte@gmail.com>' . "\r\n";
        $cabeceras .= 'From: '.$_POST['name'].' <'.$_POST['email'].'>' . "\r\n";     
        
        if (!mail('ezebarazarte@gmail.com', $_POST['asunto'].' - ilernus.com', $message, $cabeceras)) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!, el mensaje no se pudo enviar');
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }

        return Redirect::to('/#contacto');*/

        if($_POST['cargo'] != 'otros') {

            $cargo = $_POST['cargo'];

        }else{

            $cargo = $_POST['otroCargo'];
        }


        if($_POST['sector'] != 'otros') {

            $sector = $_POST['sector'];

        }else{

            $sector = $_POST['otroSector'];
        }        

        $message = $_POST['message']."<br><br> Atte.: ".$_POST['name']."<br> Cargo: ".$cargo."<br> Sector: ".$sector."<br> Teléfono: ".$_POST['phone']."<br> Correo Electrónico: ".$_POST['email'];

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";

        //$mail->Username = "socialmedia@monitorbg.com";
        //$mail->Password = "Monitor.2017";
        //$mail->SetFrom('socialmedia@monitorbg.com');

        $mail->Username = "atrellus@gmail.com";
        $mail->Password = "falcor90dbb";
        $mail->SetFrom('socialmedia@monitorbg.com');        

        $mail->AddReplyTo($_POST['email'], $_POST['name']);
        //$mail->addAddress("ventas@ilernus.com");
        $mail->addAddress("ezebarazarte@gmail.com");
        
        $mail->Subject = "ilernus.com - ". $_POST['asunto'];
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        $mail->msgHTML($message);
        $mail->AltBody = 'Contactanos';
        //$mail->addAttachment('images/imagen_adjunta.png');
         
        if (!$mail->send()) {
            //echo "Error: " . $mail->ErrorInfo;
            Session::flash('message','Error!'.$mail->ErrorInfo);
        } else {
            Session::flash('message','Su mensaje fue enviado exitosamente!');
        }

        return Redirect::to('http://'.$_SERVER['SERVER_NAME'].'/Contáctanos#mensaje-enviado');

    }  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
