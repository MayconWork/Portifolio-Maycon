const buttomShowProject = document.querySelector('.btn-mostrar-projetos');

const inactiveProjects = document.querySelectorAll('.projeto:not(.ativo)');

buttomShowProject.addEventListener('click', () => {
     mostrarMaisProjetos();

    esconderBotao();
})

function esconderBotao() {
    buttomShowProject.classList.add("remover");
}

function  mostrarMaisProjetos() {
    inactiveProjects.forEach((inactiveProject) => { inactiveProject.classList.add('ativo');
    });
}