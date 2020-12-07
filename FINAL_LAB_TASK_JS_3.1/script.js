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

function femail()
{
    let form=document.querySelector('#form-email');
    console.log(form)
    let inp=document.querySelector('#email');
    console.log(inp)

    let inf=document.querySelector('.info');
    form.addEventListener('submit',(e)=>
{
    e.preventDefault();
    if(inp.value!=='')
    {
            if(inp.value.indexOf('@')!=-1)
            {
                inf.innerHTML='You name '+inp.value;
            }
            else
            {
                inf.innerHTML="invalid email";
            }
    }
    else
    {
        inf.innerHTML="invalid email";
    }
})
}

function fgender()
{
    let form=document.querySelector('#form-gender');

    let inf=document.querySelector('.info');

    let c=0;
    console.log(form.gender);
    form.addEventListener('submit',(e)=>
    {
        e.preventDefault();
        for(let i=0;i<form.gender.length;i++)
        {
            if(form.gender[i].checked==true)
            {
                c=c+1;
            }
        }
        if(c==1)
        {
            inf.innerHTML="Your gender is "+form.gender.value;
        }
        else
        {
            inf.innerHTML="please chose a gender ";
        }
    })

}

function fdob()
{
    let form=document.querySelector('#form-date');

    let inf=document.querySelector('.info');

    form.addEventListener('submit',(e)=>
    {
        e.preventDefault();
        console.log(form.day.value)
        console.log(form.month.value)
        console.log(form.year.value)

        //console.log(e.target);
        if(form.day.value!='' && form.month.value!='' && form.year.value!='' && (form.day.value>0 && form.day.value<=31) && (form.month.value>0 && form.month.value<=12) && (form.year.value>1910 && form.year.value<=2017))
        {
            inf.innerHTML=`Your DOB ${form.day.value}/${form.month.value}/${form.year.value}`;
        }
        else
        {
            inf.innerHTML="Invalid date of Birth";
        }
    })
}