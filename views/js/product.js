$(function() {
    $("#prod-form").submit(function (e) {
        e.preventDefault();
    
          var prodname = $("#prodname").val();
          var prodman = $("#prodman").val();
          var prodquan = $("#prodquan").val();
          var prodmanadd = $("#prodmanadd").val();
          var prodmanemail = $("#prodmanemail").val();          
                      
          var product = new FormData();
    
          product.append("prodname", prodname);
          product.append("prodman", prodman);
          product.append("prodquan", prodquan);
          product.append("prodmanadd", prodmanadd);
          product.append("prodmanemail", prodmanemail);
    
          $.ajax({
              url:"../../ajax/product.ajax.php",
              method: "POST",
              data: product,
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
          $("#prodname").val('');
          $("#prodman").val('');
          $("#prodquan").val('');
          $("#prodmanadd").val('');
          $("#prodmanemail").val('');
    
          $("#prodname").focus()};
    });
    