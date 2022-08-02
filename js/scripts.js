 /*$(function(){
   
    var mensagem = 'Olá Mundo';
    console.log(mensagem);
    alert(mensagem);
    
})*/

$(function(){
    //aqui vai todo nosso código de javascritp
    $('nav.mobile').click(function(){
        //o que vai aconter quando clicarmos na nav.mobile!
        //mesma seleção utilizada no css
        var listaMenu = $('nav.mobile ul');

        //abrir menu através do fadein
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }else{
            listaMenu.fadeOut();
        }
        */
        
        //abrir ou fechar sem efeitos
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.show();
            listaMenu.css('display','block');
        }else{
            listaMenu.hide();
        }
        */

        //abrir ou fechar atraves do css
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.css('display','block');
        }else{
            listaMenu.css('display','none');
        }
        */

       //fa fa-window-close
        
        if(listaMenu.is(':hidden') == true){
            var icone = $('.botao-menu-mobile i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-window-close')
            listaMenu.slideToggle();
        }else{
            var icone = $('.botao-menu-mobile i');
            icone.removeClass('fa-window-close');
            icone.addClass('fa-bars')
            listaMenu.slideToggle();
        }

        

    });

    if ($('target').length > 0) {

        var elemento = '#'+ $('target').attr('target');

        var divScroll = $(elemento).offset().top;

        $('html,body').animate({scrollTop:divScroll}, 1200);
        
    }
    carregarDinamico();
    function carregarDinamico() {
        $('[realtime]').click(function(){
            var pagina = $(this).attr('realtime');
            $('.container-principal').hide();
            $('.container-principal').load(include_path+'pages/'+pagina+'.php');
            
            initialize();
            addMarker(-22.903608642161792, -43.266081366864526, "", "Minha casa", undefined, false);
            $('.container-principal').fadeIn(1000);
            return false;
        })
    }



})