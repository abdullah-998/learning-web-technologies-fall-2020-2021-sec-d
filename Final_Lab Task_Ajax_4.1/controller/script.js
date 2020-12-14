function ajax()
{
    let req= new XMLHttpRequest();
    req.open('GET','../controller/RegCheck.php',true);
    req.send();

    let inf=document.querySelector('#info')

    req.addEventListener('readystatechange',()=>
    {
        if(req.readyState==4 && req.status==200)
        {
            inf.innerHTML=req.responseText;
        }
    })
}

function ajax2()
{

    let inf=document.querySelector('#info')

    let pass=document.querySelector('#pass')
    let cpass=document.querySelector('#cpass')

    if(pass!=cpass)
    {
        inf.innerHTML='Password not match';
    }
    else
    {
        inf.innerHTML=''
    }

}

function nameCheck()
{
    let name=document.querySelector('#name');

    let inf=document.querySelector('#info')
    if(name.nodeValue.length<2)
    {
        inf.innerHTML='name is too short'
    }
    else
    {
        inf.innerHTML=""
    }
}

function alluser()
{
    let req= new XMLHttpRequest();
    req.open('GET','../controller/alluser.php',true);
    req.send();

    let inf=document.querySelector('#info')

    req.addEventListener('readystatechange',()=>
    {
        if(req.readyState==4 && req.status==200)
        {
            inf.innerHTML=req.responseText;
        }
    })
}