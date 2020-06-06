<?php

namespace App\Services\SourceA;

use App\SourceA;

class CreateSourceAService
{
    public function create($data) {
        return SourceA::create([
            'id' => $data['ContactID'],
            'name' => $data['Name'],
            'details' => json_encode($data)
        ]);
    }
}
