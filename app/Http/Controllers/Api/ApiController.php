<?php

namespace App\Http\Controllers\Api;

use App\Filament\Resources\MissionResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\ContactResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CourseResource;
use App\Http\Resources\MissionResource as ResourcesMissionResource;
use App\Http\Resources\ProcessResource;
use App\Http\Resources\ServiceResource;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Course;
use App\Models\Mission;
use App\Models\Process;
use App\Models\Service;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //

    function company()
    {
        $company = Company::first();
        // return view('welcome');
        return response()->json(['success' => true, 'status' => 200, 'data' => new CompanyResource($company)]);
        // return response()->json($exam);
    }

    function services()
    {
        $service = Service::all();
        return response()->json(['success' => true, 'status' => 200, 'data' => new ServiceResource($service)]);
    }
    function missions()
    {
        $mission = Mission::all();
        return response()->json(['success' => true, 'status' => 200, 'data' => new ResourcesMissionResource($mission)]);
    }

    function process()
    {
        $process = Process::all();
        return response()->json(['success' => true, 'status' => 200, 'data' => new ProcessResource($process)]);
    }
    function countries()
    {
        $process = Country::all();
        return response()->json(['success' => true, 'status' => 200, 'data' => new CountryResource($process)]);
    }
    function contacts(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Phone' => 'nullable|string|max:15',
            'Message' => 'required|string',
        ]);
        Contact::create([
            'Name' => $request->name,
            'Email' => $request->email,
            'Phone' => $request->phone,
            'Message' => $request->message,
        ]);
        return response()->json(['success' => true, 'status' => 200, 'data' => ['message' => 'contact saved successfully']]);
    }


    function courses(){
        $course = Course::all();
        return response()->json(['success' => true, 'status' => 200, 'data' => new CourseResource($course)]);
    }
}
