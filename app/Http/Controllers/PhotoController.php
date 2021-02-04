<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

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
            echo $images[$i]->getFilename();
            foreach ($exif as $key => $section) {
                foreach ($section as $name => $val) {
                    echo "$name: ";
                    
                    // echo "<pre>";
                    // print_r($name);

                    print_r($val);
                    echo "<br />";

                    // echo"</pre>";
                }
            }

//             echo "<pre>";
//         print_r(getimagesize($images[$i]));
// echo "</pre>";
            // Photo::create([
            //     'file_name'=>$images[$i]->getFileName(),
            //     'cpm_id'=>'CPM2001',
            // 'theme'=>'THeme1',
            // 'camera'=>'Canon'
            // ]);           
        }
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
    public function show(Photo $photo)
    {
        //
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
