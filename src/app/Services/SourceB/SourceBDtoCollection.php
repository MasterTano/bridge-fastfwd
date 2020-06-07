<?php


namespace App\Services\SourceB;


use Spatie\DataTransferObject\DataTransferObjectCollection;

class SourceBDtoCollection extends DataTransferObjectCollection
{
    public function current(): SourceBDto
    {
        return parent::current();
    }

    public static function create($data): SourceBDtoCollection
    {
        $dtoArray = [];
        foreach ($data as $item) {
             array_push($dtoArray, SourceBDto::fromArray($item));
        }
        return new static($dtoArray);
    }
}
