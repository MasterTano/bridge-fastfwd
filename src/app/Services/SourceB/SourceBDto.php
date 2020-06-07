<?php


namespace App\Services\SourceB;


use Spatie\DataTransferObject\DataTransferObject;

class SourceBDto extends DataTransferObject
{
    public $id;
    public $name;
    public $modifiedDate;
    public $details;

    public static function fromArray(array $params): self
    {
        $normalizedParams = collect($params['FL'])->mapWithKeys(function ($item) {
            return [$item['val'] => $item['content']];
        });

        return new self([
            'id' => $normalizedParams['ACCOUNTID'],
            'name' => $normalizedParams['Account Name'],
            'modifiedDate' => $normalizedParams['Modified Time'],
            'details' => $normalizedParams,
        ]);
    }
}
