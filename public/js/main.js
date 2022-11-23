const $ = document.querySelector.bind(document);
let contentHide = $('#content-card');

const adicionarRegistro = () => {
    return (
        contentHide.classList.remove('card-invisible')
    );
};

const cancelarRegistro = () => {
    return (
        contentHide.classList.add('card-invisible')
    );
}
