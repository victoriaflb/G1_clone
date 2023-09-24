<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo</title>
    <link rel="stylesheet" href="./index.php">
</head>
<body>
    


    
    <section class="containerproje" id="imagem1">
        <div class="slide-container active">
            <div class="slide">
             <div class="contentproje" id="mudar1">
               <h3>Metaverso</h3>
               <br>
               <p>O metaverso é um conceito em rápido crescimento que se refere a um espaço virtual e tridimensional compartilhado, onde os indivíduos podem interagir, socializar e colaborar em um ambiente digital. É uma extensão da realidade virtual, onde os usuários podem criar avatares e explorar mundos virtuais diversos, que variam desde jogos e entretenimento até espaços educacionais e comerciais. O metaverso está se tornando cada vez mais relevante à medida que tecnologias como realidade virtual, realidade aumentada e inteligência artificial evoluem, criando novas oportunidades para experiências online imersivas e interconectadas. É uma visão do futuro onde as fronteiras entre o mundo físico e o digital se tornam cada vez mais fluidas, transformando a maneira como trabalhamos, nos divertimos e nos relacionamos.</p>
               <a href="https://ftd.com.br/" class="bntproj">Saiba mais</a>
             </div>
            </div>
        </div>
    
        <div class="slide-container" id="imagem2">
            <div class="slide">
             <div class="contentproje">
               <h3>Castelo Animado (Howl's Moving)</h3>
               <br>
               <p>O Castelo Animado" (título original "Howl's Moving Castle") é um filme de animação japonês produzido pelo Studio Ghibli e dirigido por Hayao Miyazaki. O filme é baseado no romance homônimo de Diana Wynne Jones.
    
    A história gira em torno de Sophie, uma jovem que, por um encanto misterioso, é transformada em uma idosa. Em busca de uma cura para sua maldição, ela encontra o Castelo Móvel do mago Howl, um edifício mecânico e mágico que anda pelas terras. Dentro do castelo, Sophie conhece Howl e outros personagens peculiares, incluindo um demônio do fogo chamado Calcifer e um espantalho chamado Turnip Head.
    
    O filme explora temas de magia, amor, identidade e guerra em um cenário encantador e fantástico. À medida que Sophie desvenda os segredos do castelo e de Howl, ela se envolve em uma jornada repleta de aventuras e descobertas. "O Castelo Animado" é conhecido por sua animação deslumbrante, personagens carismáticos e uma narrativa emocionante que cativa espectadores de todas as idades. É uma obra-prima do cinema de animação que encanta o público com sua imaginação e profundidade.</p>
               <a href="https://ftd.com.br/" class="bntproj">Saiba mais</a>
             </div>
            </div>
        </div>
        
        <div class="slide-container" id="imagem3">
            <div class="slide">
             <div class="contentproje">
               <h3>Os benefícios de fazer academia</h3>
               <br>
               <p>Fazer academia oferece uma série de benefícios significativos para a saúde física e mental. Além de ajudar no desenvolvimento muscular e na melhoria da composição corporal, a prática regular de exercícios físicos promove a saúde cardiovascular, fortalece os ossos e articulações, e contribui para a manutenção de um peso saudável. Além disso, a academia é um ambiente propício para o alívio do estresse e da ansiedade, ajudando a melhorar o bem-estar emocional. Aumenta a resistência, a flexibilidade e a capacidade aeróbica, resultando em uma melhor qualidade de vida. Além disso, a atividade física também promove a liberação de endorfinas, neurotransmissores que proporcionam sensações de felicidade e satisfação. Portanto, frequentar a academia não apenas fortalece o corpo, mas também nutre a mente, proporcionando uma vida mais saudável e equilibrada.</p>
               <a href="https://www.escolasconectadas.org.br/cursos" class="bntproj">Saiba mais</a>
             </div>
            </div>
        </div>
    
    
        
        <div id="prev" onclick="prev()"> < </div>
        <div id="next" onclick="next()"> > </div>
    </section>
    <div class="content" id="conteudo2">
    
    </div>
    
    
    <div class="propaganda">
        <a href="https://caoachery.com.br/ofertas?utm_source=globo&utm_medium=di%C3%A1ria-cpm&utm_campaing=Havas_Caoa-Chery_fy23q3_di%C3%A1ria-22.09_globo_aut_970x250_tiggo-7-pro-hybrid-max-drive_modelo_trigger-awareness_interesses_di%C3%A1ria-cpm_alcance&utm_content=Havas_Caoa-Chery_fy23q3_di%C3%A1ria-22.09_globo_aut_970x250_tiggo-7-pro-hybrid-max-drive_modelo_trigger-awareness_interesses_di%C3%A1ria-cpm_alcance&utm_id=Havas&utm_term=fy23q3"><img src="./assets//propaganda.png" alt=""></a>
    
    </div>

      
    <script>
        let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}

setInterval(next, 7000);
    </script>

</body>
</html>