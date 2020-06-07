<?php

namespace App\Services\SourceA;

use App\SourceA;

class CreateSourceAService
{
    public function create(SourceADto $data) {
        return SourceA::create([
            'id' => $data->id,
            'name' => $data->name,
            'details' => json_encode($data->details)
        ]);
    }
}
