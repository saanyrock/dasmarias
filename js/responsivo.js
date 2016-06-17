function responsive() {
    if (window.innerWidth < 1000) {
        $(".logo").addClass("LogoReduzida");
        $("header").addClass("headerReduzido");
        $("#menu-cabecalho").addClass("menuReduzido");

    } else {
        $(".logo").removeClass("LogoReduzida");
        $("header").removeClass("headerReduzido");
        $("#menu-cabecalho").removeClass("menuReduzido");

    }

}
