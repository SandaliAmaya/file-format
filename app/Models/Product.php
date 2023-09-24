<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getTableColumns() {
        return Schema::getColumnListing((new self)->getTable());
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
