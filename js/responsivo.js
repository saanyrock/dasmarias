function responsive() {
    if (window.innerWidth < 750) {
        $(".midia").hide("fast", "swing");
        $("#menu-cabecalho").hide("fast", "swing");
        $(".trigger").show("fast", "swing");
        $(".logo").addClass("LogoReduzida");



    } else if (window.innerWidth < 1000) {
        $(".trigger").hide("fast", "swing");
        $("#menu-cabecalho").show("fast", "swing");
        $(".logo").addClass("LogoReduzida");
        $("header").addClass("headerReduzido");
        $("#menu-cabecalho").addClass("menuReduzido");

    } else {
        $(".trigger").hide("fast", "swing");
        $("#menu-cabecalho").show("fast", "swing");
        $(".logo").removeClass("LogoReduzida");
        $("header").removeClass("headerReduzido");
        $("#menu-cabecalho").removeClass("menuReduzido");


    }

}
