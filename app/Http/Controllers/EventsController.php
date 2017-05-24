<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();

        return view('events.index',compact('event'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//                dd($request->all());

        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'image'=>'required',

        ]);


        $event = new Event();

        $fileRegisterNumber        = $request->image;
        if(isset($fileRegisterNumber)) {


            $destinationPath = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'events');
            $extension = $fileRegisterNumber->getClientOriginalExtension();
            $filename = str_random(12) . ".{$extension}";
            $fileRegisterNumber->move($destinationPath, $filename);
            $event->image = $filename;


            $event->title = $request->title;
            $event->body = $request->body;
        }





        $event->save();
        if ($event->save()) {

            return redirect()->back()->with(Session::flash('flash_message', 'Detailed Successfully Submitted !'));

        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)

    {

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['event'] = Event::find($id);

        return view('events.edit',$data);
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
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required',


        ));
        $event = Event::find($id);

        $fileRegisterNumber        = $request->image;
        if(isset($fileRegisterNumber)) {


            $destinationPath = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'images'. DIRECTORY_SEPARATOR . 'events');
            $extension = $fileRegisterNumber->getClientOriginalExtension();
            $filename = str_random(12) . ".{$extension}";
            $fileRegisterNumber->move($destinationPath, $filename);
            $event->image = $filename;
        }
        $event->title = $request->input('title');
        $event->body = $request->input('body');


        $event->save();
        return redirect()->back()->with(Session::flash('flash_message', 'Detailed Successfully Updated !'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
}
