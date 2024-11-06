<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Resources\News\NewsIndexResource;
use App\Http\Resources\News\NewsShowResource;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $news = News::all();

        return NewsIndexResource::collection($news);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news): NewsShowResource
    {
        return new NewsShowResource($news);
    }
}
