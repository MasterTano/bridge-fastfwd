<?php

use App\Customer;
use App\Services\Customer\CreateCustomerService;
use App\Services\SourceA\CreateSourceAService;
use App\Services\SourceA\SourceADtoCollection;
use App\Services\SourceB\CreateSourceBService;
use App\Services\SourceB\SourceBDtoCollection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(Customer::first()) {
            return;
        }

        // Create sourceB Data
        $sourceBDtoCollection = SourceBDtoCollection::create(SourceBData::get());
        foreach ($sourceBDtoCollection as $sourceBDtoData) {
            (new CreateSourceBService())->create($sourceBDtoData);
        }

        $sourceADtoCollection = SourceADtoCollection::create(SourceAData::get());
        foreach ($sourceADtoCollection as $sourceADtoData) {
            // Create sourceA Data
            (new CreateSourceAService())->create($sourceADtoData);

            foreach ($sourceBDtoCollection as $sourceBDtoData) {
                // Create customer entry for matched data
                if($sourceADtoData->name === $sourceBDtoData->name) {
                    (new CreateCustomerService())->create($sourceADtoData, $sourceBDtoData);
                }
            }
        }
    }
}
