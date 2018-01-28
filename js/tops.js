

 


var vals1 = " ";
var retailTags = " ";
var donationType = " ";
var categories = " ";
var subCategory = " ";
var store_website = " ";
var under_review_tabs_id = " ";
var newWithDefects = " ";
var excellent = " ";
var good = " ";
var fare = " ";
var $j =" ";
var item =" ";
var brand=" ";
var size =" ";
var retail_value =" ";
var selling_price =" ";
var age_of_item =" ";
var description =" ";
var user_id =" ";
var days =" ";
var day =" ";
var day_var =" ";
var submit =" ";
var testDebugging =" ";
var fileDragUpload =" ";
var listanitem ="";

    $(document).ready(function () {


         $j = jQuery.noConflict();
        fileDragUpload = document.getElementById('fileDragUpload').value;
        var fileDragDropUploadImg = document.getElementById('fileDragDropUploadImg').value;
        //var fileDragDropUploadImg = document.getElementById('fileDragDropUploadImg').value; 
        var dropzone = document.getElementById('dropzone');
        var listanitem = $("#listanitem").val();
        var formData = "";

            formData = new FormData();
        var files_list  = "";

        $j(".loader").css({
            "display": "none"
        });
        $j(".loader1").css({
            "display": "none"
        });
        dropzone.ondrop = function(e){
            $j(".loader1").css({
                "display": "block"
            });
            e.preventDefault();
            this.className ='dropzone';
            files_list = e.dataTransfer.files;
            for(x = 0; x < files_list.length; x++){
                formData.append('file[]', files_list[x]);
                //formData.append('post['+x+']', files_list[x]);
            }

            e.preventDefault();
            $j.ajax({
                url : fileDragDropUploadImg,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    $j('#gallery1').html(data);
                    $j(".loader1").css({
                        "display": "none"
                    });
                    $j("#uploadPhoto").hide(300);

                }
            });
        };



        $j('#fileID').change(function (e){

            formData = new FormData();
            var myFile = $j(this).prop('files');

            for(x = 0; x < myFile.length; x++){
                formData.append('file[]', myFile[x]);
            }
            //alert("hello");

            $j(".loader").css({
                "display": "block"
            });

            e.preventDefault();
            $j.ajax({
                url : fileDragDropUploadImg,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data)
                {

                    $j('#gallery').html(data);
                    $j(".loader").css({
                        "display": "none"
                    });
                    $j(".dropzone").hide(300);
                    //alert("kani");
                }
            });
        });
        $j('#uploadForm').on('submit', function(e){


            //document.getElementById('').validity.valid
            //console.log(formData);
            item = document.getElementById('item').value;
            brand= document.getElementById('brand').value;
            size = document.getElementById('size').value;
            retail_value = document.getElementById('retail_value').value;
            selling_price = document.getElementById('selling_price').value;
            age_of_item = document.getElementById('age_of_item').value;
            store_website = document.getElementById('store_website').value;
            description = document.getElementById('description').value;
            user_id = document.getElementById('user_id').value;
            signs_of_wear_and_tear = "";
            //validate if class btnClick5 is exists
            if ($('div').hasClass('btnClick5')){

                days = document.getElementsByClassName('btnClick5')[0].innerText;
                day = days.split(" ");
                day_var = day[0]; 
                
            }else{
                alert('Please add days'); 
            }
            

            submit = document.getElementById('cs-bttn2').value;
            testDebugging = document.getElementById('testDebugging').value;
            //fileDragUpload = document.getElementById('fileDragUpload').value;

            listanitem = $("#listanitem").val();
            //category
            if(categories == "" ){
                categories = "womens clothing";
            }


            formData.append('post[item]', item);
            formData.append('post[brand]', brand);
            formData.append('post[size]', size);
            formData.append('post[retail_value]', retail_value);
            formData.append('post[selling_price]', selling_price);
            formData.append('post[age_of_item]', age_of_item);
            formData.append('post[store_website]', store_website);
            formData.append('post[description]', description);
            formData.append('post[signs_of_wear_and_tear]', vals1);
            formData.append('post[donation_to]', donationType);
            formData.append('post[days]', day_var);
            formData.append('post[submit]', submit);
            formData.append('post[subCategory_name]', subCategory);
            formData.append('post[categories_name]', categories);
            formData.append('post[user_id]', user_id);
            e.preventDefault();

            $j.ajax({
                url : fileDragUpload,
                type: "POST",
                data:formData,
                contentType: false,
                processData: false,
                success: function(data)
                {
                    alert(data);
                }
            });
        });
        dropzone.ondragover = function(){
            this.className = 'dropzone dragover';
            return false;
        };
        dropzone.ondragleave = function(){
            this.className = 'dropzone';
            return false;
        };

    });

//Check box for the  wear and tear.

$(function () {
    var $j = jQuery.noConflict();
    $j('input[type=checkbox]').click(function () {
        //var chks = document.getElementById('check122').value;
        var check120 = $j(this).attr('rel');
        if(check120 == 'check121'){
            $j("#check121").prop('checked', true);
            $j("#check122").prop('checked', false);
            $j("#check123").prop('checked', false);
            $j("#check124").prop('checked', false);
            newWithDefects = document.getElementsByClassName('new-with-defects')[0].innerText;
            vals1 = newWithDefects;
        }else if(check120 == 'check122'){
            $j("#check121").prop('checked', false);
            $j("#check122").prop('checked', true);
            $j("#check123").prop('checked', false);
            $j("#check124").prop('checked', false);
            excellent = document.getElementsByClassName('excellent')[0].innerText;
            vals1 = excellent;
        }else if(check120 == 'check123'){
            $j("#check121").prop('checked', false);
            $j("#check122").prop('checked', false);
            $j("#check123").prop('checked', true);
            $j("#check124").prop('checked', false);
            good = document.getElementsByClassName('good')[0].innerText;
            vals1 = good;
        }else if(check120 == 'check124'){
            $j("#check121").prop('checked', false);
            $j("#check122").prop('checked', false);
            $j("#check123").prop('checked', false);
            $j("#check124").prop('checked', true);
            fare = document.getElementsByClassName('fare')[0].innerText;
            vals1 = fare;
        }
    });
});
var modHeight1;
$(document).ready(function(){
    var $j = jQuery.noConflict();
//top clicked btn
    $j('#women').fadeOut(1000).delay(500).fadeIn(100);
    $j('#women').on('click touchstart',function(){
        $j(this).css({
            color: 'red'
        });
    });
	
    $j('.col-centered .img_box_change').on('click touchstart',function(){
        $j("#sub-top").fadeOut().fadeIn();
    });
	
    $j('.col-centered > #hover-top').on('click touchstart',function(){
        var data = $j(this).attr("rel"); 
        //console.log(data);
        var hoverCategory = $j('#' + data).text();
        subCategory=hoverCategory;
        //$j.fn.hiddenVariable(hoverCategory);
    }); 
	
	
    $j('.col-centered > #hover-top').mouseenter(function(){
        var data = $j(this).attr("rel");
		
		//alert(data);
		
        $j(this).css({
            backgroundColor: '#000000',
            opacity: '.9'
        });
        $j('#'+data).css({
            display:'block'
        });
    });
    $j('.col-centered > #hover-top').mouseleave(function(){
        var data = $j(this).attr("rel");
		  
        $j(this).css({
            backgroundColor: '#000000',
            opacity: '1'
        });
        $j('#'+data).css({
            display:'none'
        })
    });
//first button (YER & NO)
    $j('.btnColor1').on('click touchstart',function(){
        var btnYs = $j(this).attr("rel");
        $j('.btnClick1').removeClass('btnClick1');
        $j('#'+btnYs).addClass('btnClick1');
        if($j(this).attr("rel") === 'brn-cl1'){
            $j('.show-store-website').fadeIn(1000);
            $j('.tds-col'). height ( 535 );
            modHeight1 = 575;
        }else{
            $j('.show-store-website').fadeOut(1000);
            $j('.tds-col') . height ( 465 );
           store_website = $j('#store_website').val("");

        }
    });
//second button (YER & NO)
    $j('.btnColor2').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick2').removeClass('btnClick2');
        $j('#'+btnColor).addClass('btnClick2');
    });
//Third button (YER & NO)
    $j('.btnColor3').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick3').removeClass('btnClick3');
        $j('#'+btnColor).addClass('btnClick3');
        retailTags =$j('#'+btnColor).val();
    });
//Fourth button (YES & NO)
    $j('.btnColor4').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick4').removeClass('btnClick4');
        $j('#'+btnColor).addClass('btnClick4');
        if($(this).attr("rel") === 'btn-yl1'){
            $j('.show-condition').fadeIn(1000);
            $j('.tds-col').height( 575 );
            modHeight1 = 575;
            if(modHeight1 == 575){
                modHeight1 = 0;
            }
        }else{
            $j('.show-condition').fadeOut(1000);
            $j('.tds-col').height( 450 );
            $j("#check121").prop('checked', false);
            $j("#check122").prop('checked', false);
            $j("#check123").prop('checked', false);
            $j("#check124").prop('checked', false);
            vals1 = "";
        }
    });
//Fifth button (YES & NO)
    $j('.btnColor5').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick5').removeClass('btnClick5');
        $j('#'+btnColor).addClass('btnClick5');
    });
//six button (YES & NO)
    $j('.form-group > .btnColor-cosign-term').on('click touchstart',function(){
        var btnColor = $j(this).attr("rel");
        $j('.btnClick6').removeClass('btnClick6');
        $j('#'+btnColor).addClass('btnClick6');
        donationType = $j('#'+btnColor).val();
    });
//This is for the header btn
    $j('.ftd ul li button').on('click touchstart',function(){

        var btnWomen = $j(this).attr("rel");
        $j('.wm-active').removeClass('wm-active');
        $j('#'+btnWomen).addClass('wm-active');
        var category = $j('#'+btnWomen).val();
        categories = category;
        $j('.categories').removeClass('categories');
        $j('.'+btnWomen).addClass('categories');
        $j("#sub-top").fadeOut();
    });
//Checkbox in condition
    $j('input[type="checkbox"]').on('change', function() {
        $j(this).siblings('input[type="checkbox"]').prop('checked', false);
    });
//cancel and submit button on list an item
    $j('div > .cs-cancel-submit').on('click touchstart',function(){
        var submitCancel = $j(this).attr("rel");
        $j('.cs-cancel-submit-active').removeClass('cs-cancel-submit-active');
        $j('#'+submitCancel).addClass('cs-cancel-submit-active');
    });
    // $j('#note-comment').elastic();
});


//Update account jquery
var genderUpdate;
$(function () {
    var $j = jQuery.noConflict();
    $j(".gender").on('click', function(){
        genderUpdate = $j(this).val();
    });
});

//Update Account




function changeSelected(elem){

    //elem.preventDefault();
    var orderID = elem.id;

    //formData = new FormData();
    //var myFile = $j(this).prop('files');
    //
    //for(x = 0; x < myFile.length; x++){
    //    formData.append('file[]', myFile[x]);
    //}
    //
    //console.log(formData);

    if(orderID == 1){
        $('#casualSelect').text("SELECTED");
        $('#preppySelect').text("SELECT");
        $('#streetwearSelect').text("SELECT");
    }else if (orderID == 2){
        $('#casualSelect').text("SELECT");
        $('#preppySelect').text("SELECTED");
        $('#streetwearSelect').text("SELECT");
    }else if (orderID == 3){
        $('#casualSelect').text("SELECT");
        $('#preppySelect').text("SELECT");
        $('#streetwearSelect').text("SELECTED");
    }







    //console.log(elem.id);
}


function updateAccountaaa(){












    //var first_name = document.getElementById('first_name1').value;
    //var last_name = document.getElementById('last_name1').value;
    //var age = document.getElementById('age1').value;
    //var email = document.getElementById('email1').value;
    //var mailingAddress = document.getElementById('mailingAddress1').value;
    //var shirt_name = document.getElementById('shirt_name').value;
    //var pants = document.getElementById('pants').value;
    //var shoes_size = document.getElementById('shoes_size').value;
    //var jacket = document.getElementById('jacket').value;
    //var listing_brand = document.getElementById('listing_brand').value;
    //genderUpdate = genderUpdate;
    //var testDebugging = document.getElementById('testDebugging').value;
    //var update_registration_account = 'update_registration_account';
    //var ID = 1;
    //var post_data = {
    //    ID               :ID,
    //    first_name       :first_name,
    //    last_name        :last_name,
    //    gender           :genderUpdate,
    //    age              :age,
    //    email            :email,
    //    mailing_address  :mailingAddress,
    //    shirt            :shirt_name,
    //    pants            :pants,
    //    jacket           :jacket,
    //    shoes            :shoes_size,
    //    listing_brand    :listing_brand,
    //    update_registration_account :update_registration_account
    //}
    //$.post(testDebugging, post_data )
    //   .done(function( data ) {
    //       console.log(data);
    //   });
}

 
