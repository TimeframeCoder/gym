<?php
include_once('querystore.php');
include_once('bin/user.php');
class UserBizOperation
{
    public function setAddUserParam($stmt, $user)
    {
        $stmt->bind_param(
            "ssssssssssssss",
            $user->getFirstName(),
            $user->getLastName(),
            $user->getMiddleName(),
            $user->getPhoneNumber(),
            $user->getEmail(),
            $user->getOccupation(),
            $user->getDateOfBirth(),
            $user->getAddress(),
            $user->getMedicalHistory(),
            $user->getGender(),
            $user->getEmergencyContactName(),
            $user->getEmergencyContactNo(),
            $user->getFamilyDoctorName(),
            $user->getFamilyDoctorNumber()
        );
    }
    public function addUser($user)
    {
        try {
            $con = new mysqli(
                'localhost',
                'root',
                '',
                'gym'
            );
            $stmt = $con->prepare(Status::ADD_MEMBER->value);
            $this->setAddUserParam($stmt, $user);
            $stmt->execute();
            $stmt->close();
        } catch (mysqli_sql_exception $e) {
            var_dump($e);
            exit;
        }
        $con->close();
    }
}
?>