$(document).ready(function(){
    // chargement de la page home par defaut quand le document est pret dans la div root dans base twig
    $('#root').load('intro');

    // chargement ajax des autres pages sur le click de chaques sections differentes
    $('.navigation').on('click',function(){
        var target = $(this).data('target');
        var id = $(this).data('id');
        var def = $(this).data('def');

        $.ajax({
            type: 'POST',
            url: target,
            data: 'id=' + id,
            success: function(data){
                $('#root').html(data);
                $('#def').html(def);
            }
            })
        
       
    })
    //
    $('#commander').on('click',function(){
        $('#divCommande').css('display','block');
    })
    //
})



