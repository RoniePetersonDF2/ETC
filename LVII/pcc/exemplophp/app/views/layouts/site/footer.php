<!--INCIIO DOBRA RODAPE-->
<section class="main_optin_footer">
        <div class="main_optin_footer_content" >
            <header>
                <h1>Quer receber nosso conteúdo exclusivo? Assina nossa lista VIP :)</h1>
            </header>
            <article>
                <header>
                    <h2><a href="#" class="btn">Entrar para a lista VIP</a></h2>
                </header>
            </article>
        </div>
    </section>

    <section class="main_footer">
        <header>
            <h1>Quer saber mais?</h1>
        </header>
        <article class="main_footer_our_pages">
            <header>
                <h2>Nossas Páginas</h2>
            </header>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">A Escola</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </article>

        <article class="main_footer_links">
            <header>
                <h2>Links Úteis</h2>
            </header>
            <ul>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Aviso Legal</a></li>
                <li><a href="#">Termos de Uso</a></li>
            </ul>
        </article>

        <article class="main_footer_about">
            <header>
                <h2>Sobre o Projeto</h2>
            </header>
            <p>Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus projetos e entregar páginas que estejam dentro
                dos padrões da WEB seguindo as boas práticas</p>
        </article>
    </section>
    <footer class="main_footer_rights">
        <p>ETC - Todos os direitos reservados.</p>
    </footer>
    <!--FIM DOBRA RODAPE-->
</body>
<script>
    // Seleciona o link e a janela modal
    var link = document.querySelector('.modal-link');
    var modal = document.querySelector('.modal');
    var overlay = document.querySelector('.overlay');

    // Adiciona um listener de evento para o link
    link.addEventListener('click', function (event) {
        event.preventDefault(); // previne o comportamento padrão do link (navegar para outra página)

        overlay.style.display = 'block'; // exibe a camada escura
        modal.style.display = 'block'; // exibe a janela modal
    });

    // Adiciona um listener de evento para a camada escura
    overlay.addEventListener('click', function () {
        overlay.style.display = 'none'; // oculta a camada escura
        modal.style.display = 'none'; // oculta a janela modal
    });
</script>
</html>