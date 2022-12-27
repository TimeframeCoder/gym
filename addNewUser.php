<?php
include_once('bin/user.php');
include_once('userBizOperation.php');
$user = new User();
$user->setFirstName($_POST['firstName']);
$user->setMiddleName($_POST['middleName']);
$user->setLastName($_POST['lastName']);
$user->setEmail($_POST['email']);
$user->setPhoneNumber($_POST['phoneNo']);
$user->setAddress($_POST['address']);
$user->setOccupation($_POST['occupation']);
$user->setDateOfBirth($_POST['dateOfBirth']);
$user->setMedicalHistory($_POST['medhistory']);
$user->setGender($_POST['gender']);
$user->setEmergencyContactName($_POST['emergencyContactName']);
$user->setEmergencyContactNo($_POST['emergencyContactNo']);
$user->setFamilyDoctorName($_POST['familyDoctorName']);
$user->setFamilyDoctorNumber($_POST['familyDoctorNo']);
$userBizOperation = new UserBizOperation();
$userBizOperation->addUser($user);
?>