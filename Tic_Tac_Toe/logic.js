let cells=document.querySelectorAll(".cell");
let resetBtn =  document.querySelector("#resetBtn");
let winnerStatus = document.querySelector('#winnerName');
let Xturn = true;
let countClick=parseInt(0);
const winCondt=[
    [0,1,2],
    [0,3,6],
    [0,4,8],
    [1,4,7],
    [2,4,6],
    [2,5,8],
    [3,4,5],
    [6,7,8]
];
cells.forEach((cell)=>{
    cell.addEventListener('click',()=>{
        ++countClick;
        if(Xturn){
            cell.style.color='#aa4848';
            cell.innerText='X';
            Xturn = false;
        } else{
            cell.style.color='white';
            cell.innerText='O';
            Xturn = true;
        }
        cell.disabled = true;
        checkWinner(countClick);
    })
});

function checkWinner(countClick){
    for(i of winCondt){
        let pos1val=cells[i[0]].innerText;
        let pos2val=cells[i[1]].innerText;
        let pos3val=cells[i[2]].innerText;
        
        if(pos1val != '' && pos2val != ''&& pos3val != ''){
           if(pos1val == pos2val  && pos2val ==pos3val){
            let winner=`${pos1val} is winner`;
            winnerStatus.innerText=winner;
            dissableCell();
            break; // break is used to not start the last if statement which will show DRAW.
           }
        }if(countClick==9){
            winnerStatus.innerText=` DRAW !!! `;
        }
        
    }
}

resetBtn.addEventListener('click',()=>{
    window.location.reload();
})

function dissableCell(){
    for(let cell of cells){
        cell.disabled = true;
    }
}