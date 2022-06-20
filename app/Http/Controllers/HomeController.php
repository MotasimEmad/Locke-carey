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

    public function contact()
    {
        return view('web.contact');
    }

    public function ContactPageSubmit(Request $request)
    {
        // $to = 'motasimdeveloper@email.com';
        // $subject = $request->subject;
        // $name = $request->name;
        // $from = $request->email;
        // $content = $request->message;
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        // $headers .= 'From: '.$from."\r\n";

        // $subjectHeader = 'LockyCare - ';
        // $subjectHeader .= $subject;
        // $message = '<html><body>';
        // $message .= '<h1>This email sending from: '.$from.'</h1>';
        // $message .= '<p style="margin-top=5px">Name: '.$name.'</p>';
        // $message .= '<p style="margin-top=5px">'.$content.'</p>';
        // $message .= '</body></html>';
            
        // // Sending email
        // mail($to, $subjectHeader, $message, $headers);
        // $to = "xyz@somedomain.com";
        //  $subject = "This is subject";
         
        //  $message = "<b>This is HTML message.</b>";
        //  $message .= "<h1>This is headline.</h1>";
         
        //  $header = "From:abc@somedomain.com \r\n";
        //  $header .= "Cc:afgh@somedomain.com \r\n";
        //  $header .= "MIME-Version: 1.0\r\n";
        //  $header .= "Content-type: text/html\r\n";
         
        //  $retval = mail ($to,$subject,$message,$header);
         
        //  if( $retval == true ) {
        //     echo "Message sent successfully...";
        //  }else {
        //     echo "Message could not be sent...";
        //  }
        // Alert::success('Thanks for contact us', 'Email Successfully Send');
        // return redirect('/contact');

    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code
    // Subscribe my channel if you are using this code


  
        $name = "EX - Joey";  // Name of your website or yours
        $to = "tomail@gmail.com";  // mail of reciever
        $subject = "Tutorial or any subject";
        $body = "Send Mail Using PHPMailer - MS The Tech Guy";
        $from = "yourmail@gmail.com";  // you mail
        $password = "yourpassword";  // your mail password

        // Ignore from here

        include './mail/PHPMailer.php';
        include './mail/SMTP.php';
        include './mail/Exception.php';
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; 
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
        if ($mail->send()) {
            echo "Email is sent!";
        } else {
            echo "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
    }
}
