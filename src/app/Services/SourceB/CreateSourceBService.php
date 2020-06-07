<?php

namespace App\Services\SourceB;

use App\SourceB;

class CreateSourceBService
{
    public function create(SourceBDto $data) {
        return SourceB::create([
            'id' => $data->id,
            'name' => $data->name,
            'details' => json_encode($data->details)
        ]);
    }
}
