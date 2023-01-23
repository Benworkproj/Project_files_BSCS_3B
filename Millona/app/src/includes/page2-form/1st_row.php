<!-- Basic Information -->
<div class="row fst-italic g-3 position-relative">

    <div class="form-group col-md-4">
        <label for="employee_id">Employee ID</label>
        <input type="text" name="employee_id" id="employee_id" class="form-control" placeholder="This will be automatically generated" value="<?= $data['employee_id'] ?? '' ?>" readonly>
    </div>
    <div class="col-md-4">
        <label for="Number-of-Dependent(s)">
            <span class="light-color">
                Number of Dependent(s)
            </span>
        </label>
        <input type="number" class="form-control " id="Number-of-Dependent(s)" placeholder="Number of people in your family" name="num_dependent" value="<?= $data['num_dependent'] ?? '' ?>">
    </div>
    <div class="col-sm-2 ">
        <label for="PayDate">Date</label>
        <input name="pay_date" type="date" class="form-control" id="PayDate" placeholder=" Pay Date " value="<?= $data['pay_date'] ?? '' ?>">
    </div>

    <div class="col-sm-2 col-md-2 text-sm-center img-thumbnail position-absolute top-0 end-0">
        <img src="<?= IMG_ASSETS_PATH ?>/default_profile_image.jpg" class="img-fluid" alt="employeeIdImage">
    </div>

</div>

<br>

<div class="row fst-italic g-3">
    <div class="col-sm-10 col-md-5 form-floating">
        <input name="f_name" type="text" class="form-control" id="FirstName" placeholder=" First Name" value="<?= $data['f_name'] ?? '' ?>">
        <label for="FirstName"> First Name </label>
    </div>

    <div class="col-sm-10  col-md-5  form-floating ">
        <input name="l_name" type="text" class="form-control " id="LastName" placeholder=" Last Name " value="<?= $data['l_name'] ?? '' ?>">
        <label for="LastName"> Last Name </label>
    </div>
</div>

<br>

<div class="row row-cols-sm-2 row-cols-md-4 g-3">
    <div class="col">
        <!-- select option for civil status -->
        <select name="civil_status" class="form-select" id="CivilStatus" aria-label="Floating label select example">
            <option value="<?= $data['civil_status'] ?>" selected>
                <?= ucfirst($data['civil_status']) ?>
            </option>
            <option value="single"> Single </option>
            <option value="married"> Married </option>
            <option value="widowed"> Widowed </option>
            <option value="separated"> Separated </option>
            <option value="divorced"> Divorced </option>
        </select>
    </div>

    <div class="col">
        <!-- select option for employee status -->
        <select name="emp_status" class="form-select" id="EmployeeStatus" aria-label="Floating label select example">
            <option value="<?= $data['emp_status'] ?? '' ?>" selected>
                <?= ucfirst($data['emp_status']) ?? '' ?>
            </option>
            <option value="regular"> Regular </option>
            <option value="contractual"> Contractual </option>
            <option value="probationary"> Probationary </option>
            <option value="none"> None of the above </option>
        </select>
    </div>

    <!-- designation selec option -->
    <div class="col">
        <select name="designation" class="form-select" id="Designation" aria-label="Floating label select example">
            <option value="<?= $data['designation'] ?>" selected>
                <?= ucfirst($data['designation']) ?? 'Designation' ?>
            </option>
            <option value="manager"> Manager </option>
            <option value="supervisor"> Supervisor </option>
            <option value="staff"> Staff </option>
            <option value="none"> None of the above </option>
        </select>
    </div>

    <!-- department select option -->
    <div class="col">
        <select name="department" class="form-select" id="Department" aria-label="Floating label select example">
            <!-- allow user to have a blank option -->
            <option value="<?= $data['department'] ?>" selected>
                <?= ucfirst($data['department']) ?? 'Department' ?>
            </option>
            <option value="it"> IT </option>
            <option value="hr"> HR </option>
            <option value="accounting"> Accounting </option>
            <option value="sales"> Sales </option>
            <option value="marketing"> Marketing </option>
            <option value="none"> None of the above </option>
        </select>
    </div>

</div>