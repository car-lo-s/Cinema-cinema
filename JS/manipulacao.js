function cad(){
    let cad = document.querySelector('.cadastro')
    cad.style.display='flex'
}

function edit(){
    let cad = document.querySelector('.cadastro')
    cad.style.display='none'
}

function apagar(a){
    let tela = document.querySelector('.tela-apagar')
    tela.style.display ='flex'
}
function editar(a){
    let id = document.querySelector("input[name=identificacao]").value = a
    let info = document.querySelector('.tela-editar')
    info.style.display = 'flex'
    let cad = document.querySelector('.cadastro')
    cad.style.display='none'
}