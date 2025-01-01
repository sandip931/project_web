let min=document.querySelector('.min-hand');
let sec=document.querySelector('.second-hand');
let startBtn=document.querySelector('.startBtn');
let stopBtn=document.querySelector('.stopBtn');
let resetBtn=document.querySelector('.resetBtn');
let minCount=0;
let secCount=0;
let interval;  
let startClick=false;
startBtn.addEventListener('click',()=>{
    if(!startClick){
        interval=setInterval(()=>{
            secCount++;
            if(secCount==60){
                secCount=0;
                minCount++;
            }
            // condition ? expression_if_true : expression_if_false;
            
            /*    
            (minCount < 10) = condition
            '0'+minCount = expression_if_true
            : = else
            minCount = expression_if_false
            */ 
           min.innerHTML=minCount<10?'0'+minCount:minCount;
           sec.innerHTML=secCount<10?'0'+secCount:secCount;
        },1000);
        startClick=true;
    }
});
stopBtn.addEventListener('click',()=>{
    clearInterval(interval);
    startClick=false;
});
resetBtn.addEventListener('click',()=>{
    clearInterval(interval);
    minCount=0;
    secCount=0;
    min.innerHTML='00';
    sec.innerHTML='00';
    startClick=false;
});