<?php

namespace App\Repositories;

use App\Interfaces\SubjectRepositoryInterface;
use App\Models\Subject;

class SubjectRepository implements SubjectRepositoryInterface
{
    /**
     * @return Subject[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllSubject()
    {
        return Subject::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSubjectById($id)
    {
        return Subject::findOrFail($id);
    }

    /**
     * @param $id
     * @return int|mixed
     */
    public function deleteSubject($id)
    {
        return Subject::destroy($id);
    }

    /**
     * @param array $subjectDetail [description]
     * @return mixed
     * @option unsignedBigInteger  "teacher_id"         [description]
     * @option text  "information_about_discipline"     [description]
     * @option text "summary_topic"                     [description]
     * @option json "structure"                         [description]
     * @option json  "self_training"                    [description]
     * @option json  "list_developed_competencies"      [description]
     */
    public function createSubject(array $subjectDetail)
    {
        return Subject::create($subjectDetail);
    }

    /**
     * @param $id
     * @param array $subjectDetail [description]
     * @option unsignedBigInteger  "teacher_id"         [description]
     * @option text  "information_about_discipline"     [description]
     * @option text "summary_topic"                     [description]
     * @option json "structure"                         [description]
     * @option json  "self_training"                    [description]
     * @option json  "list_developed_competencies"      [description]
     * @return mixed
     */
    public function updateSubject($id, array $subjectDetail)
    {
        return Subject::whereId($id)->update($subjectDetail);
    }
}
