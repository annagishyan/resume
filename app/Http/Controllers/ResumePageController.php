<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumePageRequest;
use App\Models\ResumePage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class ResumePageController extends Controller
{
    public function index()
    {
        return view('resume_form');
    }

    public function create(ResumePageRequest $request): JsonResponse
    {
        $data = $request->only(['first_name', 'last_name', 'email', 'position', 'education', 'image']);
        DB::table('resume_pages')->insert($data);

        return response()->json(['message' => 'Record created successfully'], 201);
    }

}







