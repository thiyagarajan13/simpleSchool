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
 function ValidateEmail(inputText)
   {
   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(inputText.value.match(mailformat))
     {
       document.form1.text1.focus();
       return true;
     }
   else
     {
       alert("You have entered an invalid email address!");
       document.form1.text1.focus();
       return false;
     }
   }
    
    function validateform()
    {
      var x1=document.forms["stafform"]["name"].value;
      var x2=document.forms["stafform"]["staffid"].value;
      var x6=document.getElementById("gender").checked;
      var rad = document.forms[0];
      var i;
      for (i = 0; i < rad.length; i++) {
        if (rad[i].unchecked) {
            alert("gender must be filled");
        }
      var x3=document.forms["stafform"]["dob"].value;
      var x4=document.forms["stafform"]["bloodgroup"].value;
      var x5=document.forms["stafform"]["mobno"].value;
      var x7=document.forms["stafform"]["residential_address"].value;
      var x8=document.forms["stafform"]["education"].value;
      var x9=document.forms["stafform"]["experience"].value;
      var x10=document.forms["stafform"]["martial_status"].value;
      var x11=document.forms["stafform"]["email"].value;
      

      if (x1=="") {
        alert("name must be filled");
        return false;
      }
      if (x2=="") {
        alert("staffid must be filled");
        return false;
      }
      // if (x6) {
        //alert("gender must be filled");
        //return false;
      //}
     if (x3=="") {
        alert("date of birth must be filled");
        return false;
      }
      if (x4=="") {
        alert("bloodgroup must be filled");
        return false;
      }
      if (x5=="") {
        alert("mobile number must be filled");
        return false;
      }
      
       if (x7=="") {
        alert("residential address must be filled");
        return false;
      }
       if (x8=="") {
        alert("education must be filled");
        return false;
      }
       if (x9=="") {
        alert("experience must be filled");
        return false;
      }
       if (x10=="") {
        alert("martial status must be filled");
        return false;
      }
       if (x11=="") {
        alert("email must be filled");
        return false;
      }
    ValidateEmail(x11);
    }

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

        <form class="form-basic" method="post" action="checkstaff.php" name="stafform" onsubmit="return validateform()">

            <div class="form-title-row">
                <h1>STAFF INFORMATION</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name">
                </label>
            </div>
             <div class="form-row">
                <label>
                    <span>Staff id</span>
                    <input type="text" name="staffid">
                </label>
            </div>
            <div class="form-row">
                <label><span>Gender</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" id="gender" name="gender" value="male">
                            <span>Male</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" id="gender" name="gender" value="female">
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
                <label><span>Gender</span></label>
                <div class="form-radio-buttons">

                    <div>
                        <label>
                            <input type="radio" name="martial_status" value="married">
                            <span>Married</span>
                        </label>
                    </div>

                    <div>
                        <label>
                            <input type="radio" name="martial_status" value="unmarried">
                            <span>Unmarried</span>
                        </label>
                    </div>
                </div>
            </div>
             <div class="form-row">
                <label for="residential_address">
                    <span>education</span>
                    <textarea  placeholder="Enter your educational details" name="education" ></textarea>
                </label>
            </div>
             <div class="form-row">
                <label for="residential_address">
                    <span>experience</span>
                    <textarea  placeholder="Enter your experience" name="experience"></textarea>
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
                <button type="submit">Submit</button>
            </div>

        </form>

    </div>

</body>

</html>
