<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function contact(){

        return view('about.contact');

    }
    public function mission(){
        return view('about.mission');

    }
    public function trustees(){
        return view('about.trustees');

    }
    public function about(){
        return view('about.index');

    }
    public function faculty(){
        return view('about.faculty');

    }

    public function admissions(){
        return view('about.admissions');

    }

    public function discover(){
        return view('discover.index');

    }
    public function high_school(){
        return view('discover.high-school');

    }
    public function middle_school(){
        return view('discover.middle-school');

    }
	public function matriculation(){
        return view('discover.matriculation');

    }
    public function pre_school(){
        return view('discover.pre-school');

    }
    public function shadow_teaching(){
        return view('discover.shadow-teaching');

    }
	public function elementary(){
        return view('discover.elementary');

    }
	public function a_levels(){
        return view('discover.a-levels');

    }
	public function internship(){
        return view('discover.internship');

    }
    public function igcse(){
        return view('discover.igcse');

    }

    public function transport(){
        return view('facilities.transport');

    }
    public function gymnasium(){
        return view('facilities.gymnasium');

    }
    public function artRoom(){
        return view('facilities.art-room');

    }
    public function ictLab(){
        return view('facilities.ict-labs');

    }
    public function foodNutrition(){
        return view('facilities.food-nutrition');

    }
    public function indoorPlay(){
        return view('facilities.indoor-play');

    }
    public function studentLocker(){
        return view('facilities.student-locker');

    }
    public function cafeteria(){
        return view('facilities.cafe');

    }
    public function scienceLab(){
        return view('facilities.science-lab');

    }
    public function mediaRoom(){
        return view('facilities.media-room');

    }
    public function library(){
        return view('facilities.library');

    }
    public function infirmary(){
        return view('facilities.infirmary');

    }
    public function pool(){
        return view('facilities.pool');

    }
    public function dayCare(){
        return view('facilities.day-care');

    }

    public function images(){
        return view('gallery.photos');

    }
    public function videos(){
        $video = DB::table('videos')->get();

        return view('gallery.videos',compact('video'));

    }

    public function contactForm(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
            'name' => 'required|min:3',
            'number' => 'required|min:11',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required',
        ]);


        $contactForm = new Contact();


        $contactForm->name = $request->name;
        $contactForm->number = $request->number;
        $contactForm->email = $request->email;
        $contactForm->subject = $request->subject;
        $contactForm->message = $request->message;


        $contactForm->save();

        if ($contactForm->save()) {

            $data = array(
                'email' => $request->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message
            );

            Mail::send('about.email', $data, function ($message) use ($data) {
                $message->from($data['email']);
                $message->to('waqas@blueorcastudios.com');
                $message->subject($data['subject']);

            });


            return redirect()->back();
        }
    }


        public function apply(){
        return view('connect.apply');

    }

    public function calendar(){
        return view('calendar.demos.default');

    }

  public function applyForm(Request $request)
    {
//        dd($request->all());
        $this->validate($request, [
            'name' => 'required|min:3',
            'number' => 'required|min:11',
            'email' => 'required|email',
            'subject' => 'required|min:2',
            'message' => 'required',
            'cv'      => 'required|mimes:jpeg,pdf,docx,doc'
        ]);

                $data = array(
                    'name'=>$request->name,

                    'email' => $request->email,
                    'subject' => $request->subject,
                    'bodyMessage' => $request->message,
                    'cv' => $request->cv

                );

                Mail::send('about.email', $data, function ($message) use ($data) {
                    $message->from($data['email']);
                    $message->to(env('HR_EMAIL_ADDRESS', 'hr@cornersotne.pk'));
                    $message->subject($data['subject']);
                    $message->attach($data['cv']->getRealPath(),array(
                        'as' =>'CV.'.$data['cv']->getClientOriginalExtension(),
                        'mime'=> $data['cv']->getMimeType()

                    ));

                });

                return redirect()->back()->with(Session::flash('flash_message', 'Detailed Submitted And Email Sent !'));

            }


}
