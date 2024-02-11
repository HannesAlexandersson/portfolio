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


// LAZY LOADER observerar enbart sista saken i listan
/*
const lastCardObserver = new IntersectionObserver(entries => {
  const lastCard = entries[0] 
  if(!lastCard.isIntersecting) return //om sista kortet är i synfältet så kallar vi på metoden
  loadNewCards()
  lastCardObserver.unobserve(lastCard.target) //när vi har observat sista kortet vill vi unobserva det, laddningen är klar och vi behöver den inte längre
  lastCardObserver.observe(document.querySelector(".cards:last-child"))  // eftersom vi får ett nytt lastcard av funktionen vill vi observa det istället
}, {})

lastCardObserver.observe(document.querySelector(".cards:last-child"))
cards.forEach(card => {
  observer.observe(card);
})

const cardContainer = document.querySelector(".card-container") // vi måste definera cardContainer
function loadNewCards() {
  for(let i = 0; i < cardContainer.length; i++) { //cardContainer.length är alltså storleken på card-container vad den än är, så ange den storleken som din card-container råkar vara för närvarande
    const card = document.createElement("div")
    card.txtContent = "New Card"
    card.classList.add("Card")
    observer.observe(card)
    cardContainer.append(card)
  }
}
*/