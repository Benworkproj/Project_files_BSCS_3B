   <!-- Second ROw -->
   <div class="row row-cols-2 accordion-body g-5">

       <!-- Basic Pay Column -->
       <div class="col">
           <!-- HEADER -->
           <p class="display-6"> Basic Income </p>

           <div class="row md-4">
               <label for="BasicPay1" class="col-md-6 col-form-label">
                   Rate / Hour</label>
               <div class="col-sm-4">

                   <input type="number" class="form-control" id="BasicPay1" name="basicPay_rate_per_hr" value="<?= $data['basicPay_rate_per_hr'] ?? 0 ?>" >

               </div>
           </div>

           <br>

           <div class="row md-4">
               <label for="BasicPay2" class="col-md-6 col-form-label">
                   No. of hours / Cut Off
               </label>
               <div class="col-sm-4">

                   <input type="number" class="form-control" id="BasicPay2" name="basicPay_num_of_hrs_per_cutOff" value="<?= $data['basicPay_num_of_hrs_per_cutOff'] ?? 0?>">

               </div>
           </div>

           <br>

           <div class="row md-4">
               <label for="BasicPay3" class="col-md-6 col-form-label">
                   Income per Cut Off
               </label>

               <div class="col-sm-4">
                   <input type="number" class="form-control" id="BasicPay3" name="basicPay_income_per_cutOff" value="<?= $data['basicPay_income_per_cutOff'] ?? 0 ?>" readonly>
               </div>

           </div>
       </div>

       <!-- Regular Deduction Column -->
       <div class="col">

           <p class="display-6"> Regular Deduction </p>

           <div class="row md-4">
               <label for="RegularDeduction1" class="col-md-6 col-form-label">SSS Contribution</label>

               <div class="col-sm-4">
                   <input type="number" class="form-control" value="<?= $data['sss'] ?? 0 ?>" id="RegularDeduction1" name="sss" readonly>
               </div>

           </div>

           <br>

           <div class="row md-4">
               <label for="RegularDeduction2" class="col-md-6 col-form-label"> PhilHealth Contribution
               </label>
               <div class="col-sm-4">
                   <input type="number" class="form-control" id="RegularDeduction2" value="<?= $data['phil_health'] ?? 0?>" name="phil_health" readonly>
               </div>
           </div>

           <br>

           <div class="row md-4">
               <label for="RegularDeduction3" class="col-md-6 col-form-label"> Pag-Ibig Contribution</label>

               <div class="col-sm-4">
                   <input name="pag-ibig" type="number" class="form-control" value="<?= $data['pag-ibig'] ?? 100 ?>" id="RegularDeduction3" readonly>
               </div>

           </div>

           <br>
           <div class="row md-4">
               <label for="RegularDeduction4" class="col-md-6 col-form-label">  
                    Income Tax Contribution 
               </label>
               <div class="col-sm-4">
                   <input type="number" class="form-control" id="RegularDeduction4" value="<?= $data['tax_value'] ?? 0?>" name="tax_value" readonly>
               </div>
           </div>
       </div>

   </div>