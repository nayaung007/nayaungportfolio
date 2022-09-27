const btns=document.querySelectorAll('.btn');
const storeImages=document.querySelectorAll('.store-item');

for(i=0; i<btns.length; i++){
  btns[i].addEventListener("click",(e) =>{
    e.preventDefault();
    const filter=e.target.dataset.filter;
    console.log(filter);
    storeImages.forEach((item)=>{
      if(filter=='all'){
        item.style.display='block'
      }else{
        if(item.classList.contains(filter)){
           item.style.display='block'
        }else{
          item.style.display='none';
        }
      }
    })
    })
}