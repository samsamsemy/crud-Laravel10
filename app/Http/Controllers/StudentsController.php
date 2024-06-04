<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.data')->with([
            'students' => Students::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentsRequest $request)
    {
        $validate = $request->validated();

        $students = new Students();
        $students->idstudents = $request->txtid;
        $students->fullname = $request->txtfullname;
        $students->gender = $request->txtgender;
        $students->emailaddress = $request->txtemail;
        $students->phone = $request->txtphone;
        $students->address = $request->txtaddress;
        $students->save();

        return redirect('students')->with('msg', 'data berhasil ditambahakan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $students,$idstudents)
    {
        // echo $idstudents; Testing

        $data = $students->find($idstudents);
        // echo $data->fullname; testing
        return view('students.formedit')->with([
            'txtid' => $idstudents,
            'txtfullname' => $data -> fullname,
            'txtgender' => $data -> gender,
            'txtemail' => $data -> emailaddress,
            'txtphone' => $data -> phone,
            'txtaddress' => $data -> address
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentsRequest $request, Students $students,$idstudents)
    {
        // echo $idstudents; testing
        $data = $students->find($idstudents);
        $data->fullname = $request->txtfullname;
        $data->gender = $request->txtgender;
        $data->emailaddress = $request->txtemail;
        $data->phone = $request->txtphone;
        $data->address = $request->txtaddress;
        $data->save();

        return redirect('students')->with('msg', 'data dengan nama students'.$data->fullname.' berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $students, $idstudents)
    {
        $data = $students->find($idstudents);
        $data->delete();
        return redirect('students')->with('msg', 'data dengan nama students'.$data->fullname.' berhasil di hapus');

    }
}