<?php

namespace App\Http\Controllers;

use App\QuestionModel;
use App\StudentCourseModel;
use App\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function login(Request $request)
    {
        try {
            session_start();
            $user = StudentModel::where('name', $request->input('name'))->firstOrFail();
            if (md5($request->input('password')) != $user->password) throw new \Exception('error');
            $_SESSION['student_name'] = $user->name;
            $_SESSION['student_id']   = $user->id;
            return redirect('student/index');
        } catch (\Throwable $e) {
            return \Response::json(['msg' => '用户名或密码错误'], 500);
        }
    }

    public function logout()
    {
        unset($_SESSION['student_name']);
        unset($_SESSION['student_id']);
        return redirect('student/');
    }

    public function index()
    {
        $data    = StudentCourseModel::all();
        $courses = '[';
        foreach ($cs = $data->pluck('course')->toArray() as $key => $course) {
            $courses .= ($key == count($cs) - 1) ? '"' . $course : '"' . $course . '",';
        }
        $courses .= ']';

        $scores = '[';
        foreach ($sc = $data->pluck('score')->toArray() as $key => $score) {
            $scores .= ($key == count($sc) - 1) ? $score : $score . ',';
        }
        $scores .= ']';
        return view('student/index', [
            'data'   => $data,
            'course' => $courses,
            'scores' => $scores
        ]);
    }

    public function question()
    {
        return view('student/question', [
            'data' => QuestionModel::where('student_id', $_SESSION['student_id'])->with('reply')->get()
        ]);
    }

    public function createQuestion(Request $request)
    {
        $question             = new QuestionModel();
        $question->question   = $request->input('question');
        $question->student_id = $_SESSION['student_id'];
        $question->save();
        return redirect('student/question');
    }

    public function pwd()
    {
        return view('student/password');
    }

    public function modifyPwd(Request $request)
    {
        $student = StudentModel::where('id', $_SESSION['student_id'])->first();
        if ($student->password != md5($request->input('password'))) throw new \Exception('error');
        if ($request->input('pwd') != $request->input('pwd_repeat')) throw new \Exception('error');
        $student->password = md5($request->input('pwd'));
        $student->save();
        return redirect('student/index');
    }
}