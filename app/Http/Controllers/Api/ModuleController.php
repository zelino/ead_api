<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModuleResource;
use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index($courseID)
    {

        $modules = Module::where('course_id', $courseID)->get();
        return ModuleResource::collection($modules);
    }
}
