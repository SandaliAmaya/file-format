<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Models\FileFormat;
use App\Models\Product;
use App\Models\Vendor;
use App\Repositories\Interfaces\FileFormatInterface;
use Illuminate\Support\Facades\Auth;

class FileFormatRepository implements FileFormatInterface
{
    protected $fileFormat = null;
    protected $product = null;
    protected $vendor = null;
    protected $brand = null;

    public function __construct(FileFormat $fileFormat, Product $product, Vendor $vendor, Brand $brand)
    {
        $this->fileFormat = $fileFormat;
        $this->product = $product;
        $this->vendor = $vendor;
        $this->brand = $brand;
    }

    public function createOrUpdateFileFormat(array $data)
    {
        try {
            $loggedUser = Auth::id();
                $columns = json_encode($data['columns']);
            $fileFormat = $this->fileFormat->updateOrCreate(
                ['id' => $data['id']],
                [
                    'name' => $data['name'],
                    'columns' => $columns,
                    'user_id' => $loggedUser,
                ]);
            return $fileFormat;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getFileFormatById($id)
    {
        try {
            $fileFormat = $this->fileFormat->find($id);
            if ($fileFormat) {
                $decodedColumns = json_decode($fileFormat->columns);
                $fileFormat->columns = $decodedColumns;
                return $fileFormat;
            }
           return null;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteFileFormat($id)
    {
        try {
            $fileFormat = $this->getFileFormatById($id);
            $fileFormat->delete();
            return true;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getFileFormatList()
    {
        try {
            $loggedUser = Auth::id();
            $fileFormats = $this->fileFormat->with('user')
                ->where('deleted_at', null)
                ->where('user_id', $loggedUser)
                ->get();
            return $fileFormats;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getAllColumns()
    {
        try {
            $columns = $this->product->getTableColumns();
            return $columns;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
