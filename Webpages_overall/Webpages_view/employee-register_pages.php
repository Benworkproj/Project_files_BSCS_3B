<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webpages_database";

//create connection
$connection = new mysqli($servername, $username, $password, $database);

//Personal Info
$employee_number = "";
$first_name = "";
$middle_name = "";
$surname = "";
$suffix = "";
$date_birth = "";
$gender = "";
$nationality = "";
$civil_status = "";
$department = "";
$designation = "";
$qual_dept_status = "";
$employee_status = "";
$paydate = "";
$contact_number = "";
$email = "";
$other = "";
$social_acc = "";
$address1 = "";
$address2 = "";
$city_muni = "";
$state_pro = "";
$country = "";
$zip_code = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $employee_number = $_POST["employee_number"];
  $first_name = $_POST["first_name"];
  $middle_name = $_POST["middle_name"];
  $surname = $_POST["surname"];
  $suffix = $_POST["suffix"];
  $date_birth = $_POST["date_birth"];
  $gender = $_POST["gender"];
  $nationality = $_POST["nationality"];
  $civil_status = $_POST["civil_status"];
  $department = $_POST["department"];
  $designation = $_POST["designation"];
  $qual_dept_status = $_POST["qual_dept_status"];
  $employee_status = $_POST["employee_status"];
  $paydate = $_POST["paydate"];
  $contact_number = $_POST["contact_number"];
  $email = $_POST["email"];
  $other = $_POST["other"];
  $social_acc = $_POST["social_acc"];
  $address1 = $_POST["address1"];
  $address2 = $_POST["address2"];
  $city_muni = $_POST["city_muni"];
  $state_pro = $_POST["state_pro"];
  $country = $_POST["country"];
  $zip_code = $_POST["zip_code"];

  do {
    if (empty($employee_number) || empty($first_name) || empty($middle_name) || empty($surname) || empty($suffix) || empty($date_birth) || empty($gender) || empty($nationality) || empty($civil_status) || empty($department) || empty($designation) || empty($qual_dept_status) || empty($employee_status) || empty($paydate) || empty($contact_number) || empty($email) || empty($other) || empty($social_acc) || empty($address1) || empty($address2) || empty($city_muni) || empty($state_pro) || empty($country) || empty($zip_code)) {
      $errorMessage = "All the fields are required";
      break;
    }

    //add new registered to database
    $sql = "INSERT INTO newemployee_register (employee_number, first_name, middle_name, surname, suffix, date_birth, gender, nationality, civil_status, department, designation, qual_dept_status, employee_status, paydate, contact_number, email, other, social_acc, address1, address2, city_muni, state_pro, country, zip_code) " .
    "VALUES ('$employee_number','$first_name','$middle_name','$surname','$suffix','$date_birth','$gender','$nationality','$civil_status','$department','$designation','$qual_dept_status','$employee_status','$paydate','$contact_number','$email','$other','$social_acc','$address1','$address2','$city_muni','$state_pro','$country','$zip_code')";
    $result = $connection->query($sql);

    if (!$result) {
      $errorMessage = "Invalid Query: ".$connection->error;
      break;
    }

    //Personal Info
    $employee_number = "";
    $first_name = "";
    $middle_name = "";
    $surname = "";
    $suffix = "";
    $date_birth = "";
    $gender = "";
    $nationality = "";
    $civil_status = "";
    $department = "";
    $designation = "";
    $qual_dept_status = "";
    $employee_status = "";
    $paydate = "";

    //Contact info
    $contact_number = "";
    $email = "";
    $other = "";
    $social_acc = "";

    //Address
    $address1 = "";
    $address2 = "";
    $city_muni = "";
    $state_pro = "";
    $country = "";
    $zip_code = "";

    $successMessage = "Successfully Added New Employee Info";
  } while (false);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Employee</title>

  <!---CSS: Bootstrap link CDN--->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
  <!---JS: Bootstrap link CDN--->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--- CSS --->
  <link rel="stylesheet" href="/Webpages_overall/panel.css">
  <link rel="stylesheet" href="/Webpages_overall/Assets/CSS/newemployee_style.css">
</head>
<body>
  
    <div class="menu-bar">
    <ul>
      <li class="active"><i class='bx bx-home-smile'></i><a href="#">Home</a></li>
      <li><i class='bx bx-list-check'></i><a href="#">Employee</a>
        <div class="sub-menu-1">
          <ul>
            <li><a href="#">Employee Form</a></li>
            <li><a href="#">Employee List</a></li>
          </ul>
        </div>  
      </li>
      <li><i class='bx bx-money-withdraw'></i><a href="#">Payroll</a>
        <div class="sub-menu-2">
          <ul>
            <li><a href="#">Pay Report</a></li>
          </ul>
        </div>
      </li>
      <li><i class='bx bx-calculator'></i><a href="#">POS-A</a>
        <div class="sub-menu-3">
          <ul>
            <li><a href="#">Cashier 1</a></li>
            <li><a href="#">Sales of POS-A</a></li>
          </ul>
        </div>
      </li>
      <li><i class='bx bx-calculator'></i><a href="#">POS-B</a>
        <div class="sub-menu-4">
          <ul>
            <li><a href="#">Cashier 2</a></li>
            <li><a href="#">Sales of POS-B</a></li>
          </ul>
        </div>
      </li>
      <li class="active"><i class='bx bx-log-out'></i><a href="#">Log Out</a></li>
    </ul>
  </div>
  
  <br><br><br>
  
  <div class="container">
    <header>Registration For New Employee</header>

   <?php
    if (!empty($errorMessage)) {
      echo"
			<div class='alert alert-warning alert-dismissible fade show' role='alert'>
				<strong>$errorMessage</strong>
				<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
			</div>
		";
    }
    ?>
    
    <?php
    if(!empty($successMessage)) {
        echo"
			<div class='row mb-3'>
				<div class='offset-sm-3 col-sm-6'>
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>$successMessage</strong>
						<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
					</div>
				</div>
			</div>
			";
    }
    ?>
    <form action="employee-register_pages.php" method="post">
      <div class="form-first">
        <div class="personal-info">
          <span class="title">Personal Details</span>

          <div class="fields">
            <div class="input-field">
              <label for="first_name">First Name:</label>
              <input type="text" name="first_name" id="first_name" required>
            </div>

            <div class="input-field">
              <label for="middle_name">Middle Name:</label>
              <input type="text" name="middle_name" id="middle_name" required>
            </div>

            <div class="input-field">
              <label for="surname">Surame:</label>
              <input type="text" name="surname" id="surname" required>
            </div>

            <div class="input-field">
              <label for="suffix" class="mb-0 control-label">Suffix:</label>
              <select id="suffix" name="suffix" required>
                <option value=""></option>
                <option value="Sr.">Sr.</option>
                <option value="Jr.">Jr.</option>
                <option value="I">I.</option>
                <option value="II">II.</option>
                <option value="III">III.</option>
                <option value="None">None</option>
              </select>
            </div>
          </div>

          <div class="fields">
            <div class="input-field">
              <label for="date_birth">Date of birth:</label>
              <input type="date" name="date_birth" id="date_birth" required>
            </div>

            <div class="input-field">
              <label for="gender" class="mb-0 control-label">Gender:</label>
                <select id="gender" name="gender" required>
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

            <div class="input-field">
              <label for="nationality" class="mb-0 control-label">Nationality:</label>
              <select id="nationality" name="nationality" required>
                <option value=""></option>
                <option value="Afghan">Afghan</option>
                <option value="Albanian">Albanian</option>
                <option value="Algerian">Algerian</option>
                <option value="American">American</option>
                <option value="Andorran">Andorran</option>
                <option value="Angolan">Angolan</option>
                <option value="Anguillan">Anguillan</option>
                <option value="Citizen Of Antigua And Aarbuda">Citizen of Antigua and Barbuda</option>
                <option value="Argentine">Argentine</option>
                <option value="Armenianaustralian">ArmenianAustralian</option>
                <option value="Austrian">Austrian</option>
                <option value="Azerbaijani">Azerbaijani</option>
                <option value="Bahamian">Bahamian</option>
                <option value="Bahraini">Bahraini</option>
                <option value="Bangladeshi">Bangladeshi</option>
                <option value="Barbadian">Barbadian</option>
                <option value="Belarusian">Belarusian</option>
                <option value="Belgian">Belgian</option>
                <option value="Belizean">Belizean</option>
                <option value="Beninese">Beninese</option>
                <option value="Bermudian">Bermudian</option>
                <option value="Bhutanese">Bhutanese</option>
                <option value="Bolivian">Bolivian</option>
                <option value="Citizen Of Bosnia And Herzegovina">Citizen of Bosnia and Herzegovina</option>
                <option value="Botswanan">Botswanan</option>
                <option value="Brazilian">Brazilian</option>
                <option value="British">British</option>
                <option value="British-virgin-islander">British Virgin Islander</option>
                <option value="Bruneian">Bruneian</option>
                <option value="Bulgarian">Bulgarian</option>
                <option value="Burkinan">Burkinan</option>
                <option value="Burmese">Burmese</option>
                <option value="Burundian">Burundian</option>
                <option value="Cambodian">Cambodian</option>
                <option value="Cameroonian">Cameroonian</option>
                <option value="Canadian">Canadian</option>
                <option value="Cape-verdean">Cape Verdean</option>
                <option value="Cayman-islander">Cayman Islander</option>
                <option value="Centralafrican">Central African</option>
                <option value="Chadian">Chadian</option>
                <option value="Chilean">Chilean</option>
                <option value="Chinese">Chinese</option>
                <option value="Colombian">Colombian</option>
                <option value="Comoran">Comoran</option>
                <option value="Congolese-(congo)">Congolese (Congo)</option>
                <option value="Congolese-(drc)">Congolese (DRC)</option>
                <option value="Cook-islander">Cook Islander</option>
                <option value="Costa-rican">Costa Rican</option>
                <option value="Croatian">Croatian</option>
                <option value="Cuban">Cuban</option>
                <option value="Cymraes">Cymraes</option>
                <option value="Cymro">Cymro</option>
                <option value="Cypriot">Cypriot</option>
                <option value="Czech">Czech</option>
                <option value="Danish">Danish</option>
              <option value="Djiboutian">Djiboutian</option>
              <option value="Dominican">Dominican</option>
              <option value="Citizen Of The Dominican Republic">Citizen of the Dominican Republic</option>
              <option value="Dutch">Dutch</option>
              <option value="Cast-timorese">East Timorese</option>
              <option value="Ccuadorean">Ecuadorean</option>
              <option value="Cgyptian">Egyptian</option>
              <option value="Cmirati">Emirati</option>
              <option value="Cnglish">English</option>
              <option value="Cquatorial-guinean">Equatorial Guinean</option>
              <option value="Critrean">Eritrean</option>
              <option value="Cstonian">Estonian</option>
              <option value="Cthiopian">Ethiopian</option>
              <option value="Faroese">Faroese</option>
              <option value="Fijian">Fijian</option>
              <option value="Filipino">Filipino</option>
              <option value="Finnish">Finnish</option>
              <option value="French">French</option>
              <option value="Gabonese">Gabonese</option>
              <option value="Gambian">Gambian</option>
              <option value="Georgian">Georgian</option>
              <option value="German">German</option>
              <option value="Ghanaian">Ghanaian</option>
              <option value="Gibraltarian">Gibraltarian</option>
              <option value="Greek">Greek</option>
              <option value="Greenlandic">Greenlandic</option>
              <option value="Grenadian">Grenadian</option>
              <option value="Guamanian">Guamanian</option>
              <option value="Guatemalan">Guatemalan</option>
              <option value="Citizen Of Guinea Bissau">Citizen of Guinea-Bissau</option>
              <option value="Guinean">Guinean</option>
              <option value="Guyanese">Guyanese</option>
              <option value="Haitian">Haitian</option>
              <option value="Honduran">Honduran</option>
              <option value="Hong-konger">Hong Konger</option>
              <option value="Hungarian">Hungarian</option>
              <option value="Icelandic">Icelandic</option>
              <option value="Indian">Indian</option>
              <option value="Indonesian">Indonesian</option>
              <option value="Iranian">Iranian</option>
              <option value="Iraqi">Iraqi</option>
              <option value="Irish">Irish</option>
              <option value="Israeli">Israeli</option>
              <option value="Italian">Italian</option>
              <option value="Ivorian">Ivorian</option>
              <option value="Jamaican">Jamaican</option>
              <option value="Japanese">Japanese</option>
              <option value="Jordanian">Jordanian</option>
              <option value="Kazakh">Kazakh</option>
              <option value="Kenyan">Kenyan</option>
              <option value="Kittitian">Kittitian</option>
              <option value="Citizen Of Liribati">Citizen of Kiribati</option>
              <option value="Kosovan">Kosovan</option>
              <option value="Kuwaiti">Kuwaiti</option>
              <option value="Kyrgyz">Kyrgyz</option>
              <option value="Lao">Lao</option>
              <option value="Latvian">Latvian</option>
              <option value="Lebanese">Lebanese</option>
              <option value="Liberian">Liberian</option>
              <option value="Libyan">Libyan</option>
              <option value="Liechtenstein-citizen">Liechtenstein citizen</option>
              <option value="Lithuanian">Lithuanian</option>
              <option value="Luxembourger">Luxembourger</option>
              <option value="Macanese">Macanese</option>
              <option value="Macedonian">Macedonian</option>
              <option value="Malagasy">Malagasy</option>
              <option value="Malawian">Malawian</option>
              <option value="Malaysian">Malaysian</option>
              <option value="Maldivian">Maldivian</option>
              <option value="Malian">Malian</option>
              <option value="Maltese">Maltese</option>
              <option value="Marshallese">Marshallese</option>
              <option value="Martiniquais">Martiniquais</option>
              <option value="Mauritanian">Mauritanian</option>
              <option value="Mauritian">Mauritian</option>
              <option value="Mexican">Mexican</option>
              <option value="Micronesian">Micronesian</option>
              <option value="Moldovan">Moldovan</option>
              <option value="Monegasque">Monegasque</option>
              <option value="Mongolian">Mongolian</option>
              <option value="Montenegrin">Montenegrin</option>
              <option value="Montserratian">Montserratian</option>
              <option value="Moroccan">Moroccan</option>
              <option value="Mosotho">Mosotho</option>
              <option value="Mozambican">Mozambican</option>
              <option value="Namibian">Namibian</option>
              <option value="Nauruan">Nauruan</option>
              <option value="Nepalese">Nepalese</option>
              <option value="New-Zealander">New Zealander</option>
              <option value="Nicaraguan">Nicaraguan</option>
              <option value="Nigerian">Nigerian</option>
              <option value="Nigerien">Nigerien</option>
              <option value="Niuean">Niuean</option>
              <option value="North-Korean">North Korean</option>
              <option value="Northern-Irish">Northern Irish</option>
              <option value="Norwegian">Norwegian</option>
              <option value="Omani">Omani</option>
              <option value="Pakistani">Pakistani</option>
              <option value="Palauan">Palauan</option>
              <option value="Palestinian">Palestinian</option>
              <option value="Panamanian">Panamanian</option>
              <option value="Papua-new-guinean">Papua New Guinean</option>
              <option value="Paraguayan">AParaguayan</option>
              <option value="Peruvian">Peruvian</option>
              <option value="Pitcairn-islander">Pitcairn Islander</option>
              <option value="Polish">Polish</option>
              <option value="Portuguese">Portuguese</option>
              <option value="Prydeinig">Prydeinig</option>
              <option value="Puerto-rican">Puerto Rican</option>
              <option value="Qatari">Qatari</option>
              <option value="Romanian">Romanian</option>
              <option value="Russian">Russian</option>
              <option value="Rwandan">Rwandan</option>
              <option value="Salvadorean">Salvadorean</option>
              <option value="Sammarinese">Sammarinese</option>
              <option value="Samoan">Samoan</option>
              <option value="Sao-tomean">Sao Tomean</option>
              <option value="Saudi-arabian">Saudi Arabian</option>
              <option value="Scottish">Scottish</option>
              <option value="Senegalese">Senegalese</option>
              <option value="Serbian">Serbian</option>
              <option value="Titizen Of Seychelles">Citizen of Seychelles</option>
              <option value="Sierra Leonean">Sierra Leonean</option>
              <option value="Singaporean">Singaporean</option>
              <option value="Slovak">Slovak</option>
              <option value="Slovenian">Slovenian</option>
              <option value="SolomonIslander">Solomon Islander</option>
              <option value="Somali">Somali</option>
              <option value="South African">South African</option>
              <option value="South Korean">South Korean</option>
              <option value="South Sudanese">South Sudanese</option>
              <option value="Spanish">Spanish</option>
              <option value="Sri Lankan">Sri Lankan</option>
              <option value="St. Helenian">St Helenian</option>
              <option value="St. Lucian">St Lucian</option>
              <option value="Stateless">Stateless</option>
              <option value="Sudanese">Sudanese</option>
              <option value="Surinamese">Surinamese</option>
              <option value="Swazi">Swazi</option>
              <option value="Swedish">Swedish</option>
              <option value="Swiss">Swiss</option>
              <option value="Syrian">Syrian</option>
              <option value="Taiwanese">Taiwanese</option>
              <option value="Tajik">Tajik</option>
              <option value="Tanzanian">Tanzanian</option>
              <option value="Thai">Thai</option>
              <option value="Togolese">Togolese</option>
              <option value="Tongan">Tongan</option>
              <option value="Trinidadian">Trinidadian</option>
              <option value="Tristanian">Tristanian</option>
              <option value="Tunisian">Tunisian</option>
              <option value="Turkish">Turkish</option>
              <option value="Turkmen">Turkmen</option>
              <option value="Turks And Caicos Uslander">Turks and Caicos Islander</option>
              <option value="Tuvaluan">Tuvaluan</option>
              <option value="Ugandan">Ugandan</option>
              <option value="Ukrainian">Ukrainian</option>
              <option value="Uruguayan">Uruguayan</option>
              <option value="Uzbek">Uzbek</option>
              <option value="Vatican Citizen">Vatican citizen</option>
              <option value="Citizen Of Vanuatu">Citizen of Vanuatu</option>
              <option value="Venezuelan">Venezuelan</option>
              <option value="Vietnamese">Vietnamese</option>
              <option value="Vincentian">Vincentian</option>
              <option value="Wllisian">Wallisian</option>
              <option value="Welsh">Welsh</option>
              <option value="Yemeni">Yemeni</option>
              <option value="zambian">Zambian</option>
              <option value="zimbabwean">Zimbabwean</option>
              </select>
            </div>

            <div class="input-field">
              <label for="civil_status" class="mb-0 control-label">Civil Status:</label>
                <select id="civil_status" name="civil_status" required>
                <option value=""></option>
                <option value="Married">Married</option>
                <option value="Widowed">Widowed</option>
                <option value="Separated">Separated</option>
                <option value="Divorced">Divorced</option>
                <option value="Single">Single</option>
              </select>
            </div>
          </div>

          <div class="fields">
            <div class="input-field1">
              <label for="first_name">Department:</label>
              <input type="text" name="department" id="department" required>
            </div>

            <div class="input-field1">
              <label for="middle_name">Designation:</label>
              <input type="text" name="designation" id="designation" required>
            </div>

            <div class="input-field1">
              <label for="qual_dept_status" class="mb-0 control-label">Qualified Dept. Status:</label>
              <select name="qual_dept_status" id="qual_dept_status" required>
                <option value=""></option>
                <option value="Z or Single">Z or Single</option>
                <option value="S or Me">S or M</option>
                <option value="S1 or Me1">S1 or M1</option>
                <option value="S2 or Me2">S2 or M2</option>
                <option value="S3 or Me3">S3 or M3</option>
                <option value="S4 or Me4">S4 or M4</option>
              </select>
            </div>
          </div>

          <div class="fields">
            <div class="input-field1">
              <label for="first_name">Employee Status:</label>
              <input type="text" name="employee_status" id="employee_status" required>
            </div>

            <div class="input-field1">
              <label for="paydate">Pay date:</label>
              <input type="date" name="paydate" id="paydate" required>
            </div>

            <div class="input-field1">
              <label for="employee_number">Employee Number:</label>
              <input type="number" name="employee_number" id="employee_number" required>
            </div>
          </div>
        </div>
      </div>

      <div class="form-first">
        <div class="contact-info">
          <span class="title">Contact Details</span>
          <div class="fields">
            <div class="input-field2">
              <label for="contact_number">Contact No:</label>
              <input type="number" name="contact_number" id="contact_number" required>
            </div>

            <div class="input-field2">
              <label for="email">Email:</label>
              <input type="text" name="email" id="email" required>
            </div>
          </div>

          <div class="fields">
            <div class="input-field2">
              <label for="other">Other Account:</label>
               <select id="other" name="other" required>
                <option value=""></option>
                <option value="Facebook">Facebook</option>
                <option value="Onstagram">Instagram</option>
                <option value="Ywitter">Twitter</option>
                <option value="Whatsapp">Whatsapp</option>
                <option value="WeChat">WeChat</option>
                <option value="Telegram">Telegram</option>
                <option value="SnapChat">SnapChat</option>
                <option value="Other">other</option>
              </select>
            </div>

            <div class="input-field2">
              <label for="social_acc">Account ID/No:</label>
              <input type="text" name="social_acc" id="social_acc" required>
            </div>
          </div>
        </div>
      </div>

      <div class="form-first">
        <div class="address">
          <span class="title">Address</span>

          <div class="fields">
            <div class="input-field3">
              <label for="address1">Address Line 1:</label>
              <input type="text" name="address1" id="address1" required>
            </div>

            <div class="input-field3">
              <label for="address2">Address Line 2:</label>
              <input type="text" name="address2" id="address2" required>
            </div>

            <div class="input-field3">
              <label for="city_muni">City/Municipality:</label>
              <input type="text" name="city_muni" id="city_muni" required>
            </div>
          </div>

          <div class="fields">
            <div class="input-field3">
              <label for="state_pro">State/Province:</label>
              <input type="text" name="state_pro" id="state_pro" required>
            </div>

            <div class="input-field3">
              <label for="country">Country:</label>
              <select type="text" id="country" name="country" required>
                <option value=""></option>
                <option value="" disabled>A</option>
                <option value="AF">Afghanistan</option>
                <option value="AX">Aland Islands</option>
                <option value="AL">Albania</option>
                <option value="DZ">Algeria</option>
                <option value="AS">American Samoa</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctica</option>
                <option value="AG">Antigua and Barbuda</option>
                <option value="AR">Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaijan</option>
                <option value="" disabled>B</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrain</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BY">Belarus</option>
                <option value="BE">Belgium</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermuda</option>
                <option value="BT">Bhutan</option>
                <option value="BO">Bolivia</option>
                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                <option value="BA">Bosnia and Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet Island</option>
                <option value="BR">Brazil</option>
                <option value="IO">British Indian Ocean Territory</option>
                <option value="BN">Brunei Darussalam</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="" disabled>C</option>
                <option value="KH">Cambodia</option>
                <option value="CM">Cameroon</option>
                <option value="CA">Canada</option>
                <option value="CV">Cape Verde</option>
                <option value="KY">Cayman Islands</option>
                <option value="CF">Central African Republic</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CX">Christmas Island</option>
                <option value="CC">Cocos (Keeling) Islands</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comoros</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, Democratic Republic of the Congo</option>
                <option value="CK">Cook Islands</option>
                <option value="CR">Costa Rica</option>
                <option value="CI">Cote D'Ivoire</option>
                <option value="HR">Croatia</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curacao</option>
                <option value="CY">Cyprus</option>
                <option value="CZ">Czech Republic</option>
                <option value="" disabled>D</option>
                <option value="DK">Denmark</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="DO">Dominican Republic</option>
                <option value="" disabled>E</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egypt</option>
                <option value="SV">El Salvador</option>
                <option value="GQ">Equatorial Guinea</option>
                <option value="ER">Eritrea</option>
                <option value="EE">Estonia</option>
                <option value="ET">Ethiopia</option>
                <option value="" disabled>F</option>
                <option value="FK">Falkland Islands (Malvinas)</option>
                <option value="FO">Faroe Islands</option>
                <option value="FJ">Fiji</option>
                <option value="FI">Finland</option>
                <option value="FR">France</option>
                <option value="GF">French Guiana</option>
                <option value="PF">French Polynesia</option>
                <option value="TF">French Southern Territories</option>
                <option value="" disabled>G</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="DE">Germany</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Greece</option>
                <option value="GL">Greenland</option>
                <option value="GD">Grenada</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernsey</option>
                <option value="GN">Guinea</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="GY">Guyana</option>
                <option value="" disabled>H</option>
                <option value="HT">Haiti</option>
                <option value="HM">Heard Island and Mcdonald Islands</option>
                <option value="VA">Holy See (Vatican City State)</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong Kong</option>
                <option value="HU">Hungary</option>
                <option value="" disabled>I</option>
                <option value="IS">Iceland</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IR">Iran, Islamic Republic of</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Ireland</option>
                <option value="IM">Isle of Man</option>
                <option value="IL">Israel</option>
                <option value="IT">Italy</option>
                <option value="" disabled>J</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japan</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordan</option>
                <option value="" disabled>K</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KI">Kiribati</option>
                <option value="KP">Korea, Democratic People's Republic of</option>
                <option value="KR">Korea, Republic of</option>
                <option value="XK">Kosovo</option>
                <option value="KW">Kuwait</option>
                <option value="KG">Kyrgyzstan</option>
                <option value="" disabled>L</option>
                <option value="LA">Lao People's Democratic Republic</option>
                <option value="LV">Latvia</option>
                <option value="LB">Lebanon</option>
                <option value="LS">Lesotho</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libyan Arab Jamahiriya</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lithuania</option>
                <option value="LU">Luxembourg</option>
                <option value="" disabled>M</option>
                <option value="MO">Macao</option>
                <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                <option value="MG">Madagascar</option>
                <option value="MW">Malawi</option>
                <option value="MY">Malaysia</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malta</option>
                <option value="MH">Marshall Islands</option>
                <option value="MQ">Martinique</option>
                <option value="MR">Mauritania</option>
                <option value="MU">Mauritius</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexico</option>
                <option value="FM">Micronesia, Federated States of</option>
                <option value="MD">Moldova, Republic of</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolia</option>
                <option value="ME">Montenegro</option>
                <option value="MS">Montserrat</option>
                <option value="MA">Morocco</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="" disabled>N</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NL">Netherlands</option>
                <option value="AN">Netherlands Antilles</option>
                <option value="NC">New Caledonia</option>
                <option value="NZ">New Zealand</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk Island</option>
                <option value="MP">Northern Mariana Islands</option>
                <option value="NO">Norway</option>
                <option value="" disabled>O</option>
                <option value="OM">Oman</option>
                <option value="" disabled>P</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palau</option>
                <option value="PS">Palestinian Territory, Occupied</option>
                <option value="PA">Panama</option>
                <option value="PG">Papua New Guinea</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Peru</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Poland</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="" disabled>Q</option>
                <option value="QA">Qatar</option>
                <option value="" disabled>R</option>
                <option value="RE">Reunion</option>
                <option value="RO">Romania</option>
                <option value="RU">Russian Federation</option>
                <option value="RW">Rwanda</option>
                <option value="" disabled>S</option>
                <option value="BL">Saint Barthelemy</option>
                <option value="SH">Saint Helena</option>
                <option value="KN">Saint Kitts and Nevis</option>
                <option value="LC">Saint Lucia</option>
                <option value="MF">Saint Martin</option>
                <option value="PM">Saint Pierre and Miquelon</option>
                <option value="VC">Saint Vincent and the Grenadines</option>
                <option value="WS">Samoa</option>
                <option value="SM">San Marino</option>
                <option value="ST">Sao Tome and Principe</option>
                <option value="SA">Saudi Arabia</option>
                <option value="SN">Senegal</option>
                <option value="RS">Serbia</option>
                <option value="CS">Serbia and Montenegro</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leone</option>
                <option value="SG">Singapore</option>
                <option value="SX">Sint Maarten</option>
                <option value="SK">Slovakia</option>
                <option value="SI">Slovenia</option>
                <option value="SB">Solomon Islands</option>
                <option value="SO">Somalia</option>
                <option value="ZA">South Africa</option>
                <option value="GS">South Georgia and the South Sandwich Islands</option>
                <option value="SS">South Sudan</option>
                <option value="ES">Spain</option>
                <option value="LK">Sri Lanka</option>
                <option value="SD">Sudan</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard and Jan Mayen</option>
                <option value="SZ">Swaziland</option>
                <option value="SE">Sweden</option>
                <option value="CH">Switzerland</option>
                <option value="SY">Syrian Arab Republic</option>
                <option value="" disabled>S</option>
                <option value="TW">Taiwan, Province of China</option>
                <option value="TJ">Tajikistan</option>
                <option value="TZ">Tanzania, United Republic of</option>
                <option value="TH">Thailand</option>
                <option value="TL">Timor-Leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad and Tobago</option>
                <option value="TN">Tunisia</option>
                <option value="TR">Turkey</option>
                <option value="TM">Turkmenistan</option>
                <option value="TC">Turks and Caicos Islands</option>
                <option value="TV">Tuvalu</option>
                <option value="" disabled>U</option>
                <option value="UG">Uganda</option>
                <option value="UA">Ukraine</option>
                <option value="AE">United Arab Emirates</option>
                <option value="GB">United Kingdom</option>
                <option value="US">United States</option>
                <option value="UM">United States Minor Outlying Islands</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistan</option>
                <option value="" disabled>V</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Viet Nam</option>
                <option value="VG">Virgin Islands, British</option>
                <option value="VI">Virgin Islands, U.s.</option>
                <option value="" disabled>W</option>
                <option value="WF">Wallis and Futuna</option>
                <option value="EH">Western Sahara</option>
                <option value="" disabled>Y</option>
                <option value="YE">Yemen</option>
                <option value="" disabled>Z</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabwe</option>
              </select>
            </div>

            <div class="input-field3">
              <label for="zip_code">Zip Code:</label>
              <input type="number" name="zip_code" id="zip_code" required>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="row mb-3">
        <div class="col-sm-2 d-grid">
          <button type="submit" name="saveBtn" class="btn btn-primary">Save</button>
        </div>

        <div class="col-sm-2 d-grid">
          <button type="reset" class="btn btn-outline-secondary" name="cancelBtn">Cancel</button>
        </div>
      </div>
    </div>
  </form>
</div>
</body>
</html>