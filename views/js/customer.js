$(function() {
$("#cus-form").submit(function (e) {
    e.preventDefault();

      var cusname = $("#cusname").val();
      var custype = $("#custype").val();
      var cusnum = $("#cusnum").val();
      var cusadd = $("#cusadd").val();
      var cusemail = $("#cusemail").val();          
                  
      var customer = new FormData();

      customer.append("cusname", cusname);
      customer.append("custype", custype);
      customer.append("cusnum", cusnum);
      customer.append("cusadd", cusadd);
      customer.append("cusemail", cusemail);

      $.ajax({
          url:"../../ajax/customer.ajax.php",
          method: "POST",
          data: customer,
          cache: false,
          contentType: false,
          processData: false,
          dataType:"text",
          
          complete: function () {
          clear();
          }
      })
    }
);
    function clear(){
      $("#cusname").val('');
      $("#custype").val('');
      $("#cusnum").val('');
      $("#cusadd").val('');
      $("#cusemail").val('');

      $("#cusname").focus()};
});
