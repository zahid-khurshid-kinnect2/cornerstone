<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::all();

        return view('videos.index',compact('video'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'link' => 'required',


        ]);


        $video = new Video();
        $video->title = $request->title;
        $video->link = $request->link;


        $video->save();
        if ($video->save()) {

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
        $data['video'] = Video::find($id);

        return view('videos.edit',$data);
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
            'link' => 'required',


        ));
        $video = Video::find($id);

        $video->title = $request->input('title');
        $video->link = $request->input('link');


        $video->save();
         return redirect()->back()->with(Session::flash('flash_message', 'Detailed Successfully Submitted !'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::destroy($id);
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
}
