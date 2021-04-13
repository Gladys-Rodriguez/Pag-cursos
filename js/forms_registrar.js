function alumnos(){
    document.getElementById('alumnos').style.display="block";
    document.getElementById('profes').style.display="none";
    document.getElementById('academia').style.display="none";
    document.getElementById('gerencia').style.display="none";
}

function profes(){
    document.getElementById('alumnos').style.display="none";
    document.getElementById('profes').style.display="block";
    document.getElementById('academia').style.display="none";
    document.getElementById('gerencia').style.display="none";
}

function academia(){
    document.getElementById('alumnos').style.display="none";
    document.getElementById('profes').style.display="none";
    document.getElementById('academia').style.display="block";
    document.getElementById('gerencia').style.display="none";
}

function gerencia(){
    document.getElementById('alumnos').style.display="none";
    document.getElementById('profes').style.display="none";
    document.getElementById('academia').style.display="none";
    document.getElementById('gerencia').style.display="block";
}