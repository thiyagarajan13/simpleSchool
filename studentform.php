<html>
<head>
	<script src="bootstrap-4.0.0-beta.2/jquery/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
	<script src="bootstrap-4.0.0-beta.2/jquery/popper.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="bootstrap-4.0.0-beta.2/css/bootstrap.min.css">
	<script src="bootstrap-4.0.0-beta.2/js/bootstrap.min.js" type="text/javascript"></script>
	 <script src="bootstrap-4.0.0-beta.2/js/bootstrap.js" type="text/javascript"></script>
	 <link rel="stylesheet" href="form/assets/demo.css">
	<link rel="stylesheet" href="form/assets/form-basic.css">
	<script type="text/javascript">
    function auto_fill_address(){
     var same_addr = document.getElementById("same_residential_permanent").checked;
     var resaddr = document.getElementById("residential_address").value;
     if(same_addr){
      if((resaddr=='' || resaddr==null)){
       alert('please fill address');
       document.getElementById("same_residential_permanent").checked = false;
      }else{
       document.getElementById("permanent_address").value = resaddr;
      }
     }
     else
     {
      document.getElementById("permanent_address").value = '';
     }  
      }
   </script>

	</head>


	<body>

	 <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="POST" action="checkstudents.php">

            <div class="form-title-row">
                <h1>STUDENT INFORMATION</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Roll no</span>
                    <input type="text" name="rollno">
                </label>
            </div>
            <div class="form-row">
                <label><span>Gender</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="gender" value="1">
                            <span>Male</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="gender" value="2">
                            <span>Female</span>
                        </label>
                    </div>
                </div>
            </div>
             <div class="form-row">
                <label>
                    <span>Date of birth</span>
                    <input type="date" name="dob">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Blood group</span>
                    <input type="text" name="bloodgroup">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Class</span>
                    <input type="text" name="class">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Father name</span>
                    <input type="text" name="fathername">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Mother name</span>
                    <input type="text" name="mothername">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Father occupation</span>
                    <input type="text" name="fatheroccupation">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Mother occupation</span>
                    <input type="text" name="motheroccupation">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Mobile number</span>
                    <input type="number" name="mobno">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email">
                </label>
            </div>

             <div class="form-row">
                <label>
                    <span>Second language</span>
                    <select name="secondlanguage">
                        <option value="Hindi">Hindi</option>
                        <option value="Tamil">Tamil</option>
                    </select>
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Third language</span>
                    <select name="thirdlanguage">
                        <option value="Hindi">Hindi</option>
                        <option value="Tamil">Tamil</option>
                    </select>
                </label>
            </div>

            <div class="form-row">
                <label for="residential_address">
                    <span>Present Address</span>
                    <textarea  placeholder="Enter address" name="residential_address" id="residential_address"></textarea>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Address same as residential?</span>
                    <input type="checkbox" name="same_residential_permanent" id="same_residential_permanent" value="abcde" onclick="return auto_fill_address();">
                </label>
            </div>
            <div class="form-row">
                <label>
                    <span>Permanent Address</span>
                    <textarea placeholder="Enter  address" name="permanent_address" id="permanent_address"></textarea>
                </label>
            </div>

            

            <div class="form-row">
                <button type="submit" onclick="alert('Good work intelligent admin..!!student profile has been created')">Submit</button>
            </div>

        </form>

    </div>

</body>

</html>
