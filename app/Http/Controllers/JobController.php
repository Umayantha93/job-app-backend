<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobResource;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JobController extends Controller
{

    public function index()
    {
        return JobResource::collection(Vacancy::paginate());

    }

    public function store(Request $request)
    {

        $vacancy = Vacancy::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'salary' => $request->input('salary'),
            'type' => $request->input('type'),
        ]);

        return response($vacancy, Response::HTTP_CREATED);
    }

    public function fetch(Request $request)
    {
        $location = $request->location;
        $type = $request->type;
        $max_salary = $request->max_salary;
        $min_salary = $request->min_salary;

        $jobs = Vacancy::where('location', $location)
                        ->where('type', $type)
                        ->WhereBetween('salary', [$min_salary, $max_salary])
                       ->get()->toArray();

        return response($jobs);
    }
}
