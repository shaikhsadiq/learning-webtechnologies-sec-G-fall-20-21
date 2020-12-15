function vdt()
{
    let name = chkname();
    let email = chkemail();
    let gender = chkgender();
    let dob = chkdob();
    let blood = chkblood();
    let degree = chkdegree();

    if(!name == "" && !email == "" && !gender == "" && !dob == "" && !blood == "" && !degree == "")
    {       
	function i();	
    }


    else
    {
        alert('Field Empty');
    }

}

function chkname()
{
    let obj = document.getElementById('name').value;
    if(!obj == "")
    {
        return true;
    }
    else{
        return false;
    }
}

function chkemail()
{
    let obj = document.getElementById('email').value;
    if(!obj == "")
    {
        return true;
    }
    else{
        return false;
    }
}

function chkgender()
{
    let obj1 = document.getElementById('g1').value;
    let obj2 = document.getElementById('g2').value;
    let obj3 = document.getElementById('g3').value;
    let gen;

    if (!obj1 == "")
    {
        gen =obj1;
    }

    if (!obj2 == "")
    {
        gen =obj2;
    }

    if (!obj3 == "")
    {
        gen =obj3;
    }


    if(!gen == "")
    {
        return true;
    }
    else{
        return false;
    }
}

function chkdob()
{
    let obj = document.getElementById('dob').value;
    if(!obj == "")
    {
        return true;
    }
    else{
        return false;
    }
}

function chkblood()
{
    let obj = document.getElementById('blood').value;
    if(!obj == "")
    {
        return true;
    }
    else{
        return false;
    }
}

function chkdegree()
{
    let obj1 = document.getElementById('d1').value;
    let obj2 = document.getElementById('d2').value;
    let obj3 = document.getElementById('d3').value;
    let deg;

    if (!obj1 == "")
    {
        deg += obj1;
    }

    if (!obj2 == "")
    {
        deg +=obj2;
    }

    if (!obj3 == "")
    {
        deg +=obj3;
    }

    if(!deg == "")
    {
        return true;
    }
    else{
        return false;
    }
}


function i(){
    var name = document.getElementById('name').value;
	var xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'i.php?myname='+name, true);
	xhttp.send();

	var email = document.getElementById('email').value;
	var xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'i.php?myemail='+email, true);
	xhttp.send();

	var dob = document.getElementById('dob').value;
	var xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'i.php?mydob='+dob, true);
	xhttp.send();

    var blood = document.getElementById('blood').value;
	var xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'i.php?myblood='+blood, true);
	//xhttp.open('GET', 'i.php?mygen='+gender, true);
	
	
	//xhttp.open('GET', 'i.php?mydegree='+degree, true);
	xhttp.send();


}