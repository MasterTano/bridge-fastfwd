<?php


namespace App\Services\SourceA;


use Spatie\DataTransferObject\DataTransferObjectCollection;

class SourceADtoCollection extends DataTransferObjectCollection
{
    public function current(): SourceADto
    {
        return parent::current();
    }

    public static function create($data): SourceADtoCollection
    {
        $dtoArray = [];
        foreach ($data as $item) {
             array_push($dtoArray, SourceADto::fromArray($item));
        }
        return new static($dtoArray);
    }
}
