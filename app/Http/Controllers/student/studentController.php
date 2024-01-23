<?php

namespace App\Http\Controllers\student;

use App\Models\studentModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the student.
     */
    public function index(Request $request)
    {
        $studentData = studentModel::all();
    
        if ($request->expectsJson()) {
            return response()->json(['data' => $studentData]);
        }
    
        return view('student.index', [
            'data' => $studentData
        ]);
    }

    /**
     * Add new student.
     */
    public function store(Request $request)
    {
        try {
            studentModel::create($request->all());
    
            if ($request->expectsJson()) {
                return response()->json(['message' => 'New student created successfully']);
            }
            return redirect()->back()->with('success', 'New student created successfully');
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Error creating student record'], 500);
            }
            return redirect()->back()->with('error', 'Error creating student record');
        }
    }

    /**
     * Update the specified student
     */
    public function update(Request $request)
    {
        try {
            $id = $request['id'];
            
            studentModel::where('id', $id)->update([
                'name'   => $request['name'],
                'class'  => $request['class'],
                'status' => $request['status'],
            ]);
    
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Student updated successfully']);
            }
            return redirect()->back()->with('success', 'Student updated successfully');
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Error updating student'], 500);
            }
            return redirect()->back()->with('error', 'Error updating student');
        }
    }

    /**
     * Remove the specified student
     */
    public function destroy(Request $request)
    {
        try {
            $id = $request['id'];
    
            studentModel::where('id', $id)->delete();
    
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Student deleted successfully']);
            }
            return redirect()->back()->with('success', 'Student deleted successfully');
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Error deleting student'], 500);
            }
            return redirect()->back()->with('error', 'Error deleting student');
        }
    }
}
