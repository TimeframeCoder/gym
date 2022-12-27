<?php
class User
{
    private $firstName;
    private $lastName;
    private $address;
    private $gender;
    private $phoneNumber;
    private $Occupation;
    private $MedicalHistory;
    private $email;
    private $emergencyContactName;
    private $emergencyContactNo;
    private $familyDoctorName;
    private $familyDoctorNumber;
    private $middleName;
    private $dateOfBirth;

    function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }
    function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }
    function getMiddleName()
    {
        return $this->middleName;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setEmergencyContactName($emergencyContactName)
    {
        $this->emergencyContactName = $emergencyContactName;
    }
    function getEmergencyContactName()
    {
        return $this->emergencyContactName;
    }
    function setEmergencyContactNo($emergencyContactNo)
    {
        $this->emergencyContactNo = $emergencyContactNo;
    }
    function getEmergencyContactNo()
    {
        return $this->emergencyContactNo;
    }
    function setFamilyDoctorName($familyDoctorName)
    {
        $this->familyDoctorName = $familyDoctorName;
    }
    function getFamilyDoctorName()
    {
        return $this->familyDoctorName;
    }
    function setFamilyDoctorNumber($familyDoctorNumber)
    {
        $this->familyDoctorNumber = $familyDoctorNumber;
    }
    function getFamilyDoctorNumber()
    {
        return $this->familyDoctorNumber;
    }

    function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    function getFirstName()
    {
        return $this->firstName;
    }
    function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    function getLastName()
    {
        return $this->lastName;
    }
    function setAddress($address)
    {
        $this->address = $address;
    }
    function getAddress()
    {
        return $this->address;
    }
    function setGender($gender)
    {
        $this->gender = $gender;
    }
    function getGender()
    {
        return $this->gender;
    }
    function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    function setOccupation($Occupation)
    {
        $this->Occupation = $Occupation;
    }
    function getOccupation()
    {
        return $this->Occupation;
    }
    function setMedicalHistory($MedicalHistory)
    {
        $this->MedicalHistory = $MedicalHistory;
    }
    function getMedicalHistory()
    {
        return $this->MedicalHistory;
    }

}

?>