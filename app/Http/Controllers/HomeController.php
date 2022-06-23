<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Client;
use App\Models\Project;
use Mail;
use App\Mail\ContactMail;
// use Helper;
use Faker\Extension\Helper;
use App\Webmail;
use RealRashid\SweetAlert\Facades\Alert;

// include './mail/PHPMailer.php';
// include './mail/SMTP.php';
// include './mail/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
// require 'vendor/autoload.php';


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::all();
        return view('web.home', compact('services'));
    }

    public function client()
    {
        $clients = Client::all();
        return view('web.client', compact('clients'));
    }

    public function project()
    {
        return view('web.project');
    }

    public function projects_country($country)
    {
        $projects = Project::where('city_name', $country)->get();
        return view('web.project_country', compact('projects'));
    }

    public function fire_safety_design()
    {
        return view('web.services.service1');
    }

    public function fire_safety_engineering()
    {
        return view('web.services.service2');
    }
    
    public function facade_and_roofing()
    {
        return view('web.services.service3');
    }

    public function fire_safety_management()
    {
        return view('web.services.service4');
    }

    public function smoke_cfd()
    {
        return view('web.services.service5');
    }

    public function fire_safety_inspection()
    {
        return view('web.services.service6');
    }

    public function hot_smoke_test()
    {
        return view('web.services.service7');
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function ContactPageSubmit(Request $request)
    {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'motasimdeveloper@gmail.com';                     //SMTP username
            $mail->Password   = 'kueldrzijdlqjomx';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($request->email, $request->name);
            $mail->addAddress('motasimmax@gmail.com', 'Joe User');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $request->subject;
            $mail->Body    = 'Send from: ' . $request->email . '<br> message: ' .  $request->message;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            Alert::success('Thanks for contact us', 'Email Successfully Send');
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        return redirect('/contact'); 
    }
}
