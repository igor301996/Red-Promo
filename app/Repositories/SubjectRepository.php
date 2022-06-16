<?php

namespace App\Repositories;

use App\Interfaces\SubjectRepositoryInterface;
use App\Models\Subject;

class SubjectRepository implements SubjectRepositoryInterface
{
    /**
     * @return object
     */
    public function getAllSubject(): object
    {
        return Subject::all();
    }

    /**
     * @param $id
     * @return object
     */
    public function getSubjectById($id): object
    {
        return Subject::findOrFail($id);
    }

    /**
     * @param $id
     * @return int
     */
    public function deleteSubject($id): int
    {
        return Subject::destroy($id);
    }

    /**
     * @param array $subjectDetail [description]
     * @return object
     * @option unsignedBigInteger  "teacher_id"         [description]
     * @option text  "information_about_discipline"     [description]
     * @option text "summary_topic"                     [description]
     * @option json "structure"                         [description]
     * @option json  "self_training"                    [description]
     * @option json  "list_developed_competencies"      [description]
     */
    public function createSubject(array $subjectDetail): object
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
     * @return int
     */
    public function updateSubject($id, array $subjectDetail): int
    {
        return Subject::whereId($id)->update($subjectDetail);
    }
}
