//name
function fname()
{
    let form=document.querySelector('#form-name');
    console.log(form)
    let inp=document.querySelector('#name');
    console.log(inp)

    let inf=document.querySelector('.info');
    form.addEventListener('submit',(e)=>
{
    e.preventDefault();
    if(inp.value!=='')
    {
        if(inp.value.length>=2)
        {
            if(typeof inp.value[0]!==Number)
            {
                inf.innerHTML='You name '+inp.value;
            }
            else
            {
                inf.innerHTML="invalid name";
            }
        }
        else
        {
            inf.innerHTML="invalid name";
        }
    }
    else
    {
        inf.innerHTML="invalid name";
    }
})
}

///email

