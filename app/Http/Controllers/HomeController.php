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
        $to = 'motasimdeveloper@email.com';
        $subject = $request->subject;
        $name = $request->name;
        $from = $request->email;
        $content = $request->message;
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        $headers .= 'From: '.$from."\r\n";

        $subjectHeader = 'LockyCare - ';
        $subjectHeader .= $subject;
        $message = '<html><body>';
        $message .= '<h1>This email sending from: '.$from.'</h1>';
        $message .= '<p style="margin-top=5px">Name: '.$name.'</p>';
        $message .= '<p style="margin-top=5px">'.$content.'</p>';
        $message .= '</body></html>';
            
        // Sending email
        mail($to, $subjectHeader, $message, $headers);
        Alert::success('Thanks for contact us', 'Email Successfully Send');
        return redirect('/contact');
    }
}
