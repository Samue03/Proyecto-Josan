const datepicker = document.querySelector('.datepicker'),
  lbl = document.querySelector('.lbl-fecha')


datepicker.addEventListener('change', () => {
  lbl.style.transform = 'translateY(-150%)';
  datepicker.style.transform = 'translateX(-144%)';
  datepicker.style.color = 'rgb(38, 166, 154)';
});