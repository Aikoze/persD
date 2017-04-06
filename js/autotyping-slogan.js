document.addEventListener('DOMContentLoaded', function(){
      Typed.new('.element', {
        strings: ["4 news, 10 lignes...", "Une perspective."],
        stringsElement: null,
        // vitesse d'écriture
        typeSpeed: 80,
        // temps avant lancement
        startDelay: 300,
        // vitesse d'effacement
        backSpeed: 30,
        // temps avant effacement
        backDelay: 500,
        // loop
        loop: true,
        // false = infini, 5 = 5 tours
        loopCount: false,
        // curseur (fait en css)
        showCursor: false,
        // curseur
        cursorChar: "|",
        // null == texte
        attr: null,
        // html ou text
        contentType: 'text',
      });
  });