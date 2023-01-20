(function(){

let display = document.querySelector('.display');
let discount = document.querySelector('.discount');
let discounts = document.querySelector('.discounts');
let discounted = document.querySelector('.discounted');
let ND = document.querySelector('.ND');
let disc = document.querySelector('.disc');
let discs = document.querySelector('.discs');
let amount = document.querySelector('.amount');
let amounts = document.querySelector('.amounts');
let quantity = document.querySelector('.quantity');
let quantities = document.querySelector('.quantities');
let price = document.querySelector('.price');
let change = document.querySelector('.change');
let buttons = document.querySelectorAll('.btn');
let operator = document.querySelector('.btn-operator');
let equal = document.querySelector('.btn-equal');
let success = document.querySelector('.btn-success');

buttons.forEach(function(button){
button.addEventListener('click', function(e) {
let value = e.target.dataset.num;
display.value += value;
})
});

equal.addEventListener('click', function(e){
  if (display.value === ''){
    display.value = "Please enter";
  } else {
    let answer = display.value - amount.value;
    change.value = answer;
  }
});

success.addEventListener('click', function(e){
  if (display.value === ''){
    display.value = "Please enter";
  } else {
    let answer = display.value - amount.value;
    change.value = answer;
  }
});

discount.addEventListener('click', function(e){
  let res = price.value * quantity.value;
  let ds = 0.25;
  let dis = res * ds;
  disc.value = dis;
  amount.value = res - dis;
  discs.value = disc.value;
  amounts.value = amount.value;
  quantities.value = quantity.value;
});

discounts.addEventListener('click', function(e){
  let res = price.value * quantity.value;
  let ds = 0.25;
  let dis = res * ds;
  disc.value = dis;
  amount.value = res - dis;
  discs.value = disc.value;
  amounts.value = amount.value;
  quantities.value = quantity.value;
});

discounted.addEventListener('click', function(e){
  let res = price.value * quantity.value;
  let ds = 0.25;
  let dis = res * ds;
  disc.value = dis;
  amount.value = res - dis;
  discs.value = disc.value;
  amounts.value = amount.value;
  quantities.value = quantity.value;
});

ND.addEventListener('click', function(e){
  let res = price.value * quantity.value;
  let ds = 0;
  let dis = res * ds;
  disc.value = dis;
  amount.value = res - dis;
  discs.value = disc.value;
  amounts.value = amount.value;
  quantities.value = quantity.value;
});

})();

