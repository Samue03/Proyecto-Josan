let input = document.querySelector('#input-date'),
    input2 = document.querySelector('#input2-date'),
    lbl = document.querySelector('.lbl-date'),
    lbl2 = document.querySelector('.lbl-fecha');

input2.addEventListener('change', () => {
    lbl.style.transform = 'translateY(-150%)';
    input2.style.transform = 'translateX(-70%)';
    input2.style.color = 'rgb(38, 166, 154)';

});

input.addEventListener('change',()=>{
    lbl2.style.transform = 'translateY(-150%)';
    input.style.transform = 'translateX(-70%)';
    input.style.color = 'rgb(38, 166, 154)';
})