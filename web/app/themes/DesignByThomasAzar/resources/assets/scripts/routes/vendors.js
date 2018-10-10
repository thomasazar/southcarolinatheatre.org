export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    function update_total() {
      var awards_donation = $("#awards-donation").val();
      var registration = $("#registration input:checked").val();
      if (registration === "$75 SCTA Member Organization") {
        registration = 75;
      } else {
        registration = 200;
      }
      var additional_fees = [];
      $('#additional-fees input:checked').each(function(i){
        additional_fees[i] = $(this).val();
      });
      console.log(additional_fees.length);
      if (additional_fees.length === 2) {
        additional_fees = 60;
      } else if (additional_fees[0] === "$25 SCTA Individual Adult membership") {
        additional_fees = 25;
      } else if (additional_fees[0] === "$35 SCTA 2018 Convention fee") {
        additional_fees = 35;
      } else {
        additional_fees = 0;
      }
      var total_payment = (+awards_donation) + (+registration) + (+additional_fees);
      $('#total-payment-placeholder').html(total_payment);
      $('#total-payment').val(total_payment);
    }
    $("#awards-donation").keyup(function(){
      update_total();
    });
    $("#registration").change(function(){
      update_total();
    });
    $("#additional-fees").change(function(){
      update_total();
    });
  },
};
