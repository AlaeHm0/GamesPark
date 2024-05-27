<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use http\Env\Response;
use App\Http\Requests\CreateRequest;

class TestController extends Controller
{
    // Return all the Tests 
    public function index(){
        return Test::all();
    }

    // Create a new Test
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:tests,email',
        ]);
        $test = Test::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return response(['message' => 'User added with success!']);
    }
    

    // Get a single Test    
    public function show(Test $test){
        return $test;
    }

    // Update a Test
    public function update(Request $request, Test $test){
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:tests,email,'.$test->id,
        ]);

        $test->update($data);

        return "User updated succesfully";
    }

    // Delete a Test
    public function destroy(Test $test){
        $test->delete();
        return 'User deleted successfully';
    }
}
