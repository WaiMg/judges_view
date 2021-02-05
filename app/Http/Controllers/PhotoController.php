<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;

use App\Http\Helper;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = \File::allFiles(public_path('testing'));
        
        return View('all_view')->with(array('images'=>$images));
        // print_r($images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $images = \File::allFiles(public_path('testing'));

        for($i=0;$i<count($images);$i++){

            $exif = exif_read_data($images[$i], 'IFD0',true);
            echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";
            
            $exit = exif_read_data($images[$i], 0, true);
            // echo $images[$i]->getFilename();
            Photo::create([
                'file_name'=>$images[$i]->getFileName(),
                'cpm_id'=>'CPM2001',
                'theme'=>'THeme1',
                'camera'=>'Canon'
            ]);
        File::move(public_path('testing/'.$images[$i]->getFileName()), public_path('DB/'.$images[$i]->getFileName()));          

        }
        // Storage::move($images[$i], 'DB/'.$images[$i]->getFileName()); 
        return redirect()->back();
        
       
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
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show_detail(string $id){
        
        $photo=Photo::findOrfail($id);
        
        $camera = Helper::cameraUsed("DB/".$photo->file_name);
        
        return view('detail', ['camera' => $camera,'name'=>$photo->file_name]);

        
    }
    public function showByRound(string $round)
    {
        $all=Photo::where('round',$round);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
