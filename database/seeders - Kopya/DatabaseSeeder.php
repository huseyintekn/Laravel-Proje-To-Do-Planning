<?php

namespace Database\Seeders;

use App\Models\Catalog\Individual\IndividualContact;
use App\Models\Catalog\Individual\IndividualEducation;
use App\Models\Catalog\Individual\IndividualFamily;
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
		ini_set('memory_limit', '-1');
		
        $this->call(UserSeeder::class);
		
        $this->call(DfntnCountryTableSeeder::class);
        $this->call(DfntnCityTableSeeder::class);
        $this->call(DfntnDistrictTableSeeder::class);
		
        $this->call(DfntnCurrencyTableSeeder::class);
        $this->call(DfntnLanguageTableSeeder::class);
        $this->call(DfntnAddressTypeTableSeeder::class);

        $this->call(DfntnDatatypeTableSeeder::class);
        $this->call(DfntnDatavariableTableSeeder::class);
        $this->call(DfntnLanguageLevelTableSeeder::class);
        $this->call(DfntnGenderIdentityTableSeeder::class);
        $this->call(DfntnSensitiveStatusTableSeeder::class);
        $this->call(DfntnReadingStatusTableSeeder::class);
        $this->call(DfntnEducationTypeTableSeeder::class);
        $this->call(DfntnEducationLevelTableSeeder::class);
        $this->call(DfntnEducationStatusTableSeeder::class);
        $this->call(DfntnSensitiveStatusTableSeeder::class);
        $this->call(DfntnProximityDegreeTableSeeder::class);
        $this->call(DfntnMaritalValidityStatusTableSeeder::class);
        $this->call(DfntnMaritalStatusTableSeeder::class);
        $this->call(DfntnEmploymentTypeTableSeeder::class);
        $this->call(DfntnEmploymentIncomeTypeTableSeeder::class);
        $this->call(DfntnEmploymentSectorTableSeeder::class);
        $this->call(DfntnHealthProblemTableSeeder::class);
        $this->call(DfntnOngoingHealthProblemTableSeeder::class);
        $this->call(DfntnWhichHealthFacilityTableSeeder::class);
        $this->call(DfntnGeneralHealthInformationTableSeeder::class);
        $this->call(DfntnBirthResultTableSeeder::class);
        $this->call(DfntnBirthDocumentTableSeeder::class);
        $this->call(DfntnBirthPlaceTableSeeder::class);
        $this->call(DfntnContraceptiveMethodTableSeeder::class);
        $this->call(DfntnMethodApplicationTableSeeder::class);
        $this->call(DfntnDemandEducationTableSeeder::class);
        $this->call(DfntnDemandHealthTableSeeder::class);
        $this->call(DfntnDemandLegalTableSeeder::class);

        $this->call(IndividualTableSeeder::class);
        $this->call(IndividualSexualOrientationTableSeeder::class);
        $this->call(IndividualMarriageTableSeeder::class);
        $this->call(IndividualEmploymentInfoTableSeeder::class);
        $this->call(IndividualEducationTableSeeder::class);
        $this->call(IndividualContactTableSeeder::class);
        $this->call(IndividualUrgentTableSeeder::class);
        $this->call(IndividualFamilyTableSeeder::class);
        $this->call(IndividualHouseholdInfoTableSeeder::class);
        $this->call(IndividualHealthProblemTableSeeder::class);
        $this->call(IndividualHealthInfoTableSeeder::class);
        $this->call(IndividualHealthWomenBirthTableSeeder::class);
        $this->call(IndividualLegalApplicationTableSeeder::class);
        $this->call(IndividualEmploymentTableSeeder::class);

        $this->call(DfntnDemandTypeTableSeeder::class);
        $this->call(DemandTableSeeder::class);
        $this->call(DemandOrientationTableSeeder::class);
        $this->call(DemandRoutingTrackingTableSeeder::class);


    }
}
