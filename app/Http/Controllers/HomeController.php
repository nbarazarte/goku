<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_curso;
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

        return \View::make('index', compact('cursos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function curso($curso)
    {

        $cursos = DB::table('tbl_cursos')->where('str_curso', $curso)->get();



        if(!$cursos){

            return \View::make('errors.404');
        }



        return \View::make('curso', compact('cursos'));
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

        $message = $_POST['message']."<br><br> Atte.: ".$_POST['name']."<br> Teléfono: ".$_POST['phone'];

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Username = "atrellus@gmail.com";
        $mail->Password = "falcor90dbb";
        $mail->SetFrom('atrellus@gmail.com');
        $mail->AddReplyTo($_POST['email'], $_POST['name']);
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

        return Redirect::to('/#mensaje-enviado');

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
