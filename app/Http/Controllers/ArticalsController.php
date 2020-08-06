<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Artical;
use Illuminate\Auth\Events\Validated;

class ArticalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Artical = Artical::latest()->get();
        return view("artical")->with("articals", $Artical);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        session()->flash("success", "the Artical Added Successfuly");

        $this->validate(request(), [ //Erorr control make the name nad descriotion required
            "supject" => "required",
            "content" => "required",
        ]);
        $data = request()->all();

        // dd($data);

        $artical = new Artical();

        $artical->supject = $data["supject"];

        $artical->content = $data["content"];

        $artical->save();

        return redirect("/Artical");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artical $Artical)
    {
        //

        return view("show")->with("Artical", $Artical);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artical $Artical)
    {

        return view("edit")->with("Artical", $Artical);
        // return view("edit", compact("artical"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artical $Artical)
    {
        //
        request()->validate([
            "supject" => "required",
            "content" => "required"
        ]);

        session()->flash("success", "The Artical Updated successfuly");
        $data = request()->all();

        // dd($data);

        $Artical->supject = $data["supject"];

        $Artical->content = $data["content"];

        $Artical->save();

        return redirect("/Artical");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artical $Artical)
    {
        //
        session()->flash("success", "The artical Deleted Successfuly");

        $Artical->delete();

        return redirect("/Artical");
    }
}
