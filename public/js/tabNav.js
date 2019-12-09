$(document).ready(function(){
    $('#page1').css('display','inline-block');
    $('#page2').css('display','none');
    $('.tabNav').on('click',function(e){
        e.preventDefault();
        var target = $(this).data('target');
        console.log(target);
        if(target == 'page2'){
            $('#page1').css('display','none');
            $('#page2').css('display','inline-block');
            
        }
        else if(target == 'page1'){
            $('#page1').css('display','inline-block');
            $('#page2').css('display','none');
        }
    })
    // $('#subscription_cpu').on('change', function(){
    //     console.log($(this).val())
    // })
	$('.custom-range').on('change', function() {
        var $set = $(this).val();
        console.log($set);
        var target = $(this).data('target');
        console.log(target);
        $('#'+ target).html($set);
	});
})