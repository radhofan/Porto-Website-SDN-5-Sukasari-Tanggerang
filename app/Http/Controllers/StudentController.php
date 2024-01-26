<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function Login(){
        return view('loginstudent');
    }

    public function LayoutStudentMenu(){
        return view('studentmenu.layoutstudentmenu');
    }

    public function Submit(Request $request){
        $incomingFields = $request->validate([
            'nis' => 'required',
            'nama' => 'required'
        ]);
    
        // Check if a student with the provided NIS and Nama exists
        $student = Student::where('NIS', $incomingFields['nis'])
            ->where('Nama', $incomingFields['nama'])
            ->first();

        if ($student) {
            return redirect(route('studentmenu.dataprofil'));
        } else {
            return redirect()->back()->withInput()->withErrors(['login' => 'Invalid NIS or Name']);
        }
    }
}
