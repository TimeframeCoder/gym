<html>

<head>
    <link rel="stylesheet" href="css/registrationForm.css">

</head>

<body>
    <div class="panel panel-default add-new-user">
        <div class="panel-heading" id="ph">
            <h3>Add New Member</h3>
        </div>
        <form action="addNewUser.php" method="post">
            <div class="form-group clearfix">
                <div class="usr-label">
                    <label for="firstName">First Name</label><span>*</span>
                </div>
                <div class="usr-input">
                    <input type="text" class="form-control input-def" id="firstName" name="firstName"
                        placeholder="Enter First name">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label">
                    <label for="MiddleName">Middle Name</label><span>*</span>
                </div>
                <div class="usr-input">
                    <input type="text" class="form-control" id="middleName" name="middleName"
                        placeholder="Enter Last name">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label">
                    <label for="LastName">Last Name</label><span>*</span>
                </div>
                <div class="usr-input">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last name">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"> <label for="email">Email</label>
                </div>
                <div class="usr-input">
                    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"><label for="phoneNo">Phone no</label><span>*</span>
                </div>
                <div class="usr-input">
                    <input type="number" class="form-control" id="phoneNo" name="phoneNo"
                        placeholder="Enter phone number">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"><label for="occupation">Occupation</label>
                </div>
                <div class="usr-input">
                    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="occupation">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label">
                    <label for="dateOfBirth">Date of birth</label><span>*</span>
                </div>
                <div class="usr-input">
                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"><label for="address">Address</label>
                </div>
                <div class="usr-input">
                    <textarea rows="5" cols="50" class="form-control" id="address" name="address"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"><label for="medhistory">Medical History</label>
                </div>
                <div class="usr-input">
                    <textarea rows="5" cols="50" class="form-control" id="medhistory" name="medhistory"
                        placeholder="Enter Medical History if any"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div id="gender" name="gender" class="col-md-4">
                    <div class="usr-label">
                        <label for="radio">Gender</label><span>*</span>
                    </div>
                    <div class="panel-body">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="m" id="male">Male
                            </label>
                            <label>
                                <input type="radio" name="gender" value="f" id="female">Female
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"> <label for="emergencyContactName">Emergency Contact Name</label>
                </div>
                <div class="usr-input">
                    <input type="text" class="form-control" id="emergencyContactName" name="emergencyContactName"
                        placeholder="Emergency Contact Name">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"> <label for="emergencyContactNo">Emergency Phone no</label>
                </div>
                <div class="usr-input">
                    <input type="number" class="form-control" id="emergencyContactNo" name="emergencyContactNo">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"> <label for="familyDoctorName">Family Doctor Name</label>
                </div>
                <div class="usr-input">
                    <input type="text" class="form-control" id="familyDoctorName" name="familyDoctorName"
                        placeholder="Family Doctor Name">
                </div>
            </div>
            <div class="form-group">
                <div class="usr-label"><label for="familyDoctorNo">Family Doctor no</label>
                </div>
                <div class="usr-input">
                    <input type="number" class="form-control" id="familyDoctorNo" name="familyDoctorNo">
                </div>
            </div>
            <div class="form-group add-usr-submit">
                <button type="submit" class="btn btn-primary add-usr-submit-btn">Submit</button>
            </div>
        </form>
    </div>


</body>

</html>