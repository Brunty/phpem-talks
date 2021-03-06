<?php

namespace App\Http\Controllers;

use App\Speaker;
use Illuminate\Http\Request;
use App\Http\Requests;



class SpeakerController extends Controller
{
    private $speaker;

    protected $guarded=["id"];

    public function __construct(Speaker $speaker)
    {

        $this->speaker = $speaker;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('speaker.details')->with("organisers",$this->speaker->getOrganisers());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('speaker.details')->with("organisers",$this->speaker->getOrganisers());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();

        $params["organiser"] = $this->speaker->getOrganiserName($params["organiser"]);

        var_dump($params);

        $this->speaker->create();


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
