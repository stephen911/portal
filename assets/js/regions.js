// $(document).ready(function(){
// $(".all").hide();
// });


const el = document.getElementById('custom-select8');

// const all = document.getElementsByClassName('all');
const GreaterAccra = document.getElementById('Greater Accra');
// const tertiary = document.getElementById('tertiary2');
const AHAFO = document.getElementById('Ahafo Region');
const BONOEAST = document.getElementById('Bono East Region');
const ASHANTI = document.getElementById('Ashanti Region');
const CENTRAL = document.getElementById('Central Region');
const BONO = document.getElementById('Bono Region');
const NORTHEAST = document.getElementById('North East Region');
const NORTHERN = document.getElementById('Northern Region');
const EASTERN = document.getElementById('Eastern Region');
const UPPEREAST = document.getElementById('Upper East Region');
const SAVANNAH = document.getElementById('Savannah Region');
const OTI = document.getElementById('Oti Region');
const VOLTA= document.getElementById('Volta Region');
const UPPERWEST = document.getElementById('Upper West Region');
const WESTERNNORTH = document.getElementById('Western North Region');
const WESTERN = document.getElementById('Western Region');


el.addEventListener('change', function handleChange(event) {

  if (event.target.value == 'Greater Accra') {
    GreaterAccra.style.display = 'block';
  } else {
    GreaterAccra.style.display = 'none';
  }
  if (event.target.value == 'Ahafo Region') {
    AHAFO.style.display = 'block';
  } else {
    AHAFO.style.display = 'none';
  }
  if (event.target.value == 'Bono East Region') {
    BONOEAST.style.display = 'block';
  } else {
    BONOEAST.style.display = 'none';
  }if (event.target.value == 'Ashanti Region') {
    ASHANTI.style.display = 'block';
  } else {
    ASHANTI.style.display = 'none';
  }if (event.target.value == 'Central Region') {
    CENTRAL.style.display = 'block';
  } else {
    CENTRAL.style.display = 'none';
  }if (event.target.value == 'Bono Region') {
    BONO.style.display = 'block';
  } else {
    BONO.style.display = 'none';
  }if (event.target.value == 'North East Region') {
    NORTHEAST.style.display = 'block';
  } else {
    NORTHEAST.style.display = 'none';
  }if (event.target.value == 'Northern Region') {
    NORTHERN.style.display = 'block';
  } else {
    NORTHERN.style.display = 'none';
  }if (event.target.value == 'Eastern Region') {
    EASTERN.style.display = 'block';
  } else {
    EASTERN.style.display = 'none';
  }if (event.target.value == 'Upper East Region') {
    UPPEREAST.style.display = 'block';
  } else {
    UPPEREAST.style.display = 'none';
  }if (event.target.value == 'Savannah Region') {
    SAVANNAH.style.display = 'block';
  } else {
    SAVANNAH.style.display = 'none';
  }if (event.target.value == 'Oti Region') {
    OTI.style.display = 'block';
  } else {
    OTI.style.display = 'none';
  }if (event.target.value == 'Volta Region') {
    VOLTA.style.display = 'block';
  } else {
    VOLTA.style.display = 'none';
  }if (event.target.value == 'Upper West Region') {
    UPPERWEST.style.display = 'block';
  } else {
    UPPERWEST.style.display = 'none';
  }if (event.target.value == 'Western North Region') {
    WESTERNNORTH.style.display = 'block';
  } else {
    WESTERNNORTH.style.display = 'none';
  }if (event.target.value == 'Western Region') {
    WESTERN.style.display = 'block';
  } else {
    WESTERN.style.display = 'none';
  }
});



