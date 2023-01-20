$(document).ready(function () {
  const page3Form = "http://localhost/page3/form/index.php";
  $(".selectBtn").on({
    click: function (e) {
      e.preventDefault();
      $(this).find("button").toggleClass("is-success");

      setTimeout(() => {
        // get the price of the food item
        let price = $(this).find("span").eq(1).text();
        // get the name of the food item
        let foodName = $(this).find("span").eq(2).text();
        let foodNameTrim = foodName.trim();

        sessionStorage.setItem("price", price);
        sessionStorage.setItem("foodName", foodNameTrim);

        location.href = page3Form;
      }, 1000);
    },
  });
});
