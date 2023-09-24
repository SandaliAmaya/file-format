<?php

namespace App\Repositories\Interfaces;

interface FileFormatInterface
{
    public function createOrUpdateFileFormat(array $data);

    public function getFileFormatById($id);

    public function deleteFileFormat($id);

    public function getFileFormatList();

//    public function removeColumn();
}
