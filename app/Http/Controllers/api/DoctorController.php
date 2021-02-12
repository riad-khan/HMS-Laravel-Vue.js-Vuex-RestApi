<?php

namespace App\Http\Controllers\api;

use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = Doctor::all();

        return  response()->json($get);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'date' =>'required',
            'specialization' => 'required',
            'experience' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:doctors',
            'gender' =>'required',
            'details' => 'required',
            'address' => 'required',
            'photo' => 'required',

        ]);

        if($request->photo){
            //first select position from where to start
            $position = strpos($request->photo,';');

            //which index to take
            $sub = substr($request->photo,0,$position);
            //remove slash from image link

            $ext = explode('/',$sub)[1];

            //image naming //

            $name = time().".".$ext;

            //image making & resizing with intervention //
            $image = Image::make($request->photo)->resize(240,200);

            //upload path//
            $upload_path = 'hms/photos/doctors/';
            $image_url = $upload_path.$name;
            $image->save($image_url);



            $data = array();

            $data['name'] = $request->name;
            $data['date_of_birth'] = $request->date;
            $data['specialization'] = $request->specialization;
            $data['experience'] = $request->experience;
            $data['age'] = $request->age;
            $data['phone'] = $request->phone;
            $data['email'] = $request->email;
            $data['gender'] = $request->gender;
            $data['about'] = $request->details;
            $data['address'] = $request->address;

            $data['image'] = $image_url;


            Doctor::create($data);


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
        $edit = Doctor::find($id);

        return response()->json($edit);
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
        $find = Doctor::find($id);
        $photo = $find->image;

        if($photo){
            unlink($photo);
            $delete = Doctor::where('id',$id)->delete();

            return response()->status();
        }else{
            $delete = Doctor::where('id',$id)->delete();
            return response()->json($delete);
        }
    }
}
