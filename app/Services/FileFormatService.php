<?php

namespace App\Services;

use App\Repositories\FileFormatRepository;

class FileFormatService
{
    protected $fileFormatRepo = null;
    public function __construct(FileFormatRepository $fileFormatRepository)
    {
        $this->fileFormatRepo = $fileFormatRepository;
    }

    public function createOrUpdateFileFormat(array $data)
    {
        try {
            $result = $this->fileFormatRepo->createOrUpdateFileFormat($data);
            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getFileFormatById($id)
    {
        try {
            $result = $this->fileFormatRepo->getFileFormatById($id);
            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteFileFormat($id)
    {
        try {
            $result = $this->fileFormatRepo->deleteFileFormat($id);
            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getFileFormatList()
    {
        try {
            $result = $this->fileFormatRepo->getFileFormatList();
            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAllColumns()
    {
        try {
            $result = $this->fileFormatRepo->getAllColumns();
            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
