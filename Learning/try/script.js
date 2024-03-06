const start =document.querySelector('#start');
const stop =document.querySelector('#stop');

start.addEventListener('click' ,()=>{

    const hexCode ='0123456789ABCDEF';
    let hex='#';
    for(let i =0;i<=5;i++){
        hex=hex+hexCode.charAt((Math.floor(Math.random()*16)));

    }
    const body =document.querySelector('body');
    body.style.backgroundColor=hex;
});

