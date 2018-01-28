


//Under review pop up for member
function underReviewFunction(){
    //var under_review_tabs_id = document.getElementById('under_review_tabs_id').value;
    var inputdefault1 = document.getElementById('inputdefault1').value;
    var inputdefault2 = document.getElementById('inputdefault2').value;
    var inputdefault3 = document.getElementById('inputdefault3').value;
    var noteComment = document.getElementById('note-comment').value;
    var testDebugging = document.getElementById('testDebugging').value;
    var myModal3ID = document.getElementById('myModal3ID').value;
    console.log(myModal3ID);
    var id= 0;
    var updateUnderReview = "updateUnderReview";
    console.log(myModal3ID);
    var post_data = {
        ID                  :myModal3ID,
        retail_value        :inputdefault1,
        asking_price        :inputdefault2,
        selling_price       :inputdefault3,
        description         :noteComment,
        updateUnderReview   :updateUnderReview
    }
    $.post(testDebugging,post_data)
        .done(function( data ) {
            var data1 = document.getElementById("sigInDemo").innerHTML = data;
            console.log(data1);
            document.getElementById('note-comment').value = "";
        });
    //console.log("this is it "+under_review_tabs_id);
}
function underReviewCancelFunction(){
    document.getElementById('note-comment').value = "";
}





//new Items for admin accept item
function newItemsFunction(){
    var noteComment1 = document.getElementById('comment1').value;
    var id= 1;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal7ID').value;
    var new_items='new_items';
    var item_details = "approve";

    var post_data = {
        ID          :ID,
        item_details:item_details,
        item_status :id,
        comment     :noteComment1,
        new_items   :new_items
    };

    $.post(testDebugging,post_data )
        .done(function( data ) {
            console.log(data);
            if(data == "success - new_items"){
                $('#'+ID).css("display", "none");
            }
        });
}


//new Items for admin deny item
function newItemsDeny(){
    var noteComment1 = document.getElementById('comment1').value;
    var id= 1;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal7ID').value;
    var new_items_deny='new_items_deny';
    var item_details = "deny";
    var post_data = {
        ID          :ID,
        item_status :id,
        item_details:item_details,
        comment     :noteComment1,
        new_items_deny   :new_items_deny
    };
    $.post(testDebugging,post_data )
        .done(function( data ) {
            console.log(data);
            if(data == "success - new_items_deny"){
                $('#'+ID).css("display", "none");
            }

        });
}





//approvals for member approve
function approvalsFunction(){

    var noteComment = document.getElementById('comment').value;
    var id= 2;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal4ID').value;
    var approvals_submit='approvals_submit';
    var item_details='approve';
    var post_data = {
        ID          :ID,
        item_details:item_details,
        item_status :id,
        comment     :noteComment,
        approvals_submit   :approvals_submit
    };
    $.post(testDebugging,post_data )
        .done(function( data ) {
            console.log(data);
            if(data == "success - approvals_submit"){
                $('#'+ID).css("display", "none");
                document.getElementById('comment').value = "";
            }
        });

}






//approvals for member for deny
function approvalsDenyFunction(){
    var noteComment = document.getElementById('comment').value;
    var id= 2;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal4ID').value;
    var deny_submit='deny_submit';
    var item_details='deny';
    var post_data = {
        ID          :ID,
        item_details:item_details,
        item_status :id,
        comment     :noteComment,
        deny_submit   :deny_submit
    };
    $.post(testDebugging,post_data )
        .done(function( data ) {
            console.log(data);

            if(data == "success - deny_submit"){
                $('#'+ID).css("display", "none");
                document.getElementById('comment').value = "";
            }
        });
}


//approved for admin

$(function () {
    //approved for admin
    var testDebugging = document.getElementById('testDebugging').value;
    $('.texts1-rev > #myModal8ID').on('click', function () {
        var myModal8ID = $(this).attr('rel');
        var id= 3;
        var approved_to_deliver='approved_to_deliver';

        //console.log(myModal8ID);
        var post_data = {
            ID          :myModal8ID,
            item_status :id,
            // comment     :noteComment,
            approved_to_deliver   :approved_to_deliver
        };
        $.post(testDebugging,post_data )
            .done(function( data ) {
                console.log(data);
                alert(data);
                if(data == "successfully"){
                    $('#'+myModal8ID).css("display", "none");
                }
            });
    });

    //received/pending admin
    $('.texts1-rev > #myModal9ID').on('click', function () {
        var myModal9ID = $(this).attr('rel');
        var id= 4;
        var received_pending='received_pending';
        //console.log(ID);
        var post_data = {
            ID                  :myModal9ID,
            item_status         :id,
            received_pending    :received_pending
        };
        $.post(testDebugging,post_data )
            .done(function( data ) {
                if(data == "successfully"){
                    $('#'+myModal9ID).css("display", "none");
                }
            });
    });

//forsale admin
    $('.texts1-rev > #myModal10ID').on('click', function () {
        var myModal10ID = $(this).attr('rel');
        id = 7;
        var ID = myModal10ID;
        var for_sale_delete='for_sale_delete ';
        var post_data = {
            ID          :ID,
            item_status :id,
            for_sale_delete   :for_sale_delete
        };
        $.post(testDebugging,post_data )
            .done(function( data ) {
                console.log(data);

                if(data == "success - for_sale_delete"){
                    $('#'+myModal10ID).css("display", "none");
                }

            });


    });
});






//for sale member
function forSaleFunction(){

    var inputdefault2 = document.getElementById('inputdefaultForsale2').value;
    var inputdefault3 = document.getElementById('inputdefaultForsale3').value;
    var comment2 = document.getElementById('comment2').value;
    var testDebugging = document.getElementById('testDebugging').value;
    var ID = document.getElementById('myModal5ID').value;

    var id= 4;
    var for_sale = "for_sale";
    var post_data = {
        ID                  :ID,
        item_status         :id,
        asking_price        :inputdefault2,
        selling_price       :inputdefault3,
        comment             :comment2,
        for_sale            :for_sale
    }

    $.post(testDebugging,post_data)
        .done(function( data ) {
            var data1 = document.getElementById("sigInDemo").innerHTML = data;
            console.log(data1);
        });
}



//Profile account menu

var modHeight1;
$(document).ready(function(){
    var $j = jQuery.noConflict();
$j(".clicking-menu-profile > li").on('click touchstart', function(){
    //figure out which li to show
    $j(".clicking-menu-profile > li").removeClass('active-underline');
    $j(this).addClass('active-underline');
    var tabs = $j(this).attr('rel');
    //hide current panel
    $j('.active-tab').slideUp(300,showNextTabs);
    function showNextTabs(){
        var counter = $j('.active-tab').val();
        counter++ ;
        if(counter == 1){
            $j(this).removeClass('active-tab');
            $j('.'+tabs).slideDown(300, function(){
                $j(this).addClass('active-tab');
            });
        }else{
            console.log("You got an error by clicking the tabs");
        }
    }
});
});