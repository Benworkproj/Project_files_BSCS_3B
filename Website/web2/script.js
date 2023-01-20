(function(){

let basic_rate = document.querySelector('.basic_rate');
let basic_no = document.querySelector('.basic_no');
let basic_off = document.querySelector('.basic_off');
let hrate = document.querySelector('.hrate');
let hno = document.querySelector('.hno');
let htotal = document.querySelector('.htotal');
let other_rate = document.querySelector('.other_rate');
let other_no = document.querySelector('.other_no');
let other_total = document.querySelector('.other_total');
let income_gross = document.querySelector('.income_gross');
let income_net = document.querySelector('.income_net');
let calculate = document.querySelector('.calculate');
let sss = document.querySelector('.sss');
let phil = document.querySelector('.phil');
let pagibig = document.querySelector('.pagibig');
let tax = document.querySelector('.tax');
let deduct = document.querySelector('.deduct');

calculate.addEventListener('click', function(e){
let inc = basic_no.value * basic_rate.value;
let incomes = hno.value * hrate.value;
let incomed = other_rate.value * other_no.value;
let gross =  inc + incomes + incomed;
basic_off.value = inc;
htotal.value = incomes;
other_total.value = incomed;
income_gross.value = gross;

let ss = gross * 0.13;
sss.value = ss;

let taks = gross * 0.08;
tax.value = taks;

if (gross < 10000) {
  let phi = 400;
  phil.value = phi;

let deds = taks + ss;
let ded = deds + phi; 
deduct.value = ded;

let net = gross - ded;
income_net.value = net;
}
else if (gross >= 10000 && gross <= 79999) {
let phi = gross * 0.04;
  phil.value = phi;

let deds = taks + ss;
let ded = deds + phi; 
deduct.value = ded;

let net = gross - ded;
income_net.value = net;
}
else{
  let phi = 3200;
  phil.value = phi;

let deds = taks + ss;
let ded = deds + phi; 
deduct.value = ded;

let net = gross - ded;
income_net.value = net;
}
const file = document.querySelector("#file")
file.addEventListener("change", function() {
  const reader = new FileReader()
  reader.addEventListener("load", () => {
    document.querySelector("#image").src = reader.result
  })
  reader.readAsDataURL(this.files[0]);
})

});
})();