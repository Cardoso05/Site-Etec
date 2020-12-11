jQuery(document).ready(function() {  
    // Faz animação para subir
    jQuery('.voltar-ao-topo').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 3000);
    })
});

