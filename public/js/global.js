$(document).ready(function(){
    // chargement de la page home par defaut quand le document est pret dans la div root dans base twig
    $('#root').load('intro');

    // chargement ajax des autres pages sur le click de chaques sections differentes
    $('.navigation').on('click',function(){
        var target = $(this).data('target');
        var id = $(this).data('id');
        console.log(id);
        var def = $(this).data('def');
        $('.navigation').each(function(){
            $(this).removeClass('active');
        })
        $('#'+id).addClass('active');
        $.ajax({
            type: 'POST',
            url: target,
            data: 'id=' + id,
            success: function(data){
                
                $('#root').html(data);
                $('#def').html(def);
                if(def == "facture") {
                    var mes = "Mes";
                    $('#def2').html(mes + " " + def);
                }
                else {
                    $('#def2').html(def);
                }
               
            }
            })
    })
    //au click sur la class soucription on charge formsub du service selectionné
    $('.subscription').on('click',function(){
        var target = $(this).data('target');
        $.ajax({
          type: 'POST',
          url: 'formSub',
          data: 'serv=' + target ,
          success: function(data){
            $('#root').html(data);
          }
        })
    })
})



