$(document).ready(function(){
    $('.money').mask('000.000.000,00', {reverse: true});
    $('.date').mask('00/00/0000');
});

$(document).ready(function() {
    if(window.location.href.indexOf('#modal-receita') != -1) {
      $('#modal-receita').modal('show');
    }
});

$(document).ready(function() {
    if(window.location.href.indexOf('#modal-categoria') != -1) {
      $('#modal-categoria').modal('show');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function () {
        $('#divalert').fadeOut().empty();
    }, 3000);
}, false);

if(document.getElementById("receita").checked) {
    document.getElementById('receitaHidden').disabled = true;
}