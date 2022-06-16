<?php

namespace App\Interfaces;

interface SubjectRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAllSubject();

    /**
     * @param $id
     * @return mixed
     */
    public function getSubjectById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function deleteSubject($id);

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
    public function createSubject(array $subjectDetail);

    /**
     * @param $id
     * @param array $subjectDetail [description]
     * @return mixed
     * @option unsignedBigInteger  "teacher_id"         [description]
     * @option text  "information_about_discipline"     [description]
     * @option text "summary_topic"                     [description]
     * @option json "structure"                         [description]
     * @option json  "self_training"                    [description]
     * @option json  "list_developed_competencies"      [description]
     */
    public function updateSubject($id, array $subjectDetail);
}
