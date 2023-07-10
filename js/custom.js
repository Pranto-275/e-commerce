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
            productOffcanvas()
        }
    })


    // cart_prduct()
}


let cart_product_loop ;
function productOffcanvas(){


    $.ajax({
        method: "POST",
        url: "ajax.php",
        data: {
            code: 114,

        },
        success: function (data) {
            $('#fea_product').empty();

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


                $("#fea_product").append(html)
         }

                $("#total_amount").html(total_amount);

        }
    })

}

cart_prduct()
let linee_id = [];
function cart_prduct(){
    $('#clear_cart').empty();


    $.ajax({
        method: "POST",
        url: "ajax.php",
        data: {
            code: 115,

        },
        success: function (data) {



            let showdata = JSON.parse(data);
            let loop_lenght = showdata.length;
            let total_amount = 0;

            cart_product_loop = loop_lenght;
            let subtotal = 0;
            for (let i = 0; i<loop_lenght;i++){


                let product_line_id = showdata[i].id;

                let product_image = showdata[i].image;
                let product_name = showdata[i].p_name;
                let product_qty = showdata[i].qty;
                let product_price = showdata[i].price;
                let cart_id = showdata[i].id;
                let total_amount =  (product_qty * product_price);
                linee_id.push(product_line_id);
                let product_id = "product_id" +  i;
                let increase_id = "increase_id" +  i;
                let dec_id = "dec_id" +  i;
                let price_id = "price_id" +  i;
                let product_price_id = "product_price_id" +  i;
                let delete_cart = "delete_cart" +  i;
                let cart_unique_id = "cart_unique_id" +  i;
                let row_id = "row_id" +  i;
                let qqqty = "qqqty" +  i;


                let html = '';
                html += '<tr id="'+row_id+'">';
                html += '<input type="hidden" id="'+cart_unique_id+'" value="'+cart_id+'">'
               html +=  '<td ><img src="'+product_image+'" alt="" style="width: 100px;"></td>';
               html += ' <td style="padding: 50px;">'+product_name+'</td>';
               html +=  '<td style="padding: 50px;"   id="'+product_price_id+'">'+product_price+'</td>';
               html += ' <td style="padding: 40px;">';
               html +=  '<div class="btn-group  p-2" role="group" aria-label="Basic example">';
                html +=   ' <button class="btn btn-light border" id="'+dec_id+'" onclick="decreseItem(this.id)">-</button>';
                html +=     ' <span style="padding: 10px;" id="'+product_id+'">'+product_qty+'</span>';

                html +=   ' <button class="btn btn-light border" id="'+increase_id+'" onclick="increaseItem(this.id)">+</button>';
               html +=   ' </div>';
              html +=  ' </td>';
              html +=   '<td style="padding: 50px;"  id="'+price_id+'">'+total_amount+'</td>';
              html += '<td  style="padding: 50px;"><button class = "btn btn-danger" id="'+delete_cart+'"  onclick="deleteCart(this.id)">Delete</button> </td>'
             html +=  '</tr>';

                subtotal = subtotal + total_amount;
                $("#cart_product").append(html)
            }

            $("#subtotal").html(subtotal)
            $("#total").html(subtotal)



        }
    })

}

function increaseItem(id){
    let increase_btn = '#' + id;
    let increasevalue = increase_btn.replace(/\D/g, '');
    let product_id = "#product_id" + increasevalue;
    let price_id = "#price_id" + increasevalue;
    let product_price_id = "#product_price_id" + increasevalue;
    let qqqty = "#qqqty" + increasevalue;


    let product_qty_increase = $(product_id).html();
    let qty = parseInt(product_qty_increase);
    $(product_id).html(++qty);
    let product_price =  $(product_price_id).html();
    $(qqqty).val(++qty);
    let price = parseInt(product_price);
    let total_price= qty * price;
     $(price_id).html(total_price)
    // $("#subtotal").html(total_price)
    // $("#total").html(total_price)


}


function decreseItem(id){
    let decrese_btn = '#' + id;
    let decreasevalue = decrese_btn.replace(/\D/g, '');
    let product_id = "#product_id" + decreasevalue;
    let price_id = "#price_id" + decreasevalue;
    let product_price_id = "#product_price_id" + decreasevalue;
    let product_qty_dese = $(product_id).html();
    let qty = parseInt(product_qty_dese);
    if (qty > 1){
        $(product_id).html(--qty);
        let product_price =  $(product_price_id).html();
        let price = parseInt(product_price);
        let total_price= qty * price;
        $(price_id).html(total_price)
        // $("#subtotal").html(total_price)
        // $("#total").html(total_price)
    }

}


function deleteCart(delete_id){

    let delete_btn = '#' + delete_id;
    let num = delete_btn.replace(/\D/g, '');
    let delete_cart_id = "#cart_unique_id" + num;
    let show_delete_id_value = $(delete_cart_id).val();

    $.ajax({
        method: "POST",
        url: "ajax.php",
        data: {
            code: 116,
            cart_id : show_delete_id_value,

        },
        success: function (data) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: data,
                showConfirmButton: false,
                timer: 1500
            })
            notification()
            productOffcanvas()
            cart_prduct()


        }
    })


}


$("#update_cart_qty").on("click",function (){
    let cart_array = [];

   for(let i = 0;i<cart_product_loop;i++){

        let ddproduct_id = "#product_id" +  i;
        let showdata = $(ddproduct_id).html();
        cart_array.push(showdata);

   }


    $.ajax({
        method: "POST",
        url: "ajax.php",
        data: {
            code: 117,
            cart_array : cart_array,
            linee_id:linee_id,

        },
        success: function (data) {
            console.log(data);
           if (data != ''){
               Swal.fire({
                   position: 'top-end',
                   icon: 'success',
                   title: 'Cart Updated Successfully',
                   showConfirmButton: false,
                   timer: 1500
               })
           }

            notification()
            productOffcanvas()
            cart_prduct()


        }
    })





})


$("#continue_Shopping").on("click",function (){

    $.ajax({
        method: "POST",
        url: "ajax.php",
        data: {
            code: 118,

        },
        success: function (data) {
            if (data != ''){
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Cart Deleted Successfully',
                    showConfirmButton: false,
                    timer: 1500
                })
            }



        }
    })


})