const form = document.querySelector('form');

form.addEventListener('submit', e => {
  e.preventDefault();
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const phone = document.getElementById('phone').value.trim();
  const date = document.getElementById('date').value;
  const time = document.getElementById('time').value;
  const guests = document.getElementById('guests').value;
  const reservation = { name, email, phone, date, time, guests };
  console.log(reservation);
});
let popup = document.getElementById("popup");
function openPopUp(){
  popup.classList.add("open-popup");
}
