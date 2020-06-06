<?php

use App\Customer;
use App\Services\Customer\CreateCustomerService;
use App\Services\SourceA\CreateSourceAService;
use App\Services\SourceB\CreateSourceBService;
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
        $sourceBData = SourceBData::get();
        foreach ($sourceBData as $contact) {
            $contactCollection = collect($contact['FL']);
            $normalizedContactArray = $contactCollection->mapWithKeys(function ($item) {
                return [$item['val'] => $item['content']];
            });
            (new CreateSourceBService())->create($normalizedContactArray);
        }

        $sourceAData = SourceAData::get();
        foreach ($sourceAData as $sourceAcontact) {
            // Create sourceA Data
            (new CreateSourceAService())->create($sourceAcontact);

            foreach ($sourceBData as $sourceBcontact) {

                $contactCollection = collect($sourceBcontact['FL']);

                $sourceBContactArray = $contactCollection->mapWithKeys(function ($item) {
                    return [$item['val'] => $item['content']];
                });

                if($sourceBContactArray['Account Name'] === $sourceAcontact['Name']) {
                    (new CreateCustomerService())->create([
                        'idSourceA' => $sourceAcontact['ContactID'],
                        'idSourceB' => $sourceBContactArray['ACCOUNTID'],
                        'modifiedSourceA' => $sourceAcontact['UpdatedDateUTC'],
                        'modifiedSourceA' => $sourceBContactArray['Modified Time'],
                        'modified' => $sourceBContactArray['Modified Time'], //TODO: get the latest date modified for the duplicates
                        'active' => 1,
                    ]);
                }
            }
        }
    }
}
