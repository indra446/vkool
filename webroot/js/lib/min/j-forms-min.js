!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e(jQuery)}(function($){function e(e,t){$(e).datepicker({dateFormat:"mm/dd/yy",prevText:'<i class="zmdi zmdi-chevron-left"></i>',nextText:'<i class="zmdi zmdi-chevron-right"></i>',onClose:function(e){$(t).datepicker("option","minDate",e),$(this).valid()}})}function t(e,t){$(t).datepicker({dateFormat:"mm/dd/yy",prevText:'<i class="zmdi zmdi-chevron-left"></i>',nextText:'<i class="zmdi zmdi-chevron-right"></i>',onClose:function(t){$(e).datepicker("option","maxDate",t),$(this).valid()}})}function s(e){$(e).datepicker("destroy")}function r(){$(".captcha img").attr("src","php/captcha/captcha-image.php?x="+Math.random())}try{$("#phone").mask("(999) 999-9999",{placeholder:"x"}),$("#post").mask("999-9999",{placeholder:"x"}),$("#card_number").mask("9999-9999-9999-9999",{placeholder:"x"}),$("#cvv2").mask("999",{placeholder:"x"}),e("#date_from","#date_to"),t("#date_from","#date_to"),$("#j-forms").validate({errorClass:"error-view",validClass:"success-view",errorElement:"span",onkeyup:!1,onclick:!1,rules:{name:{required:!0},email:{required:!0,email:!0},phone:{required:!0},adults:{required:!0,digits:!0,range:[0,30]},children:{required:!0,digits:!0,range:[0,30]},date_from:{required:!0},date_to:{required:!0},message:{required:!0,minlength:20}},messages:{name:{required:"Please enter your name"},email:{required:"Please enter your email",email:"Incorrect email format"},phone:{required:"Please enter your phone"},adults:{required:"Please field is required"},children:{required:"Please field is required"},date_from:{required:"Please select check-in date"},date_to:{required:"Please select check-out date"},message:{required:"Please enter your message"}},highlight:function(e,t,s){$(e).closest(".input").removeClass(s).addClass(t),($(e).is(":checkbox")||$(e).is(":radio"))&&$(e).closest(".check").removeClass(s).addClass(t)},unhighlight:function(e,t,s){$(e).closest(".input").removeClass(t).addClass(s),($(e).is(":checkbox")||$(e).is(":radio"))&&$(e).closest(".check").removeClass(t).addClass(s)},errorPlacement:function(e,t){$(t).is(":checkbox")||$(t).is(":radio")?$(t).closest(".check").append(e):$(t).closest(".unit").append(e)},submitHandler:function(){$("#j-forms").ajaxSubmit({target:"#j-forms #response",error:function(e){$("#j-forms #response").html("An error occured: "+e.status+" - "+e.statusText)},beforeSubmit:function(){$('#j-forms button[type="submit"]').attr("disabled",!0).addClass("processing")},success:function(){$('#j-forms button[type="submit"]').attr("disabled",!1).removeClass("processing"),$("#j-forms .input").removeClass("success-view error-view"),$("#j-forms .check").removeClass("success-view error-view"),$("#j-forms .success-message").length&&($("#j-forms").resetForm(),s("#date_from"),s("#date_to"),e("#date_from","#date_to"),t("#date_from","#date_to"),$('#j-forms button[type="submit"]').attr("disabled",!0),$("#j-forms .multi-prev-btn").attr("disabled",!0),setTimeout(function(){$("#j-forms #response").removeClass("success-message").html(""),$('#j-forms button[type="submit"]').attr("disabled",!1),$("#j-forms .multi-prev-btn").attr("disabled",!1),$("#j-forms .multi-prev-btn").css("display","none"),$("#j-forms .multi-submit-btn").css("display","none"),$("#j-forms fieldset").removeClass("active-fieldset"),$("#j-forms fieldset").eq(0).addClass("active-fieldset"),$("#j-forms .multi-next-btn").css("display","block")},5e3))}})}}),$("form.j-multistep").length&&$("form.j-multistep").each(function(){var e=$(this).attr("id"),t=$("#"+e+" fieldset").length,s=$("#"+e+" .step").length,r=$("#"+e+" .multi-next-btn"),a=$("#"+e+" .multi-prev-btn"),i=$("#"+e+" .multi-submit-btn");$("#"+e+" fieldset").eq(0).addClass("active-fieldset"),s&&$("#"+e+" .step").eq(0).addClass("active-step"),$("#"+e+" fieldset").eq(0).hasClass("active-fieldset")&&(i.css("display","none"),a.css("display","none")),r.on("click",function(){return 1!=$("#"+e).valid()?!1:($("#"+e+" fieldset.active-fieldset").removeClass("active-fieldset").next("fieldset").addClass("active-fieldset"),s&&$("#"+e+" .step.active-step").removeClass("active-step").addClass("passed-step").next(".step").addClass("active-step"),a.css("display","block"),$("#"+e+" fieldset").eq(t-1).hasClass("active-fieldset")&&(i.css("display","block"),r.css("display","none")),void 0)}),a.on("click",function(){$("#"+e+" fieldset.active-fieldset").removeClass("active-fieldset").prev("fieldset").addClass("active-fieldset"),s&&$("#"+e+" .step.active-step").removeClass("active-step").prev(".step").removeClass("passed-step").addClass("active-step"),$("#"+e+" fieldset").eq(0).hasClass("active-fieldset")&&a.css("display","none"),$("#"+e+" fieldset").eq(t-2).hasClass("active-fieldset")&&(i.css("display","none"),r.css("display","block"))})}),$("#j-forms-captcha").validate({errorClass:"error-view",validClass:"success-view",errorElement:"span",onkeyup:!1,onclick:!1,rules:{name:{required:!0},phone:{required:!0},time:{required:!0},message:{required:!0,minlength:20},captcha_code:{required:!0,remote:"php/captcha/captcha-processing.php"}},messages:{name:{required:"Please enter your name"},phone:{required:"Please enter your phone"},time:{required:"Please select time"},message:{required:"Please enter your message"},captcha_code:{required:"Captcha is required",remote:"Correct captcha is required"}},highlight:function(e,t,s){$(e).closest(".input").removeClass(s).addClass(t),($(e).is(":checkbox")||$(e).is(":radio"))&&$(e).closest(".check").removeClass(s).addClass(t)},unhighlight:function(e,t,s){$(e).closest(".input").removeClass(t).addClass(s),($(e).is(":checkbox")||$(e).is(":radio"))&&$(e).closest(".check").removeClass(t).addClass(s)},errorPlacement:function(e,t){$(t).is(":checkbox")||$(t).is(":radio")?$(t).closest(".check").append(e):$(t).closest(".unit").append(e)},submitHandler:function(){$("#j-forms-captcha").ajaxSubmit({target:"#j-forms-captcha #response",error:function(e){$("#j-forms-captcha #response").html("An error occured: "+e.status+" - "+e.statusText)},beforeSubmit:function(){$('#j-forms-captcha button[type="submit"]').attr("disabled",!0).addClass("processing")},success:function(){$('#j-forms-captcha button[type="submit"]').attr("disabled",!1).removeClass("processing"),$("#j-forms-captcha .input").removeClass("success-view error-view"),$("#j-forms-captcha .check").removeClass("success-view error-view"),$("#j-forms-captcha .success-message").length&&($("#j-forms-captcha").resetForm(),r(),$('#j-forms-captcha button[type="submit"]').attr("disabled",!0),setTimeout(function(){$("#j-forms-captcha #response").removeClass("success-message").html(""),$('#j-forms-captcha button[type="submit"]').attr("disabled",!1)},5e3))}})}}),$("#j-forms-checkout").validate({errorClass:"error-view",validClass:"success-view",errorElement:"span",onkeyup:!1,onclick:!1,rules:{first_name:{required:!0},last_name:{required:!0},email:{required:!0,email:!0},phone:{required:!0},country:{required:!0},city:{required:!0},post:{required:!0},address:{required:!0},message:{required:!0,minlength:20},card_name:{required:!0},card_number:{required:!0},cvv2:{required:!0},card_month:{required:!0},card_year:{required:!0}},messages:{first_name:{required:"Please enter your first name"},last_name:{required:"Please enter your last name"},email:{required:"Please enter your email",email:"Incorrect email format"},phone:{required:"Please enter your phone"},country:{required:"Please select a country"},city:{required:"Please field is required"},post:{required:"Please enter a post code"},address:{required:"Please enter your address"},message:{required:"Please enter your message"},card_name:{required:"Please enter name on card"},card_number:{required:"Please enter a card number"},cvv2:{required:"Please enter a code"},card_month:{required:"Please select a month"},card_year:{required:"Please select a year"}},highlight:function(e,t,s){$(e).closest(".input").removeClass(s).addClass(t),($(e).is(":checkbox")||$(e).is(":radio"))&&$(e).closest(".check").removeClass(s).addClass(t)},unhighlight:function(e,t,s){$(e).closest(".input").removeClass(t).addClass(s),($(e).is(":checkbox")||$(e).is(":radio"))&&$(e).closest(".check").removeClass(t).addClass(s)},errorPlacement:function(e,t){$(t).is(":checkbox")||$(t).is(":radio")?$(t).closest(".check").append(e):$(t).closest(".unit").append(e)},submitHandler:function(){$("#j-forms-checkout").ajaxSubmit({target:"#j-forms-checkout #response",error:function(e){$("#j-forms-checkout #response").html("An error occured: "+e.status+" - "+e.statusText)},beforeSubmit:function(){$('#j-forms-checkout button[type="submit"]').attr("disabled",!0).addClass("processing")},success:function(){$('#j-forms-checkout button[type="submit"]').attr("disabled",!1).removeClass("processing"),$("#j-forms-checkout .input").removeClass("success-view error-view"),$("#j-forms-checkout .check").removeClass("success-view error-view"),$("#j-forms-checkout .success-message").length&&($("#j-forms-checkout").resetForm(),$('#j-forms-checkout button[type="submit"]').attr("disabled",!0),setTimeout(function(){$("#j-forms-checkout #response").removeClass("success-message").html(""),$('#j-forms-checkout button[type="submit"]').attr("disabled",!1)},5e3))}})}}),$(".clone-widget").cloneya(),$(".clone-rightside-btn-1").cloneya(),$(".clone-rightside-btn-2").cloneya(),$(".clone-leftside-btn-1").cloneya(),$(".clone-leftside-btn-2").cloneya(),$(".clone-link").cloneya(),$("#list-autocomplete").autocomplete({source:["c++","java","php","coldfusion","javascript","asp","ruby"],messages:{noResults:""}}),$(function(){function e(e){return e.split(/,\s*/)}function t(t){return e(t).pop()}var s=["ActionScript","AppleScript","Asp","BASIC","C","C++","Clojure","COBOL","ColdFusion","Erlang","Fortran","Groovy","Haskell","Java","JavaScript","Lisp","Perl","PHP","Python","Ruby","Scala","Scheme"];$("#multi-list-autocomplete").bind("keydown",function(e){e.keyCode===$.ui.keyCode.TAB&&$(this).autocomplete("instance").menu.active&&e.preventDefault()}).autocomplete({minLength:0,source:function(e,r){r($.ui.autocomplete.filter(s,t(e.term)))},focus:function(){return!1},select:function(t,s){var r=e(this.value);return r.pop(),r.push(s.item.value),r.push(""),this.value=r.join(", "),!1}})}),$.fn.spectrum&&($("#hex").spectrum({color:"#f00",preferredFormat:"hex",showInput:!0}),$("#hsl").spectrum({color:"#c34040",preferredFormat:"hsl",showInput:!0}),$("#rgb").spectrum({color:"#dbc75e",preferredFormat:"rgb",showInput:!0}),$("#a-rgb").spectrum({showAlpha:!0,color:"#3dbb8f",preferredFormat:"rgb",showInput:!0}),$("#a-hsl").spectrum({showAlpha:!0,color:"#8bc177",preferredFormat:"hsl",showInput:!0}),$("#palette1").spectrum({color:"#9257b4",preferredFormat:"hex",showInput:!0,showPalette:!0,palette:[["#000","#fff","#ffebcd"],["#ff8000","#448026","#ffffe0"]]}),$("#palette2").spectrum({showPaletteOnly:!0,showPalette:!0,color:"#780707",palette:[["#000","#fff","#ffebcd","#ff8000","#448026"],["#ff0000","#fff700","#75b274","#1d31c3","#9257b4"]]}),$("#hex, #hsl, #rgb, #a-hsl, #a-rgb, #palette1, #palette2").show()),$(function(){$("#date-icon").datepicker({dateFormat:"mm/dd/yy",prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>'})}),$(function(){$("#date-widget").datepicker({dateFormat:"mm/dd/yy",prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>'})}),$(function(){$("#popup-from").datepicker({dateFormat:"mm/dd/yy",prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>',onClose:function(e){$("#popup-to").datepicker("option","minDate",e)}}),$("#popup-to").datepicker({dateFormat:"mm/dd/yy",prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>',onClose:function(e){$("#popup-from").datepicker("option","maxDate",e)}})}),$(function(){$("#inline-from").datepicker({dateFormat:"mm/dd/yy",altField:"#inline-range-from",prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>',onSelect:function(e){$("#inline-to").datepicker("option","minDate",e)}}),$("#inline-to").datepicker({dateFormat:"mm/dd/yy",altField:"#inline-range-to",prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>',onSelect:function(e){$("#inline-from").datepicker("option","maxDate",e)}})}),$(function(){$("#inline").datepicker({dateFormat:"mm/dd/yy",altField:"#inline-single",prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>'})}),$.fn.autoNumeric&&($(".currency").autoNumeric("init"),$("#input-select-currency").autoNumeric("init"),$("#radio-select-currency").change(function(){var e=$("#radio-select-currency input:checked").val();"dollar"==e&&$("#input-select-currency").autoNumeric("update",{aSign:"$ "}),"euro"==e&&$("#input-select-currency").autoNumeric("update",{aSign:"€ "}),"pound"==e&&$("#input-select-currency").autoNumeric("update",{aSign:"£ "}),"yen"==e&&$("#input-select-currency").autoNumeric("update",{aSign:"¥ "})}).change()),$("#timepic-1").datetimepicker({prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>'}),$("#timepic-2").timepicker({prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>'});var a=$("#pop-time-1"),i=$("#pop-time-2");$.timepicker.datetimeRange(a,i,{prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>',minInterval:36e5,dateFormat:"mm/dd/yy",timeFormat:"HH:mm",start:{},end:{}}),$("#i-single").datetimepicker({prevText:'<i class="fa fa-caret-left"></i>',nextText:'<i class="fa fa-caret-right"></i>',altField:"#i-single-alt",altFieldTimeOnly:!1})}catch(c){}});