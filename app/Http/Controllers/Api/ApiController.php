<?php

namespace App\Http\Controllers\Api;

use App\Models\Announcement;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return response(['message' => 'API Loaded']);
    }

    public function announcements(): JsonResponse
    {
        $announcements = Announcement::all();
        return response()->json(['data'=> $announcements, 'message' => 'API Loaded']);
    }
}
