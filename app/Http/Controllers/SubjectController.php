<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectStoreRequest;
use App\Http\Requests\SubjectUpdateRequest;
use App\Interfaces\SubjectRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubjectController extends Controller
{
    /**
     * @var SubjectRepositoryInterface
     */
    private SubjectRepositoryInterface $subjectRepository;

    /**
     * SubjectController constructor.
     * @param SubjectRepositoryInterface $subjectRepository
     */
    public function __construct(SubjectRepositoryInterface $subjectRepository)
    {
        $this->subjectRepository = $subjectRepository;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(
            [
                'data' => $this->subjectRepository->getAllSubject()
            ]
        );
    }

    /**
     * @param SubjectStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(SubjectStoreRequest $request)
    {
        $subjectDetails = $request->only([
            'teacher_id',
            'information_about_discipline',
            'summary_topic',
            'structure',
            'self_training',
            'list_developed_competencies',
        ]);

        return response()->json(
            [
                'data' => $this->subjectRepository->createSubject($subjectDetails)
            ],
            Response::HTTP_CREATED
        );
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request)
    {
        $subjectId = $request->route('id');

        return response()->json(
            [
                'data' => $this->subjectRepository->getSubjectById($subjectId)
            ]
        );
    }

    /**
     * @param SubjectUpdateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SubjectUpdateRequest $request)
    {
        $subjectId = $request->route('id');
        $subjectDetails = $request->only([
            'teacher_id',
            'information_about_discipline',
            'summary_topic',
            'structure',
            'self_training',
            'list_developed_competencies',
        ]);

        return response()->json(
            [
                'data' => $this->subjectRepository->updateSubject($subjectId, $subjectDetails)
            ]
        );
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        $subjectId = $request->route('id');

        return response()->json(
            [
                'data' => $this->subjectRepository->deleteSubject($subjectId)
            ]
        );
    }
}
