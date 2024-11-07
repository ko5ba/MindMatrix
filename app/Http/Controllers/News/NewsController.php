<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Resources\News\NewsIndexResource;
use App\Http\Resources\News\NewsShowResource;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        $news = Cache::remember('news', 7200, fn() => News::all());

        return NewsIndexResource::collection($news);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news): NewsShowResource
    {
        $newsCache = Cache::remember('news' . $news, 7200, fn() => $news);

        return new NewsShowResource($newsCache);
    }
}
