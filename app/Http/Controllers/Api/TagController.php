<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreateTagRequest;
use App\Repositories\Interfaces\TagRepository;
use Illuminate\Http\Response;

class TagController extends Controller
{
    protected $tagRepository;

    /**
     * Constructor TagController
     */
    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * @OA\Get(
     *    path="/api/tags",
     *    tags={"Tags"},
     *    summary="Get list of tags",
     *    description="Get list of tags",
     *     @OA\Response(
     *          response=200, description="Success",
     *          @OA\JsonContent(
     *             @OA\Property(property="status", type="integer", example="200"),
     *             @OA\Property(property="data",type="object")
     *          )
     *       )
     *  )
     */
    public function getTags()
    {
        return response()->json($this->tagRepository->all());
    }

    public function store(CreateTagRequest $request)
    {
        return response()->json($this->tagRepository->store($request->all()), Response::HTTP_OK);
    }
}
