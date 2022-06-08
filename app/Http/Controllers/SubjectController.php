<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectStoreRequest;
use App\Http\Requests\SubjectUpdateRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subject = Subject::orderBy('id', 'desc')
            ->paginate(10);

        if (!$subject) {
            return response([
                'status' => 'error',
                'msg' => 'Не удалось получить данные',
            ], 400);
        }

        return response([
            'status' => 'ok',
            'data' => $subject
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param SubjectStoreRequest $request
     * @return void
     */
    public function create(SubjectStoreRequest $request)
    {
        $subject = Subject::create([
            'teacher_id' => $request->input('teacher_id'),
            'information_about_discipline' => $request->input('information_about_discipline'),
            'summary_topic' => $request->input('summary_topic'),
            'structure' => $request->input('structure'),
            'self_training' => $request->input('self_training'),
            'list_developed_competencies' => $request->input('list_developed_competencies')
        ]);

        if (!$subject) {
            return response([
                'status' => 'error',
                'msg' => 'Запись не создалась',
            ], 400);
        }

        return response([
            'status' => 'ok',
            'data' => $subject
        ], 201);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::find($id)->first();

        if (!$subject) {
            return response([
                'status' => 'error',
                'msg' => 'Не удалось получить запись',
            ], 400);
        }

        return response([
            'status' => 'ok',
            'data' => $subject
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(SubjectUpdateRequest $request, Subject $subject)
    {
        $subjectUpdate = $subject->update([
            'teacher_id' => $request->input('teacher_id'),
            'information_about_discipline' => $request->input('information_about_discipline'),
            'summary_topic' => $request->input('summary_topic'),
            'structure' => $request->input('structure'),
            'self_training' => $request->input('self_training'),
            'list_developed_competencies' => $request->input('list_developed_competencies')
        ]);

        if (!$subjectUpdate) {
            return response([
                'status' => 'error',
                'msg' => 'Не удалось обновить запись',
            ], 400);
        }

        return response([
            'status' => 'ok',
            'data' => $subjectUpdate
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        $subjectDelete = $subject->delete();

        if (!$subjectDelete) {
            return response([
                'status' => 'error',
                'msg' => 'Не удалось удалить запись',
            ], 400);
        }

        return response([
            'status' => 'ok',
            'data' => $subjectDelete
        ], 200);
    }
}
