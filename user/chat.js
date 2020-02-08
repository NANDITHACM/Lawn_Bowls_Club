var bottom = true;

jQuery(document).ready(function() {
	
	$("#text").focus();
	
	listChat();
	setInterval(function() {
		listChat();
	}, 500);
	
	listOnline();
	setInterval(function() {
		listOnline();
	}, 5000);
	
    // Sum up score values 
    
     $('#pts').keyup(function() {
        $('.pts[name="2"]').val($(this).val());
        $('#text').val($(this).val());
        $("#send").submit();
    });
    $('#pts3').keyup(function() {
        $('.pts[name="4"]').val($(this).val());
    });
      
     
    $('.pts').keyup(function () {
     
        
        var thisValue = $(this).attr('name');
        var priThird = parseFloat(thisValue) - 3;
        var nextValue = parseFloat(thisValue) + 1;
        
         
        var sum = parseFloat($('.pts[name="' + priThird + '"]').val()) + parseFloat($(this).val());
    
         
        $('.pts[name="' + nextValue + '"]').val(sum);
        $('#text').val($(this).val());

        $("#send").submit();
 
        var aSum = parseFloat($('.pts[name="2"]').val()) + parseFloat($('.pts[name="6"]').val()) + parseFloat($('.pts[name="10"]').val()) + parseFloat($('.pts[name="14"]').val()) + parseFloat($('.pts[name="18"]').val()) + parseFloat($('.pts[name="22"]').val()) + parseFloat($('.pts[name="26"]').val()) + parseFloat($('.pts[name="30"]').val()) + parseFloat($('.pts[name="34"]').val());
        $('#htotal').val(aSum);

        var aSum = parseFloat($('.pts[name="4"]').val()) + parseFloat($('.pts[name="8"]').val()) + parseFloat($('.pts[name="12"]').val()) + parseFloat($('.pts[name="16"]').val()) + parseFloat($('.pts[name="20"]').val()) + parseFloat($('.pts[name="24"]').val()) + parseFloat($('.pts[name="28"]').val()) + parseFloat($('.pts[name="32"]').val()) + parseFloat($('.pts[name="36"]').val());
        $('#atotal').val(aSum);

    });





// Sum up score values ::: END
	
	$( "#sendform" ).submit(function(e) {
		if($('#text').val() != "") {
			$.post("send.php", {text: $('#text').val()});
			$('#text').val("");
		}
		e.preventDefault();
	});
	
	$("#msg").scroll(function() {
		if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
			bottom = true;
			//console.log("bottom");
		}
		else {
			bottom = false;
			//console.log("not bottom");
		}
	});
	
	$("#clickClear").click(function(e) {
		$.post("clear.php");
		$("#msg").text("Cleared scores");
	});
});

function listChat() 
{
	$.get("list.php", function (data) {
		$("#msg").append(data);	
	});
	
}

function listOnline()
{
	$("#online").load("online.php");
	//console.log("Updated online");
}
	