function notification(){
    $.ajax({
        method: "POST",
        url: "ajax.php",
        data: {
            code: 113,

        },
        success: function (data) {
            let count_product_in_cart = data;
            $("#product_count").html(count_product_in_cart);
        }
    })

    productOffcanvas()
}

function productOffcanvas(){
    $('.fea_product').empty();



    $.ajax({
        method: "POST",
        url: "ajax.php",
        data: {
            code: 114,

        },
        success: function (data) {





          let showdata = JSON.parse(data);




          let loop_lenght = showdata.length;


            let total_amount = 0;
         for (let i = 0; i<loop_lenght;i++){

             let product_image = showdata[i].image;
             let product_name = showdata[i].p_name;
             let product_qty = showdata[i].qty;
             let product_price = showdata[i].price;
             total_amount = total_amount + (product_qty * product_price);
             let html = '';
             html += '<div class="d-flex justify-content-start pt-3">';
             html +=     '<div style="margin-right: 30px">';
             html +=         '<img src="'+product_image+'" alt="" style="width: 100px;">';
             html +=    ' </div>'
             html +=     ' <div class="d-flex flex-column justify-content-start">';
             html +=         '<div>'+product_name+'</div>';
             html +=          '<div>'
             html +=            ' <b> '+product_qty+' X TK '+product_price+' </b>';
             html +=        ' </div>';
             html +=    '  </div>';
             html +=   ' </div>';


                $(".fea_product").append(html)
         }

                $("#total_amount").html(total_amount);

        }
    })

}