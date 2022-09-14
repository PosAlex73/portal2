<?php

namespace App\Utils;

use Illuminate\Database\Eloquent\Model;

abstract class AnalyticItem
{
    public const CLASS_NAME = Model::class;
    protected $data;

    public function __construct()
    {
        static::prepareData();
    }

    function prepareData()
    {
        $this->data = static::CLASS_NAME::all();
    }

    function getCountInfo(): int
    {
        return $this->data->count();
    }

    abstract function getTitle(): string;
    abstract function getListLink(): string;
}
