$('.slide').click(function() {
//        navBtnId = $(this).index();
	alert('sf');

//        if (navBtnId + 1 != slideNow) {
//            translateWidth = -$('#viewport').width() * (navBtnId);
//            $('#slidewrapper').css({
//                'transform': 'translate(' + translateWidth + 'px, 0)',
//                '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
//                '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
//            });
//            slideNow = navBtnId + 1;
//        }
    });
/////
$(function(){
    $('#addComment').click(function () {
    	$('#commentForm').show();
		$('#addComment').hide();
    });
});


$(function(){
    $('.appointment').click(function () {
    $('.formWindow').arcticmodal();
    });
});

$(document).ready(function() {
	var boolName = false;
	var boolEmail = false;
	var boolCheck = false;
	var boolTelephone = false;
	var boolbirthDay = false;
	var boolCommentName = false;
	
	var validate = {
		'formName' : function() {
			$('.formWindow').append('<div id="name" class="info"></div>');
			var name = $('#name');
            var element = $('#formName');
            var pos = element.offset();
			
			if(element.val().length < 3) {
				notificationFalse(name, element, '← Минимум 3 символа');
			} else {
				notificationTrue(name, element, '√');
				boolName = true;
			}
		},
		
		
		'formEmail' : function() {
			$('.formWindow').append('<div id="email" class="info"></div>');
			var email = $('#email');
            var element = $('#formEmail');
            var pos = element.offset();
			var regular = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
			
			if(!regular.test(element.val())) {
				notificationFalse(email, element, '← Введите корректный Email (mops@bk.ru)');
			} else {
				notificationTrue(email, element, '√');
				boolEmail = true;
			}
		},
		
		'formTelephone' : function() {
			$('.formWindow').append('<div id="telephone" class="info"></div>');
			var telephone = $('#telephone');
            var element = $('#formTelephone');
            var pos = element.offset();
			var regular = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
			
			if(element.val().length < 11) {
				notificationFalse(telephone, element, '← Введите корректный номер');
			} else {
				notificationTrue(telephone, element, '√');
				boolTelephone = true;
			}
		},
	
		'formCheckbox' : function() {
			$('.formWindow').append('<div id="check" class="info"></div>');
			var check = $('#check');
            var element = $('#formCheckbox');
            var pos = element.offset();
			
			if(!$("#formCheckbox").prop('checked')) {
				notificationFalse(check, element, '← Обязательно для заполнения!');
			} else {
				notificationTrue(check, element, '√');
				boolCheck = true;
			}
		},
		
		'commentName' : function() {
			$('.viewFormComment').append('<div id="comentName" class="info"></div>');
			var comentName = $('#comentName');
            var element = $('#commentName');
            var pos = element.offset();
			comentName.css({
                top: pos.top-2,
                left: pos.left+element.width()+35
            });
			
			if(element.val().length < 3) {
				notificationFalse(comentName, element, '← Минимум 3 символа');
			} else {
				notificationTrue(comentName, element, '√');
				boolCommentName = true;
			}
		},
		
		'commentDate' : function() {
			$('.viewFormComment').append('<div id="birthDay" class="info"></div>');
            var birthDay = $('#birthDay');
            var element = $('#commentDate');
            var pos = element.offset();
			var regular = /([0-2]\d|3[01])\.(0\d|1[012])\.(\d{4})/;
			birthDay.css({
                top: pos.top-2,
                left: pos.left+element.width()+35
            });
			
            if(!regular.test(element.val())) {
                notificationFalse(birthDay, element, 'Введите корректную дату');
             } else {
                notificationTrue(birthDay, element, '√');
				boolbirthDay = true;
             }
			
		},
		
		'sendIt' : function (){
             if(!boolName || !boolEmail || !boolCheck || !boolTelephone) {
				  alert("Заполните все поля");
             } else {
				 $('#formAppointment').submit();
				 alert("Запрос отправлен");
			 }
         },
		
		'comSend' : function (){
             if(!boolbirthDay || !boolCommentName) {
				  alert("Заполните все поля");
             } else {
				 $('#birthInfo').hide();
				 $('#commentForm').submit();
				 $('#commentForm').hide();
    			 $('#addComment').show();
				 alert("Спасибо! Ваш коментарий отправлен на модерацию");
				 window.location.reload();
			 }
         }
	
	};
	
	$('#send').click(function (){
         validate.formName();
         validate.formEmail();
         validate.formCheckbox();
		 validate.sendIt();
              
         return false;
     });
	
	$('#commentSend').click(function (){
         validate.commentName();
         validate.commentDate();
         validate.comSend();
         return false;
     });
	
	$("#formTelephone").mask("+7 (999) 999-9999");
	$("#formTelephone").change(validate.formTelephone);
	$('#formName').change(validate.formName);
	$('#formEmail').change(validate.formEmail);
	$('#formCheckbox').change(validate.formCheckbox);
	$('#commentDate').change(validate.commentDate);
	$('#commentName').change(validate.commentName);
});


function notificationFalse(name, element, text) {
	name.removeClass('correct').addClass('error').html(text).show();
	element.removeClass('normal').addClass('wrong');
}

function notificationTrue(name, element, text) {
	name.removeClass('error').addClass('correct').html(text).show();
	element.removeClass('wrong').addClass('normal');
}