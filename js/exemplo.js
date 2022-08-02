$(function () {
    var atual = -1;
    var maximo = $('.box-especialidades').length - 1;
    var timer;
    var animacaoDelay = 2;

    executarAnimacao();
    function executarAnimacao(params) {
        $('.box-especialidades').hide();
        time = setInterval(logicaAnimacao,animacaoDelay*1000);

        function logicaAnimacao(){
            
            atual++;
            if (atual > maximo) {
                clearInterval(timer);
                return false;
            }
            //alert('chamando intervalo');

            $('.box-especialidades').eq(atual).fadeIn();
        }
    }
})