<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    // Student Home
    public function index()
    {
        // Allow access to the student profile
        $_SESSION['student_access'] = true;

        $data = [
            'title' => 'Student Information Portal',
            'student_name' => 'Carl Justin G. Abarintos',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'BSIT 3-F3'
        ];

        // Because the view is inside app/views/student/
        $this->call->view('student/student_home', $data);
    }


    // Student Profile
    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00111',
            'name' => 'Carl Justin G. Abarintos',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'BSIT 3-F3',
            'email' => 'carljustin.abarintos@mcc.edu.ph',
            'address' => 'Santa Isabel Calapan City Oriental Mindoro',
            'contact' => '09123141234',
            'skills' => 'Web Development, PHP, JavaScript',
            'hobbies' => 'Gaming, Programming',
            'description' => 'I am an Information Technology student interested in programming, web development, and technology.'
        ];

        $data = [
            'title' => 'My Student Profile',
            'student' => $student
        ];

        // Because the view is inside app/views/student/
        $this->call->view('student/student_profile', $data);
    }
}