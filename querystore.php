<?php 
	enum Status: string{
		case ADD_MEMBER="INSERT INTO user (
			first_name, 
			middle_name,
			last_name,
			phone_number,
			email,
			occupation,
			dob,
			address,
			medical,
			gender,
			emergency_name,
			emergency_contact,
			family_doc_name,
			family_doc_num
			) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		case UPDATE_MEMBER='Update table co';
	}
 ?>