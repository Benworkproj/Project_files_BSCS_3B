 <div class="row row-cols-2 accordion-body g-5">

     <!--  Honorarium Column -->
    <div class="col">

        <p class="display-6">Honorarium </p>
        <div class="row md-4">
            <label for="Honorarium1" class="col-md-6 col-form-label">
                Rate / Hour
            </label>

            <div class="col-sm-4">
                <input type="number" class="form-control" id="Honorarium1" name="hono_rate_per_hr" value="<?= $data['hono_rate_per_hr'] ??'0.00' ?>">
            </div>
        </div>

        <br>

        <div class="row md-4">
            <label for="Honorarium2" class="col-md-6 col-form-label">
                No. of hours / Cut Off
            </label>

            <div class="col-sm-4">
                <input type="number" class="form-control" id="Honorarium2" name="hono_num_of_hrs_per_cutOff" value="<?= $data['hono_num_of_hrs_per_cutOff']  ?? '0.00' ?>">
            </div>
        </div>

        <br>

        <div class="row md-4">
            <label for="Honorarium3" class="col-md-6 col-form-label">
                Total Honorarium Pay
            </label>

            <div class="col-sm-4">
                <input type="number" class="form-control" id="Honorarium3" name="total_hono_pay" value="<?=  $data['total_hono_pay'] ?? '0.00'  ?>" readonly>
            </div>
        </div>
    </div>

     <!-- Other Deduction Column -->
     <div class="col">
         <p class="display-6"> Other Deduction </p>
         <div class="row md-4">
             <label for="OtherDeduction1" class="col-md-6 col-form-label">
                 SSS Loan
             </label>

             <div class="col-sm-4">
                 <input type="number" class="form-control" id="OtherDeduction1" name="sss_loan" value="<?= $data['sss_loan'] ?? '0.00' ?>">
             </div>

         </div>

         <br>

         <div class="row md-4">
             <label for="OtherDeduction2" class="col-md-6 col-form-label">
                 PAGIBIG Loan
             </label>
             <div class="col-sm-4">
                 <input type="number" class="form-control" id="OtherDeduction2" name="pag-ibig_loan" value="<?= $data['pag-ibig_loan'] ?? '0.00' ?>">
             </div>
         </div>

         <br>

         <div class="row md-4">
             <label for="OtherDeduction3" class="col-md-6 col-form-label">
                 Faculty Savings Deposit
             </label>

             <div class="col-sm-4">
                 <input type="number" 
                 class="form-control" id="OtherDeduction3" name="fac_savings_deposit" 
                 value="<?= $data['fac_savings_deposit'] ?? '0.00'?>">
             </div>
         </div>

         <br>
         <div class="row md-4">
             <label for="OtherDeduction4" class="col-md-6 col-form-label"> Faculty Savings Loan
             </label>

             <div class="col-sm-4">
                 <input type="number" 
                 class="form-control" 
                 id="OtherDeduction4" name="fac_savings_loan" 
                 value="<?= $data['fac_savings_loan'] ??'0.00' ?>">
             </div>
         </div>

         <br>

         <div class="row md-4">
             <label for="OtherDeduction5" class="col-md-6 col-form-label">
                 Salary Loan
             </label>
             <div class="col-sm-4">
                 <input type="number" class="form-control" id="OtherDeduction5"  name="salary_loan" 
                 value="<?= $data['salary_loan'] ?? '0.00' ?>">
             </div>
         </div>

         <br>
         <div class="row md-4">

             <label for="OtherDeduction6" class="col-md-6 col-form-label">
                 Other
             </label>

             <div class="col-sm-4">
                 <input type="number" class="form-control" id="OtherDeduction6" name="others" 
                 value="<?= $data['others'] ?? '0.00' ?>">
             </div>

         </div>
     </div>

 </div>