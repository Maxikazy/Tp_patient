
let jour = document.querySelector('.jour');
let mois = document.querySelector('.mois');
let annees = document.querySelector('.annees');

let listemois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre" ]

for(let i = 0; i < listemois.length; i++) {
  let option = document.createElement('option');
  option.textContent = listemois[i];
  mois.appendChild(option);
}
populateDays(mois.value);
populateYears();

function populateDays(month) {
  while(jour.firstChild){
    jour.removeChild(jour.firstChild);
  }

  let dayNum;

  

  if(month === 'Janvier' || month === 'Mars' || month === 'Mai' || month === 'Juillet' || month === 'Août' || month === 'Octobre' || month === 'Décembre') {
    dayNum = 31;
  } else if(month === 'Avril' || month === 'Juin' || month === 'Septembre' || month === 'Novembre') {
    dayNum = 30;
  } else {

    let year = annees.value;
    let leap = new Date(year, 1, 29).getMonth() == 1;
    dayNum = leap ? 29 : 28;
  }



  for(i = 1; i <= dayNum; i++) {
    let option = document.createElement('option');
    option.textContent = i;
    jour.appendChild(option);
  }
}

  function populateYears() {
    let date = new Date();
    let year = date.getFullYear();

    for(let i = 0; i <= 100; i ++) {
      let option = document.createElement('option');
      option.textContent = year-i;
      annees.appendChild(option);
    }
  }

  annees.onchange = function() {
    populateDays(mois.value);
  }


   mois.onchange = function() {
     populateDays(mois.value);
   }