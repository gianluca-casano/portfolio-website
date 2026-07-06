
/* --------------------------------------------------------------
  Menu mobile
----------------------------------------------------------------- */
let hamburger = document.querySelector('.header__hamburger');

hamburger.addEventListener("click", function() {
  document.body.classList.toggle('menu-open');      //classe menu-open aggiunta al body per animare più elementi insieme
});


/* --------------------------------------------------------------
  ADD CLASS ON SCROLL - BODY
----------------------------------------------------------------- */
window.addEventListener('scroll', function(e) {
  if(window.scrollY > 550){
    document.body.classList.add('scroll-down');
  } else {
    document.body.classList.remove('scroll-down');
  }
});


/* --------------------------------------------------------------
  Scroll to (CHI SIAMO - CONTATTAMI)
----------------------------------------------------------------- */
let links = document.querySelectorAll(".header__menu li a");

links.forEach((link, i) => {
  
  link.addEventListener('click', function(e){
    
    let href = this.getAttribute("href");
    //console.log(selector);
    
    if(href.startsWith("#")){
      e.preventDefault();

      // NodeList - per singolo elemento
      let selectorElement = document.querySelectorAll(href);
      // console.log(selectorElement[0].offsetTop);

      window.scroll({
        top: selectorElement[0].offsetTop - 120,
        behavior: "smooth"
      });
    }
    
    document.body.classList.remove("menu-open");

  });

});


/* --------------------------------------------------------------
  Scroll to (CTA TIMELINE PER SEZIONE CONTATTAMI)
----------------------------------------------------------------- */
let cta = document.querySelectorAll(".container-button a");

cta.forEach((cta, i) => {
  
  cta.addEventListener('click', function(e){
    
    let selector = this.getAttribute("href");

    // se l'href esiste e inizia direttamente con l'ancora...
    if (selector && selector.startsWith("#")) {
      
      // NodeList - per singolo elemento
      let selectorElement = document.querySelectorAll(selector);
      
      // Verifica dell'effettiva esistenza dell'href
      if (selectorElement.length > 0) {
        e.preventDefault();

        window.scroll({
          top: selectorElement[0].offsetTop - 120,
          behavior: "smooth"
        });
      }
    } // NOTA: se il primo if fallisce, il link cta porta normalmente in altra pagina

  });
});


/* --------------------------------------------------------------
  ARROW UP
----------------------------------------------------------------- */
let arrow_up = document.querySelector('.container-arrow-up');

if(arrow_up) {
  arrow_up.addEventListener('click', function(){

    let header_container = document.querySelector(".header-container");

    window.scroll({
      top: header_container.offsetTop,
      behavior: "smooth"
    });

  });
}


/* --------------------------------------------------------------------------------------------
  Animation
-------------------------------------------------------------------------------------------- */

ScrollTrigger.batch(".fade-in", {
  start: "top 90%",
  onEnter: (elements, triggers) => {
    gsap.to(elements, {opacity: 1, stagger: 0.3, y: 0, duration: 0.5});
  }
});

/* Scroll Trigger (batch) - fade up elementi */
ScrollTrigger.batch(".fade-up", {
    start: "top 90%",
    onEnter: (elements, triggers) => {
      gsap.to(elements, {opacity: 1, stagger: 0.3, y: 0, duration: 1.2, ease: "Power2.out"});
    }
});

ScrollTrigger.batch(".enter-left", {
  start: "top 90%",
  onEnter: (elements, triggers) => {
    gsap.to(elements, {opacity: 1, x:0, duration: 1, ease: "Power2.out"});
  }
});


ScrollTrigger.batch(".zoom-in", {
  start: "top 90%",
  onEnter: (elements, triggers) => {
    gsap.to(elements, {opacity: 1, scale: 1.7, duration: 1});
  }
});


/* --------------------------------------------------------------
  MODALE PER RICHIESTA CV + Animazioni Overlay e Modale
----------------------------------------------------------------- */
const openModal_btn = document.getElementById("open-modal");
const closeModal_btn = document.getElementById("close-modal");
const modalOverlay = document.getElementById("modal-overlay");
const modal = document.getElementById("modal");
const body = document.body;

// se esiste openModal_btn...
if(openModal_btn) {
  // Funzione di utilità per bloccare il touch su mobile con la Modale aperta
  function bloccaScrollMobile(e) {
    // Se l'utente tocca l'overlay, impedisci lo scroll della pagina sotto
    e.preventDefault();
  }

  /* Animazione della Modale (Apertura / Chiusura) - Timeline GSAP --> si utilizzano le stesse variabili const di "MODALE PER RICHIESTA CV" */

  // 1. Creiamo la Timeline per la modale (inizialmente in pausa)
  const modalTimeline = gsap.timeline({
    paused: true,                             // non fa partire subito la timeline (in pausa)
    onReverseComplete: () => {                // al completamento del caricamento inverso della timeline (animazioni al contrario)
      
      // Quando la chiusura finisce, ripristiniamo lo scroll del body
      body.style.overflow = "auto";

      // FIX MOBILE: Quando la modale si chiude, riattiviamo i gesti sul telefono (scroll)
      window.removeEventListener('touchmove', bloccaScrollMobile, { passive: false });
    }
  });

  // 2. Definiamo i passaggi dell'animazione
  modalTimeline
    // A. L'overlay fa un fade-in fluido e riattiva i click su di esso
    .to(modalOverlay, {
      duration: 0.4,
      opacity: 1,
      pointerEvents: "auto",
      ease: "power2.out"
    })
    // B. Il box bianco salta fuori con un leggero effetto elastico (back.out) e un fade-in
    // Usiamo il valore '-=0.20' per far accavallare leggermente l'animazione all'overlay
    .fromTo(modal, {
      opacity: 0,
      scale: 0.85,
      top: "55%"
    },
    {
      duration: 0.5,
      opacity: 1,
      scale: 1,
      top: "50%",             // Torna al centro perfetto impostato dal transform CSS
      ease: "back.out(1.5)"   // L'effetto elastico che cattura l'attenzione
    },
    "-=0.20"
  );

  // 3. Evento al Click su DOWNLOAD (Apertura)
  openModal_btn.addEventListener('click', () => {
    body.style.overflow = "hidden";   // Blocca lo scroll subito
    modalTimeline.play();             // Avvia la timeline in avanti
  });

  // 4. Evento al Click sulla X (Chiusura)
  closeModal_btn.addEventListener("click", () => {
    body.style.overflow = "auto";     // Permette nuovamente lo scroll
    modalTimeline.reverse();          // Riproduce la timeline al contrario
  });

  // Chiude la modale se l'utente clicca fuori dal box bianco (sull'overlay marrone)
  modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {  // se il punto esatto cliccato dall'utente (e.target) è l'overlay...
      modalTimeline.reverse();
    }
  });

}

/* Hero Animation
--------------------------------------------------------------------*/

// se l'elemento con classe .enter-right esiste...
if(document.querySelectorAll(".enter-right").length > 0) {
  gsap.to(".enter-right", { opacity: 1, x: 0, duration: 1, ease: "power2.out" });
}


if(document.querySelectorAll(".text-reveal").length > 0) {
  gsap.to(".text-reveal", { clipPath: "polygon(0 0, 100% 0, 100% 100%, 0 100%)", y: 0, duration: 1, stagger: 0.3, ease: "power2.out" });
}
