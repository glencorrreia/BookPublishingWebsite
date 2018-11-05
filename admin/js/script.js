$('#selectAllBoxes').click(function(event){
    if(this.checked){
        $('.checkBoxes').each(function(){
            this.checked=true;
        });
    }else{
        $('.checkBoxes').each(function(){
            this.checked=false;
        });
    }
});




/*Validation for add-post form*/
$(document).ready(function() {
    $('#addPost').bootstrapValidator({
        message: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required and cannot be empty'
                    },
                    stringLength: {
                        
                        max: 100,
                        message: 'The title must be  less than 100 characters long'
                    }
                }
            },
            post_category_id: {
                validators: {
                    notEmpty: {
                        message: 'Please select some categories'
                    }
                }
            },
            status: {
                validators: {
                    notEmpty: {
                        message: 'Please select status'
                    }
                }
            },
            image: {
                validators: {
                    notEmpty: {
                        message: 'Please select some image'
                    }
                }
            },
            post_tags: {
                validators: {
                    notEmpty: {
                        message: 'Please insert some tags'
                    }
                }
            },
            post_content: {
                validators: {
                    notEmpty: {
                        message: 'Please insert some content'
                    }
                }
            }
        }
    });
});


function loadUsersOnline(){
    $.get("functions.php?onlineusers=result",function(data){
        $('.usersonline').text(data);
    });
}


setInterval(function(){
    loadUsersOnline();
},500);