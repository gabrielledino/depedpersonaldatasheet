<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="resource/css/personal-information.css">


    <title>DepEd Personal Data Forms</title>
  </head>
  <body>

    
    <div class="container container-fluid">
      <form class="page1PersonalInformationProcess.php">
        <h2>PERSONAL INFORMATION</h2><br>
          <div class="row">
            <div class="col-3 mt-2">
              <label>Surname</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="surname" name="surname" placeholder="Enter your surname.">
            </div>
          </div>
            
          <div class="row">
            <div class="col-3 mt-2">
              <label>First Name</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="firstname" name="firstname" placeholder="Enter your first name.">
            </div>
          </div>
              
          <div class="row">
            <div class="col-3 mt-2">
              <label>Middle Name</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="middlename" name="middlename" placeholder="Enter your middle name.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Date of Birth</label>
            </div>
            <div class="col-9 mt-2">
              <input type="date" id="dateofbirth" name="date-of-birth">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Place of Birth</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="place-of-birth" name="place-of-birth" placeholder="Enter the place of your birth.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Gender</label>
            </div>
            <div class="col-9 mt-2">
              <label><input type="radio" name="gender-male" id="gender-male" value="Male">Male</label>

              <label><input type="radio" name="gender-female" id="gender-female" value="Female">Female</label>
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Civil Status</label>
            </div>
            <div class="col-5 mt-2">
              
              <label><input type="radio" name="civil-single" id="civil-single" value="single">Single</label>
              <label><input type="radio" name="civil-married" id="civil-married" value="married">Married</label>
              <label><input type="radio" name="civil-widowed" id="civil-widowed" value="widowed">Widowed</label>
              <label><input type="radio" name="civil-seperated" id="civil-seperated" value="seperated">Seperated</label>
            </div>
            <div class="col-2 mt-2">
                <label><input type="radio" name="civil-others" id="civil-others">Others:</label>
                <input type="text" id="civil-others" name="civil-others" placeholder="">
              </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Height (in meters)</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="height" name="height" placeholder="Enter your height in meters.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Weight (in kilograms)</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="weight" name="weight" placeholder="Enter your weight in kilograms.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Blood Type</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="blood-type" name="blood-type" placeholder="Enter your blood type.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>GSIS I.D. No.</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="gsis-id" name="gsis-id" placeholder="Enter your GSIS I.D. number.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Pag-Ibig I.D. No.</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="pag-ibig-id" name="pag-ibig-id" placeholder="Enter your Pag-ibig I.D. number.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Philhealth I.D. No.</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="philhealth-id" name="philhealth-id" placeholder="Enter your Philhealth I.D. number.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>SSS No.</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="sss-num" name="sss-num" placeholder="Enter your SSS number.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>TIN No.</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="tin-num" name="tin-num" placeholder="Enter your TIN number.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Agency Employee No.</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="agency-employee-num" name="agency-employee-num" placeholder="Enter your Agency Employee number.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Citizenship</label>
            </div>
            <div class="col-3 mt-2">
              <label><input type="radio" name="citizenship-filipino" id="citizenship-filipino" value="Filipino">Filipino</label>
              <label><input type="radio" name="citizenship-dual" id="citizenship-dual" value="Dual Citizenship">Dual Citizenship</label>
            </div>
            <div class="col-3 mt-2">
              <label><input type="radio" name="by-birth" id="by-birth" value="by-birth">By Birth</label>
              <label><input type="radio" name="by-naturalization" id="by-naturalization" value="by-naturalization">By Naturalization</label>
            </div>
            <div class="col-3 mt-2">
              <input type="text" id="indicate-country" name="indicate-country" placeholder="Indicate Country">
            </div>
          </div>

          <!-- RESIDENTIAL ADDRESS -->

          <div class="row">
            <div class="col mt-2">
              <label>Residential Address</label>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label>House / Block / Lot No.</label>
              <input type="text" id="residentialhouseblocklotno" name="residential-house-block-lot-no" placeholder="House / Block / Lot No.">
            </div>
            <div class="col">
              <label>Street</label>
              <input type="text" id="residentialstreet" name="residential-street" placeholder="Street">
            </div>
            <div class="col">
              <label>Subdivision / Village</label>
              <input type="text" id="residentialsubdivisionvillage" name="residential-subdivision-village" placeholder="Subdivision / Village">
            </div>
            <div class="col">
              <label>Barangay</label>
              <input type="text" id="residentialbrgy" name="residential-brgy" placeholder="Barangay">
            </div>
          </div>
          <div class="row">
            <div class="col mt-2">
              <label>City / Municipality</label>
              <input type="text" id="residentialcitymunicipality" name="residential-city-municipality" placeholder="City / Municipality">
            </div>
            <div class="col mt-2">
              <label>Province</label>
              <input type="text" id="residentialprovince" name="residential-province" placeholder="Province">
            </div>
            <div class="col mt-2">
              <label>Zip Code</label>
              <input type="text" id="residentialzipcode" name="residential-zip-code" placeholder="Zip Code">
            </div>
          </div>

          <!-- PERMANENT ADDRESS -->

          <div class="row">
            <div class="col mt-2"> 
              <label><input type="checkbox" id="samepermanentaddress" onclick="autoFillAddressInput()">Click if your residential address is the same as your permanent address.</label>
            </div>
          </div>
            
          <div class="row">
            <div class="col mt-2">
              <label>Permanent Address</label>
            </div>
          </div>
          <div class="row sizeGroup">
            <div class="col-3 mt-2">
              <label>House / Block / Lot No.</label>
              <input class="sizeTxt" type="text" id="permanenthouseblocklotno" name="permanent-house-block-lot-no" placeholder="House / Block / Lot No.">
            </div>
            <div class="col-3 mt-2">
              <label>Street</label>
              <input type="text" id="permanentstreet" name="permanent-street" placeholder="Street">
            </div>
            <div class="col-3 mt-2">
              <label>Subdivision / Village</label>
              <input type="text" id="permanentsubdivisionvillage" name="permanent-subdivision-village" placeholder="Subdivision / Village">
            </div>
            <div class="col-3 mt-2">
              <label>Barangay</label>
              <input type="text" id="permanentbrgy" name="permanentbrgy" placeholder="Barangay">
            </div>
            <div class="col-4 mt-2">
              <label>City / Municipality</label>
              <input type="text" id="permanentcitymunicipality" name="permanent-city-municipality" placeholder="City / Municipality">
            </div>
            <div class="col-4 mt-2">
              <label>Province</label>
              <input type="text" id="permanentprovince" name="permanent-province" placeholder="Province">
            </div>
            <div class="col-4 mt-2">
              <label>Zip Code</label>
              <input type="text" id="permanentzipcode" name="permanent-zip-code" placeholder="Zip Code">
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Telephone No.</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="telephone-no" name="telephone-no" placeholder="Enter your Telephone number.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>Cellphone No.</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="cellphone-no" name="cellphone-no" placeholder="Enter your Cellphone number.">
            </div>
          </div>

          <div class="row">
            <div class="col-3 mt-2">
              <label>E-mail Address</label>
            </div>
            <div class="col-9 mt-2">
              <input type="text" id="email-address" name="email-address" placeholder="Enter your e-mail address.">
            </div>
          </div>
            
          <div class="row">
            <div class="col mt-2">
              <input type="submit" value="Submit">
            </div>
          </div>
        
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <script type="text/javascript">

      function autoFillAddressInput() {
        let samepermanentaddress = document.getElementById('samepermanentaddress');

        let residentialhouseblocklotno = document.getElementById("residentialhouseblocklotno");
        let residentialstreet = document.getElementById("residentialstreet");
        let residentialsubdivisionvillage = document.getElementById("residentialsubdivisionvillage");
        let residentialbrgy = document.getElementById("residentialbrgy");
        let residentialcitymunicipality = document.getElementById("residentialcitymunicipality");
        let residentialprovince = document.getElementById("residentialprovince");
        let residentialzipcode = document.getElementById("residentialzipcode");
        
        let permanenthouseblocklotno = document.getElementById("permanenthouseblocklotno");
        let permanentstreet = document.getElementById("permanentstreet");
        let permanentsubdivisionvillage = document.getElementById("permanentsubdivisionvillage");
        let permanentbrgy = document.getElementById("permanentbrgy");
        let permanentcitymunicipality = document.getElementById("permanentcitymunicipality");
        let permanentprovince = document.getElementById("permanentprovince");
        let permanentzipcode = document.getElementById("permanentzipcode");
          
        if (samepermanentaddress.checked == true) {

        // document.getElementById("permanenthouseblocklotno").disabled = document.getElementById("samepermanentaddress").checked;
        // document.getElementById("permanentstreet").disabled = document.getElementById("samepermanentaddress").checked;
        // document.getElementById("permanentsubdivisionvillage").disabled = document.getElementById("samepermanentaddress").checked;
        // document.getElementById("permanentbrgy").disabled = document.getElementById("samepermanentaddress").checked;
        // document.getElementById("permanentcitymunicipality").disabled = document.getElementById("samepermanentaddress").checked;
        // document.getElementById("permanentprovince").disabled = document.getElementById("samepermanentaddress").checked;
        // document.getElementById("permanentzipcode").disabled = document.getElementById("samepermanentaddress").checked;
          
        let residentialhouseblocklotnoValue = residentialhouseblocklotno.value;
        let residentialstreetValue = residentialstreet.value;
        let residentialsubdivisionvillageValue = residentialsubdivisionvillage.value;
        let residentialbrgyValue = residentialbrgy.value;
        let residentialcitymunicipalityValue = residentialcitymunicipality.value;
        let residentialprovinceValue = residentialprovince.value;
        let residentialzipcodeValue = residentialzipcode.value;

        permanenthouseblocklotno.value = residentialhouseblocklotnoValue; 
        permanentstreet.value = residentialstreetValue; 
        permanentsubdivisionvillage.value = residentialsubdivisionvillageValue;   
        permanentbrgy.value = residentialbrgyValue;     
        permanentcitymunicipality.value = residentialcitymunicipalityValue;     
        permanentprovince.value = residentialprovinceValue;       
        permanentzipcode.value = residentialzipcodeValue;      
        
      } else {

        permanenthouseblocklotno.value = "";
        permanentstreet.value = ""; 
        permanentsubdivisionvillage.value = "";     
        permanentbrgy.value = "";     
        permanentcitymunicipality.value = "";         
        permanentprovince.value = "";       
        permanentzipcode.value = "";           
        }
      }
    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>