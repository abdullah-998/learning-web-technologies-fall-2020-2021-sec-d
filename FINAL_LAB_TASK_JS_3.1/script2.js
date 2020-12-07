//blood group
let value;
function fchng()
{
    value=document.querySelector('#bgs').value;
    console.log(value)
}

function fbg()
{
    let form=document.querySelector('#form-bg');

    let inf=document.querySelector('.info');
   console.log('ok')
    form.addEventListener('submit',(e)=>
    {
        e.preventDefault();
        if(value!='')
        {
            inf.innerHTML='Your blood Group is '+value;
        }
        else
        {
            inf.innerHTML='Must select one blood group';
        }
    })
}

function fpic()
{
    let form=document.querySelector('#form-pic');
    
    let inp=document.querySelector('#img');

    let inf=document.querySelector('.info');

    console.log(form.id.value);
    form.addEventListener('submit',(e)=>
    {
        e.preventDefault();
        if(form.id.value!=='' && form.id.value>0 && inp.value!=null)
        {
            inf.innerHTML='Your id is '+form.id.value+'. Profile picture uploaded succesfully...';
        }
        else
        {
            inf.innerHTML="invalid Id or image is not selected<br>";
        }
    })
}
