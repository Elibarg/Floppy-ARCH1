const menuBotao = document.querySelector('#menu-botao');
const menu = document.querySelector('#menu');
menu.style.display = 'none';
menuBotao.addEventListener('click', () => {
    if (menu.style.display === 'none') {
        menu.style.display = 'flex';
        menuBotao.style.display = 'none'; // Oculta o botão/imagem
    } else {
        menu.style.display = 'none';
    }
});
