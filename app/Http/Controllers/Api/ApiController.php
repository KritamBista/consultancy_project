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
use App\Models\Blog;
use App\Models\Branch;
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
        return response()->json(['success' => true, 'status' => 200, 'data' =>  ResourcesMissionResource::collection($mission)]);
    }

    function process()
    {
        $process = Process::all();
        return response()->json(['success' => true, 'status' => 200, 'data' => new ProcessResource($process)]);
    }
    function countries()
    {
        $process = Country::all();
        return response()->json(['success' => true, 'status' => 200, 'data' =>  CountryResource::collection($process)]);
    }
    function contacts(Request $request)
    {
        // return "kritam";

        // return"?";

        // $request->validate([
        //     'name' => 'required|string|',
        //     'email' => 'required|email|',
        //     'phone' => 'required|string|',
        //     'message' => 'required|string|',
        // ]);
        // Contact::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'message' => $request->message,
        // ]);

        // return response()->json(
        //     [
        //         'status' => '200',
        //         'data' => ['message' => "Contact created sucessfully"]
        //     ]
        // );

        $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Phone' => 'nullable|string|max:15',
            'message' => 'required|string',
        ]);
        Contact::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Phone' => $request->Phone,
            'message' => $request->message,
        ]);
        return response()->json(['success' => true, 'status' => 200, 'data' => ['message' => 'Contact saved successfully']]);
    }


    function courses()
    {
        $course = Course::all();
        return response()->json(['success' => true, 'status' => 200, 'data' => new CourseResource($course)]);
    }

    function branches()
    {
        $branch = Branch::all();
        return response()->json(['success' => true, 'status' => 200, 'data' => $branch]);
    }
    // function blogs()
    // {
    //     $blogs = ::all();
    //     return response()->json(['success' => true, 'status' => 200, 'data' => $blogs]);
    // }

    function blogs()
    {
        $blog = Blog::all();
        return response()->json(['data' => $blog]);
    }

    function blogDetail($id)
    {
        $blogDetail = Blog::find($id);
        return response()->json(['data' => $blogDetail]);
    }
    

    function countryDeatils($id)
    {

        $country = Country::with('colleges', 'universities')->find($id);
        return response(['data' => $country]);
    }
}
