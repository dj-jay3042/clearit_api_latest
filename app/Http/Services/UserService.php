<?php

namespace App\Http\Services;

use App\Http\Helpers\DbHelper;
use App\Providers\Api\UserProvider;
use Illuminate\Support\Facades\Date;

class UserService
{

    public static function createUser(array $data)
    {
        try {
            $email = $data["email"];
            $firstname = $data["firstname"];
            $lastname = $data["lastname"];
            $company = $data["company"];
            $accountType = $data["accountType"];
            $businessStructureType = $data["businessStructureType"];
            $signingOfficerType = $data["signingOfficerType"];
            $legalBusinessName = $data["legalBusinessName"];
            $tradeName = $data["tradeName"];
            $importerNumber = $data["importerNumber"];
            $streetAddress = $data["streetAddress"];
            $city = $data["city"];
            $country = $data["country"];
            $stateIdentifier = $data["stateIdentifier"];
            $postalCode = $data["postalCode"];
            $contactFirstName = $data["contactFirstName"];
            $contactLastName = $data["contactLastName"];
            $phoneNumber = $data["phoneNumber"];
            $password = $data["phoneNumber"];
            $faxNumber = $data["faxNumber"];
            $birthDate = $data["birthDate"];
            $haveBond = $data["haveBond"];
            $bondReferenceNumber = $data["bondReferenceNumber"];
            $bondExpirationYear = $data["bondExpirationYear"];
            $bondExpirationMonth = $data["bondExpirationMonth"];
            $bondExpirationDay = $data["bondExpirationDay"];
            $bondType = $data["bondType"];
            $affiliateReference = $data["affiliateReference"];
            $affiliateShipmentNumber = $data["affiliateShipmentNumber"];
            $createdByUserId = $data["createdByUserId"];
            $jurisdictionState = $data["jurisdictionState"];
            $verificationUserId = $data["verificationUserId"];
            $registrationIP = $data["registrationIP"];

            $currentDateTime = Date::now()->format('Y-m-d H:i:s');
            $token = sha1($email . $password . $currentDateTime);
            $isActive = 1;
            $params = [
                $firstname,
                $lastname,
                $email,
                sha1($password),
                $company,
                $isActive,
                $token,    
            ];
            return UserProvider::createUser($params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function updateUser(array $data)
    {
        try {
            $email = $data["email"];
            $accountType = $data["accountType"];
            $businessStructureType = $data["businessStructureType"];
            $signingOfficerType = $data["signingOfficerType"];
            $legalBusinessName = $data["legalBusinessName"];
            $tradeName = $data["tradeName"];
            $importerNumber = $data["importerNumber"];
            $streetAddress = $data["streetAddress"];
            $city = $data["city"];
            $country = $data["country"];
            $stateIdentifier = $data["stateIdentifier"];
            $postalCode = $data["postalCode"];
            $contactFirstName = $data["contactFirstName"];
            $contactLastName = $data["contactLastName"];
            $phoneNumber = $data["phoneNumber"];
            $password = $data["phoneNumber"];
            $faxNumber = $data["faxNumber"];
            $birthDate = $data["birthDate"];
            $haveBond = $data["haveBond"];
            $bondReferenceNumber = $data["bondReferenceNumber"];
            $bondExpirationYear = $data["bondExpirationYear"];
            $bondExpirationMonth = $data["bondExpirationMonth"];
            $bondExpirationDay = $data["bondExpirationDay"];
            $bondType = $data["bondType"];
            $affiliateReference = $data["affiliateReference"];
            $affiliateShipmentNumber = $data["affiliateShipmentNumber"];
            $createdByUserId = $data["createdByUserId"];
            $jurisdictionState = $data["jurisdictionState"];
            $verificationUserId = $data["verificationUserId"];
            $registrationIP = $data["registrationIP"];

            $params = [
                $email,
                $accountType,
                $businessStructureType,
                $signingOfficerType,
                $legalBusinessName,
                $tradeName,
                $importerNumber,
                $streetAddress,
                $city,
                $country,
                $stateIdentifier,
                $postalCode,
                $contactFirstName,
                $contactLastName,
                $phoneNumber,
                $password,
                $faxNumber,
                $birthDate,
                $haveBond,
                $bondReferenceNumber,
                $bondExpirationYear,
                $bondExpirationMonth,
                $bondExpirationDay,
                $bondType,
                $affiliateReference,
                $affiliateShipmentNumber,
                $createdByUserId,
                $jurisdictionState,
                $verificationUserId,
                $registrationIP
            ];
            return DbHelper::callProcedure(__FUNCTION__, $params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function getUser(array $data)
    {
        try {
            $userIdentifier = $data["userIdentifier"];

            return DbHelper::callProcedure(__FUNCTION__, [$userIdentifier]);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function createUserBondApplication(array $data)
    {
        try {
            $userIdentifier = $data["userIdentifier"];
            $firstname = $data["firstname"];
            $lastname = $data["lastname"];
            $phone = $data["phone"];
            $password = $data["phone"];
            $busname = $data["busname"];
            $tradename = $data["tradename"];
            $yearsInBusiness = $data["yearsInBusiness"];
            $physicalAddress = $data["physicalAddress"];
            $physicalCity = $data["physicalCity"];
            $physicalCountry = $data["physicalCountry"];
            $physicalState = $data["physicalState"];
            $physicalZip = $data["physicalZip"];
            $mailingAddress = $data["mailingAddress"];
            $mailingCity = $data["mailingCity"];
            $mailingCountry = $data["mailingCountry"];
            $mailingState = $data["mailingState"];
            $mailingZip = $data["mailingZip"];
            $isBondOnFile = $data["isBondOnFile"];
            $isTerminationSent = $data["isTerminationSent"];
            $terminationDate = $data["terminationDate"];
            $hasSuretyLoss = $data["hasSuretyLoss"];
            $hasPrincipalSanctions = $data["hasPrincipalSanctions"];
            $merchandiseDesc = $data["merchandiseDesc"];
            $manufacturerCountries = $data["manufacturerCountries"];
            $hasCountervailingDuties = $data["hasCountervailingDuties"];
            $requireReconciliationRider = $data["requireReconciliationRider"];
            $valueMerchandiseImportedLast12Months = $data["valueMerchandiseImportedLast12Months"];
            $estimatedTaxesLast12Months = $data["estimatedTaxesLast12Months"];
            $numberOfEntriesLast12Months = $data["numberOfEntriesLast12Months"];
            $valueMerchandiseImportedNext12Months = $data["valueMerchandiseImportedNext12Months"];
            $estimatedTaxesNext12Months = $data["estimatedTaxesNext12Months"];
            $numberOfEntriesNext12Months = $data["numberOfEntriesNext12Months"];


            $params = [
                $userIdentifier,
                $firstname,
                $lastname,
                $phone,
                $password,
                $busname,
                $tradename,
                $yearsInBusiness,
                $physicalAddress,
                $physicalCity,
                $physicalCountry,
                $physicalState,
                $physicalZip,
                $mailingAddress,
                $mailingCity,
                $mailingCountry,
                $mailingState,
                $mailingZip,
                $isBondOnFile,
                $isTerminationSent,
                $terminationDate,
                $hasSuretyLoss,
                $hasPrincipalSanctions,
                $merchandiseDesc,
                $manufacturerCountries,
                $hasCountervailingDuties,
                $requireReconciliationRider,
                $valueMerchandiseImportedLast12Months,
                $estimatedTaxesLast12Months,
                $numberOfEntriesLast12Months,
                $valueMerchandiseImportedNext12Months,
                $estimatedTaxesNext12Months,
                $numberOfEntriesNext12Months,
            ];
            return DbHelper::callProcedure(__FUNCTION__, $params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }
    public static function saveUserBondReference(array $data)
    {
        try {
            $userId = $data["userId"];
            $bondReferenceNumber = $data["bondReferenceNumber"];
            $bondExpiration = $data["bondExpiration"];

            $params = [
                $userId,
                $bondReferenceNumber,
                $bondExpiration
            ];
            return DbHelper::callProcedure(__FUNCTION__, $params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }

    public static function attachUserDocument(array $data)
    {
        try {
            $file = $data["file"];
            $userIdentifier = $data["userIdentifier"];
            $documentDescription = $data["documentDescription"];

            $params = [
                $userIdentifier,
                $documentDescription
            ];
            return DbHelper::callProcedure(__FUNCTION__, $params);
        } catch (\Exception $th) {
            return response()->json(['error' => '!!! No Data Found !!! Try Again!'], 401);
        }
    }
}
