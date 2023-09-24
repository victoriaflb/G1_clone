<div class="content" id="conteudo2">
    <section class="container">
        <h1>SEJA NOSSO CLIENTE</h1>
        <div class="info">
            <p>
                <em>Por
                    <link>Fulaninho</link>
                </em>
            </p>
            <p><em>João Pessoa, 23:00.</em></p>
    
            <img src="./assets//possessed-photography-HuE1cJo-x34-unsplash.jpg" alt="">
        </div>
    
        <div class="texto">
    
            <p>
                O mundo atual está passando por uma revolução tecnológica sem precedentes, que está redefinindo a forma como vivemos, trabalhamos e nos relacionamos. Essa revolução está sendo impulsionada por uma série de inovações disruptivas que estão moldando o presente e o futuro da humanidade.
    
                Uma das principais áreas de inoFvação é a inteligência artificial (IA). Algoritmos avançados e máquinas inteligentes estão sendo desenvolvidos para realizar tarefas que antes eram exclusivas de seres humanos. Desde a automação de processos industriais até a assistência médica personalizada, a IA está transformando indústrias inteiras e criando novas oportunidades.
    
                A robótica também desempenha um papel fundamental nessa revolução. Robôs autônomos estão sendo usados em fábricas para aumentar a eficiência da produção, enquanto robôs de serviço estão se tornando comuns em hospitais, hotéis e até mesmo em nossas casas. Esses avanços estão redefinindo a maneira como interagimos com o mundo ao nosso redor.
    
                A Internet das Coisas (IoT) está conectando dispositivos e objetos do cotidiano à internet, permitindo uma coleta de dados em tempo real e automação de processos. 
            </p>
    
           
    
        </div>
    </section>

</div>

<script>
    // Função para esconder todos os conteúdos
    function hideAllContent() {
        const contents = document.querySelectorAll('.content');
        contents.forEach(content => {
            content.style.display = 'none';
        });
    }

    // Adicione event listeners para cada opção do menu
    document.getElementById('menu-opcao1').addEventListener('click', function () {
        hideAllContent();
        document.getElementById('conteudo1').style.display = 'block';
    });

    document.getElementById('menu-opcao2').addEventListener('click', function () {
        hideAllContent();
        document.getElementById('conteudo2').style.display = 'block';
    });

    // Chame hideAllContent() para ocultar todos os conteúdos inicialmente
    hideAllContent();
</script>