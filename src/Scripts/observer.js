const cards = document.querySelectorAll('.cards'); 
const observer = new IntersectionObserver(entries => { 
  entries.forEach(entry => { 
    entry.target.classList.toggle("show", entry.isIntersecting)
    /*if (entry.isIntersecting) observer.unobserve(entry.target) //om vi vill slute observa entry efter att de kommit in i "synfältet"*/
  })
}, {
  threshold: 1, 
  //rootMargin: "-100px", //Gör så att containern är 100px mindre än vad den egentligen är. Drar in marginalen nere och uppe OBS vi vill oftast att laddningen ska ske innan den kommer in i synfältet om det är krävande network saker, sätt då till ett posetivt värde
})

cards.forEach(card => { 
  observer.observe(card);
})


/*--------------------------------        ----------------------------------*/

const backgroundCards = document.querySelectorAll('.cards');

backgroundCards.forEach(card => {
  const cardValue = card.getAttribute('value');
  if (cardValue === 'Yrgopelago') {
    console.log(cardValue);
    card.style.backgroundImage = "url('src/Assets/screenshots/Yrgopelagoscreenshot.png')";
  }else if(cardValue === "Retronautica"){
    card.style.backgroundImage = "url('src/Assets/screenshots/retroscreenshot.png')";
  }else if(cardValue === "pong-game"){
    card.style.backgroundImage = "url('src/Assets/screenshots/pongscreenshot.png')";    
  }else if(cardValue === "Protech"){
    card.style.backgroundImage = "url('/src/Assets/screenshots/Protechscreenshot.png')";
  }else if(cardValue === "Parallax-project"){
    card.style.backgroundImage = "url('/src/Assets/screenshots/halloweenscreenshot.png')";
  }else if(cardValue === 'SomeTeams'){
    card.style.backgroundImage = "url('/src/Assets/screenshots/someteamsscreenshot.png')";
  }else if(cardValue === 'snack-o-mat'){
    card.style.backgroundImage = "url('/src/Assets/screenshots/snacscreenshot.png')";
  }else if(cardValue === "OpenAPI"){
    card.style.backgroundImage = "url('/src/Assets/screenshots/openscreenshot.png')";
  }else if(cardValue === 'theRoom'){
    card.style.backgroundImage = "url('/src/Assets/screenshots/roomscreenshot.png')";
  }
  card.style.backgroundSize = "cover";

});

/*--------------------------------        ----------------------------------*/