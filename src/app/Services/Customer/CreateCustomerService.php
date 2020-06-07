<?php

namespace App\Services\Customer;

use App\Customer;
use App\Services\SourceA\SourceADto;
use App\Services\SourceB\SourceBDto;
use Carbon\Carbon;

class CreateCustomerService
{
    public function create(SourceADto $sourceADto, SourceBDto $sourceBDto)
    {
        $modifiedSourceA = Carbon::parse($sourceADto->modifiedDate)->utc();

        $modifiedSourceB = Carbon::parse($sourceBDto->modifiedDate)->utc();

        $modified = $modifiedSourceA->greaterThan($modifiedSourceB)
            ? $modifiedSourceA: $modifiedSourceB;

        return Customer::create([
            'idSourceA' => $sourceADto->id,
            'idSourceB' => $sourceBDto->id,
            'modifiedSourceA' => $modifiedSourceA,
            'modifiedSourceB' => $modifiedSourceB,
            'modified' => $modified
        ]);
    }

}
