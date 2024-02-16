<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Tenant extends \Spatie\Multitenancy\Models\Tenant
{
    protected $fillable = [
        'name',
        'domain',
        'database',
    ];
    protected static function booted()
    {
        static::creating(fn(Tenant $model) => $model->createDatabase());
    }

    public function createDatabase()
    {
        $dbname = $this->getDatabaseName();
        DB::statement("create database if not exists $dbname");
    }
}
