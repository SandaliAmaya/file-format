<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrUpdateFileFormatRequest;
use App\Http\Requests\CreateOrUpdateTaskRequest;
use App\Services\FileFormatService;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;

class FileFormatController extends Controller
{
    protected $fileFormatService;

    public function __construct(FileFormatService $fileFormatService)
    {
        $this->fileFormatService = $fileFormatService;
    }

    public function createOrUpdateFileFormat(CreateOrUpdateFileFormatRequest $request)
    {
        try {
            $result = $this->fileFormatService->createOrUpdateFileFormat($request->validated());
            if (!$result) {
                return response()->responseFormat(2002, true, 'Failed to create or update the file format', $result, HTTPResponse::HTTP_BAD_REQUEST);
            }
            return response()->responseFormat(2001, true, 'Successfully created/updated the file format', $result, HTTPResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->responseFormat(2001, false, $e->getMessage(), HTTPResponse::HTTP_BAD_REQUEST);
        }
    }

    public function getFileFormatById($id)
    {
        try {
            $result = $this->fileFormatService->getFileFormatById($id);
            if (!$result) {
                return response()->responseFormat(2002, true, 'Failed to fetch the file format', $result, HTTPResponse::HTTP_BAD_REQUEST);
            }
            return response()->responseFormat(2001, true, 'Successfully fetched the file format', $result, HTTPResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->responseFormat(2001, false, $e->getMessage(), HTTPResponse::HTTP_BAD_REQUEST);
        }
    }

    public function deleteFileFormat($id)
    {
        try {
            $result = $this->fileFormatService->deleteFileFormat($id);
            if (!$result) {
                return response()->responseFormat(2002, true, 'Failed to delete the file format', $result, HTTPResponse::HTTP_BAD_REQUEST);
            }
            return response()->responseFormat(2001, true, 'Successfully deleted the file format', $result, HTTPResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->responseFormat(2001, false, $e->getMessage(), HTTPResponse::HTTP_BAD_REQUEST);
        }
    }

    public function getFileFormatList()
    {
        try {
            $result = $this->fileFormatService->getFileFormatList();
            if (!$result) {
                return response()->responseFormat(2002, true, 'Failed to fetch the file format list', $result, HTTPResponse::HTTP_BAD_REQUEST);
            }
            return response()->responseFormat(2001, true, 'Successfully fetched the file format list', $result, HTTPResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->responseFormat(2001, false, $e->getMessage(), HTTPResponse::HTTP_BAD_REQUEST);
        }
    }

    public function getAllColumns()
    {
        try {
            $result = $this->fileFormatService->getAllColumns();
            if (!$result) {
                return response()->responseFormat(2002, true, 'Failed to fetch the column list', $result, HTTPResponse::HTTP_BAD_REQUEST);
            }
            return response()->responseFormat(2001, true, 'Successfully fetched the column list', $result, HTTPResponse::HTTP_OK);
        } catch (\Exception $e) {
            return response()->responseFormat(2001, false, $e->getMessage(), HTTPResponse::HTTP_BAD_REQUEST);
        }
    }
}
