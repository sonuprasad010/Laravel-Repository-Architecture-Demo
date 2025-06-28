<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests\StoreBlogsRequest;
use App\Http\Requests\UpdateBlogsRequest;
use App\Services\BlogService;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class BlogController extends Controller
{
    public function __construct(protected BlogService $service){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

   
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogsRequest $request)
    {
        $blog = $this->service->create($request->all());
         return response()->json($blog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blog = $this->service->findById($blog->id);
        return response()->json($blog, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogsRequest $request, Blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $deleted = $this->service->delete($blog->id);
        if(!$deleted){
            throw new ResourceNotFoundException("Blog not found");
        }

        return response()->json([],204);
    }
}
