<?php

namespace App\Services\SourceB;

use App\SourceB;

class CreateSourceBService
{
    public function create($data) {
        return SourceB::create([
            'id' => $data['ACCOUNTID'],
            'name' => $data['Account Name'],
            'details' => json_encode($data)
        ]);
    }
}
