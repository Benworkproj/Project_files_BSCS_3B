<!-- Basic Information -->
<div class="row fst-italic g-3 position-relative">

    
    <div class="col-md-4">
        <input type="text" class="form-control " id="Number-of-Dependent(s)" placeholder=" Number of Dependent(s)" name="num_dependent">
        <label for="Number-of-Dependent(s)"> <span class="light-color"> Number of Dependent(s)
            </span></label>
    </div>
    <div class="col-sm-2 ">
        <input name="pay_date" type="date" class="form-control" id="PayDate" placeholder=" Pay Date ">
        <label for="PayDate">Date</label>
    </div>

    <div class="col-sm-2 text-sm-center img-thumbnail position-absolute top-0 end-0">
        <img src="<?= IMG_ASSETS_PATH ?>/default_profile_image.jpg" class="img-fluid" alt="employeeIdImage">
    </div>

</div>

<br>

<div class="row fst-italic g-3">
    <div class="col-sm-10 form-floating">
        <input name="f_name" type="text" class="form-control" id="FirstName" placeholder=" First Name
                                ">
        <label for="FirstName"> First Name </label>
    </div>

    <div class="col-sm-10 form-floating ">
        <input name="l_name" type="text" class="form-control " id="LastName" placeholder=" Last Name ">
        <label for="LastName"> Last Name </label>
    </div>
</div>

<br>

<div class="row row-cols-sm-2 g-3">
    <div class="col-md-4 form-floating">
        <!-- select option for civil status -->
        <select name="civil_status" class="form-select" id="CivilStatus" aria-label="Floating label select example">
            <option selected> Civil Status </option>
            <option value="single"> Single </option>
            <option value="married"> Married </option>
            <option value="widowed"> Widowed </option>
            <option value="separated"> Separated </option>
            <option value="divorced"> Divorced </option>
        </select>
    </div>

    <div class="col-md-4 form-floating">
        <!-- select option for employee status -->
        <select name="emp_status" class="form-select" id="EmployeeStatus" aria-label="Floating label select example">
            <option selected> Employee Status </option>
            <option value="regular"> Regular </option>
            <option value="contractual"> Contractual </option>
            <option value="probationary"> Probationary </option>
        </select>
    </div>

    <div class="col-md-4 form-floating">
        <input name="designation" type="text" class="form-control" id="Designation" placeholder=" Designation ">
        <label for="Designation"> Designation </label>
    </div>

    <div class="col-md-4 form-floating">
        <input name="department" type="text" class="form-control" id="Department" placeholder=" Department ">
        <label for="Department"> Department </label>
    </div>
</div>