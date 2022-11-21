function mudaNavBar(){
    var nav = document.querySelector("nav");
    window.addEventListener('scroll', function(){
        // COMEÇAR TRANSPARENTE
        if(window.scrollY > 0) {nav.classList.add('navbar'); console.log(1)}
        else {nav.classList.remove('navbar2'); console.log(2)}

        // CASO VOLTE AO SCROLL 0, A NAV VOLTA A SER TRANSPARENTE
        if(window.scrollY = 0){nav.classList.remove('navbar');}
        else {nav.classList.add('navbar2');}
    });
    console.log("foi?");
};

mudaNavBar();