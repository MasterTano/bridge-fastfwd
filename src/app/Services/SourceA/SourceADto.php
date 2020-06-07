<?php


namespace App\Services\SourceA;


use Spatie\DataTransferObject\DataTransferObject;

class SourceADto extends DataTransferObject
{
    public $id;
    public $name;
    public $modifiedDate;
    public $details;

    public static function fromArray(array $params): self
    {
        return new self([
            'id' => $params['ContactID'],
            'name' => $params['Name'],
            'modifiedDate' => $params['UpdatedDateUTC'],
            'details' => $params,
        ]);
    }
}
