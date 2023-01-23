<div class="row row-cols-2 accordion-body">

    <!-- Income Summary Column -->
    <div class="col-6">
        <p class="display-6"> Income Summary </p>
        <div class="row md-4">
            <label for="IncomeSummary1" class="col-md-6 col-form-label">
                GROSS INCOME
            </label>

            <div class="col-sm-4">
                <input name="gross_income" 
                type="number" class="form-control" id="IncomeSummary1" 
                value="<?= $data['gross_income'] ?? '0.00' ?>" readonly>
            </div>
        </div>

        <br>

        <div class="row md-4">
            <label for="IncomeSummary2" class="col-md-6 col-form-label">
                NET INCOME
            </label>

            <div class="col-sm-4">
                <input name="net_income" type="number" 
                class="form-control" id="IncomeSummary2" 
                value="<?=  $data['net_income'] ?? '0.00' ?>" readonly>
            </div>
        </div>
    </div>

    <!-- Deduction Summary Column -->
    <div class="col-6">
        <p class="display-6"> Deduction Summary </p>

        <div class="row md-4">
            <label for="Deduction1" class="col-md-6 col-form-label">Total Deduction</label>

            <div class="col-sm-4">
                <input 
                name="total_deduction" type="number" 
                class="form-control" id="Deduction1" 
                value="<?= $data['total_deduction'] ?? 0.00?>" readonly>
            </div>
        </div>

        <div id="file-js-example" class="file has-name is-danger is-boxed">
            <label class="file-label py-3">
                <input class="file-input" type="file" value="<?= $data['employee_img'] ?? '' ?>" name="employee_img">

                <span class="file-cta">
                    <span class="file-icon">
                        <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                        Upload Your Image Here
                    </span>
                </span>
                <span class="file-name">
                    No file uploaded
                </span>
            </label>
        </div>
    </div>

</div>