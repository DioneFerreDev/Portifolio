let currentLang = 'Port';
document.addEventListener("DOMContentLoaded", mainEffects);



function mainEffects() {
    mobileHeader()
    effectHeader()
    initializing();
    window.addEventListener('resize', initializing);
    rollSection();
    emailNotSend();
    effectLang();
    sliderVigas();
    sliderPontua();
    // sampleAnimation()
}
function initializing() {
    effectHeader();
    portraitEffect();
    samplesEffects();
}
// function sliderVigas() {
//     let currentIndex = 0;
//     const wrap = document.getElementById("wrap-slide-vigas");
//     const modal = document.querySelector(".vigas");
//     const minis = modal.querySelectorAll(".mini-indice");
//     const wWrap = wrap.offsetWidth;
//     // wrap.style.height = `${wWrap*0.6}px`; 

//     minis.forEach((mini, index) => {
//         mini.addEventListener('click', () => {
//             const px = modal.offsetWidth;
//             const totalSlides = modal.querySelectorAll(".slides").length;
//             const isLeft = (currentIndex < index) ? true : false;    
//             console.log(isLeft)        
//             currentIndex = index;
//             if(isLeft)
//                 slideToLeft(currentIndex , px, totalSlides, "slider")
//             slideToRight(currentIndex , px, totalSlides, "slider")

//         });
//     });
//     document.querySelector(".pannel-chevron-left").addEventListener("click", () => {
//         const modal = document.querySelector(".vigas")
//         const px = modal.offsetWidth;
//         console.log(modal.offsetWidth)
//         const totalSlides = modal.querySelectorAll(".slides").length;
//         console.log(px, totalSlides, 0)
//         slideToLeft(currentIndex + 1, px, totalSlides, "slider")
//     });
//     document.querySelector(".pannel-chevron-right").addEventListener("click", () => {
//         const modal = document.querySelector(".vigas")
//         const px = modal.offsetWidth;
//         const totalSlides = modal.querySelectorAll(".slides").length;
//         console.log(px, totalSlides, 0)
//         slideToRight(currentIndex - 1, px, totalSlides, "slider")
//     })

//     function slideToLeft(index, px, totalSlides, slides) {
//         // com o módulo pegamos o restante em inteiro ex 4 /3 = 1.3 => 3*1 =3 ent 4-3 = 1
//         currentIndex = (index + totalSlides) % totalSlides;
//         currentIndex = (currentIndex == 0) ? index - 1 : currentIndex;                
//         const offset = currentIndex * -px;
//         console.log(offset,currentIndex)        
//         document.querySelector('.' + slides).style.transform = `translateX(${offset}px)`;

//         minis.forEach((mini, index) => {
//             if (index === currentIndex) {
//                 mini.style.opacity = 1;
//             } else {
//                 mini.style.opacity = 0.3;
//             }
//         })
//     }
//     function slideToRight(index, px, totalSlides, slides) {
//         currentIndex = (index + totalSlides) % totalSlides;
//         currentIndex = (currentIndex == totalSlides - 1) ? 0 : currentIndex;
//         const offset = currentIndex * -px;
//         document.querySelector('.' + slides).style.transform = `translateX(${offset}px)`;

//         minis.forEach((mini, index) => {
//             if (index === currentIndex) {
//                 mini.style.opacity = 1;
//             } else {
//                 mini.style.opacity = 0.3;
//             }
//         })
//     }
// }
function sliderPontua() {
    let currentIndex = 0;
    const modal = document.querySelector(".pontua");
    const videos = modal.querySelectorAll('video');
    const iconPlays = modal.querySelectorAll(".icon-play");
    const minis = modal.querySelectorAll(".mini-indice");
    const pChevLeft = modal.querySelector(".pannel-chevron-left");
    const pChevRight = modal.querySelector(".pannel-chevron-right");

    iconPlays.forEach(iconPlay => {
        iconPlay.addEventListener("click", () => {
            const wrap = iconPlay.parentElement;
            const video = wrap.querySelector("video");
            if (video.paused) {
                video.play();
            }
        })
    });

    videos.forEach(video => {
        video.addEventListener("play", () => {
            const wrap = video.parentElement;
            const iconPlay = wrap.querySelector(".icon-play");
            iconPlay.textContent = "";
        });
        video.addEventListener("pause", () => {
            const wrap = video.parentElement;
            const iconPlay = wrap.querySelector(".icon-play");
            iconPlay.innerHTML = "<i class='fa-regular fa-circle-play'></i>";
        })
    });

    minis.forEach((mini, index) => {
        mini.addEventListener('click', () => {
            currentIndex = index; // Atualiza o índice atual
            updateSlide();
        });
    });

    pChevLeft.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + minis.length) % minis.length; // Move para a esquerda
        updateSlide();
    });

    pChevRight.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % minis.length; // Move para a direita
        updateSlide();
    });

    function updateSlide() {
        const px = modal.offsetWidth;
        const offset = currentIndex * -px;
        modal.querySelector('.slider').style.transform = `translateX(${offset}px)`;

        minis.forEach((mini, index) => {
            mini.style.opacity = index === currentIndex ? 1 : 0.3;
        });
    }
}
function sliderVigas() {
    let currentIndex = 0;;
    const modal = document.querySelector(".vigas");
    const iconPlays = modal.querySelectorAll(".icon-play");
    const videos = modal.querySelectorAll('video');
    const minis = modal.querySelectorAll(".mini-indice");
    const pChevLeft = modal.querySelector(".pannel-chevron-left");
    const pChevRight = modal.querySelector(".pannel-chevron-right");


    iconPlays.forEach(iconPlay => {
        iconPlay.addEventListener("click", () => {
            const wrap = iconPlay.parentElement;
            const video = wrap.querySelector("video");
            if (video.paused) {
                video.play();
            }
        })
    });
    videos.forEach(video => {
        video.addEventListener("play", () => {
            const wrap = video.parentElement;
            const iconPlay = wrap.querySelector(".icon-play");
            iconPlay.textContent = "";
        });
        video.addEventListener("pause", () => {
            const wrap = video.parentElement;
            const iconPlay = wrap.querySelector(".icon-play");
            iconPlay.innerHTML = "<i class='fa-regular fa-circle-play'></i>";
        })
    });
    minis.forEach((mini, index) => {
        mini.addEventListener('click', () => {
            currentIndex = index; // Atualiza o índice atual
            updateSlide();
        });
    });

    pChevLeft.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + minis.length) % minis.length; // Move para a esquerda
        updateSlide();
    });

    pChevRight.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % minis.length; // Move para a direita
        updateSlide();
    });

    function updateSlide() {
        const px = modal.offsetWidth;
        const offset = currentIndex * -px;
        modal.querySelector('.slider').style.transform = `translateX(${offset}px)`;

        minis.forEach((mini, index) => {
            mini.style.opacity = index === currentIndex ? 1 : 0.3;
        });
    }
}


function emailNotSend() {
    $('#form-email').on('submit', function (event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        $.ajax({
            type: 'POST',
            url: '', // Enviar para a mesma página
            data: $(this).serialize(), // Serializa os dados do formulário
            success: function (response) {
                console.log(response); // Mostra a resposta no console
                alert(response); // Exibe a resposta do PHP
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText); // Mostra o erro no console
                alert('Ocorreu um erro ao enviar o email.');
            }
        });
    });
}
function effectLang() {
    console.log(document.querySelector(".btn-lng").clientWidth);
    const wraps = document.querySelectorAll(".wrap-lang");
    wraps.forEach(wrap => {
        wrap.addEventListener("click", e => {

            document.querySelectorAll(".borda-letter").forEach(h => {
                h.style.color = "#beedad";
                h.style.filter = "blur(5px)";
            });
            // const pai = e.target.parentNode;
            // console.log(pai.clientWidth)
            const redLine = document.querySelector(".red-line");
            const nextLang = e.target.id;
            console.log(nextLang)
            e.target.style.color = "white";
            redLine.style.filter = "blur(5px)";

            if (nextLang === "Eng") {
                redLine.style.left = '0%';
                e.target.style.color = "white";
                redLine.style.transform = "translateX(0%)";
            } else if (nextLang === "Fra") {
                redLine.style.left = '100%';
                redLine.style.transform = "translateX(-100%)";
            } else {
                redLine.style.left = '50%';
                redLine.style.transform = "translateX(-50%)";
            }
            currentLang = nextLang;
            document.querySelectorAll(".borda-letter").forEach(h => h.style.filter = "none");
            redLine.style.filter = "none";
            currentLang = nextLang;
            changeContent(nextLang);
        });
    });
}
function changeContent(nextLang) {

    const blurPx = 1;
    const time = 200;
    let elements = [];

    // pegando o header 
    const sobre = document.querySelector(".sobre");
    const projetos = document.querySelector(".projetos");
    const contato = document.querySelector(".contato");

    // pegando o header mobile 
    const sobreMobile = document.querySelector(".sobre-mobile");
    const projetosMobile = document.querySelector(".projetos-mobile");
    const contatoMobile = document.querySelector(".contato-mobile");

    // pegando o sobre
    const titleSobre = document.querySelector(".title-sobre");
    const conteudoSobre = document.querySelector(".conteudo-sobre");

    // pegando section-projetos
    const sectionProjects = document.querySelector(".section-projects");
    const titlePontua = document.querySelectorAll(".title-pontua");
    const pontuaDescription = document.querySelectorAll(".description-pontua");
    const titlePortifolio = document.querySelectorAll(".title-portifolio");
    const descriptionPortifolio = document.querySelectorAll(".description-portifolio");
    const titleLista = document.querySelectorAll(".title-lista");
    const listaDescription = document.querySelectorAll(".description-lista");
    const titleVigas = document.querySelectorAll(".title-vigas");
    const descriptionVigas = document.querySelectorAll(".description-vigas");
    const titleHidro = document.querySelectorAll(".title-hidro");
    const descriptionHidro = document.querySelectorAll(".description-hidro");
    const btnMore = document.querySelectorAll(".btn-more");
    const btnSrc = document.querySelectorAll(".btn-src");
    const btnPro = document.querySelectorAll(".btn-pro");

    // pegando section-tecnologias
    const titleTecnologias = document.querySelector(".title-tecnologias");

    // pegando section-contato
    const titleContato = document.querySelector(".title-contato");
    const labelNome = document.querySelector(".label-nome");
    const labelAssunto = document.querySelector(".label-assunto");
    const inputEnviar = document.querySelector(".input-enviar");

    // pegando modal
    const modalTecnologias = document.querySelectorAll(".modal-tecnologias");
    const modalAcessar = document.querySelectorAll(".modal-acessar");
    const modalDesenvolvedores = document.querySelectorAll(".modal-desenvolvedores");

    elements = [
        sobre, projetos, contato, titleSobre, conteudoSobre,
        sectionProjects, titleTecnologias, titleContato,
        labelNome, labelAssunto, inputEnviar, sobreMobile, 
        contatoMobile, projetosMobile
    ];
    titlePontua.forEach(t => elements.push(t));
    pontuaDescription.forEach(p => elements.push(p));
    titlePortifolio.forEach(t => elements.push(t));
    descriptionPortifolio.forEach(p => elements.push(p));
    titleLista.forEach(t => elements.push(t));
    listaDescription.forEach(p => elements.push(p));
    titleVigas.forEach(t => elements.push(t));
    descriptionVigas.forEach(p => elements.push(p));
    titleHidro.forEach(t => elements.push(t));
    descriptionHidro.forEach(p => elements.push(p));
    btnMore.forEach(p => elements.push(p));
    btnSrc.forEach(p => elements.push(p));
    btnPro.forEach(p => elements.push(p));

    // set transition and blur
    elements.forEach(element => {
        element.style.transition = "all 0.1s ease";
        element.style.filter = `blur(${blurPx}px)`;
    });

    setTimeout(() => {
        console.log(pontuaDescription);
        if (nextLang === 'Eng') {
            //mudar para ingles

            // mudar o header       
            sobre.textContent = "ABOUT";
            projetos.textContent = "PROJECTS";
            contato.textContent = "GET IN TOUCH";

            // mudar o header mobile      
            sobreMobile.textContent = "ABOUT";
            projetosMobile.textContent = "PROJECTS";
            contatoMobile.textContent = "GET IN TOUCH";

            // mudar sobre
            titleSobre.textContent = "HELLO MY NAME IS DIONE";
            conteudoSobre.textContent = "I graduated in civil engineering, but ended up discovering my passion for programming when developing programs to solve complex engineering calculations. Building my base on the web mainly with javascript and being able to create solutions for both web/mobile and desktop, solving problems using creativity has become my passion.";

            // mudar section projetos
            sectionProjects.textContent = "Projects";
            titlePontua.forEach(t => t.textContent = "SCORE PLUS");
            pontuaDescription.forEach(p => p.textContent = "System developed with the purpose of customer loyalty The establishment would now offer a points system which would encourage the customer to consume more at the establishment, as The more he consumes the more points, so he can exchange those points both for products and for extras.Furthermore, the customer can exchange points for a spin on the roulette wheel and win a free item. Everything duly registered in a system where only the admin has access, registering both the items to be exchanged and the items that go on the roulette wheel and much more.");

            titlePortifolio.forEach(t => t.textContent = "PORTFOLIO");
            descriptionPortifolio.forEach(p => p.textContent = "Portfolio developed with the aim of showing some of my work, using front-end and back-end development techniques");
            titleLista.forEach(t => t.textContent = "ONLINE GROCERY LIST");
            listaDescription.forEach(p => p.textContent = "Simple static website, developed with the aim of helping people when making a shopping list, without the need to install an application, even if the user closes the browser, the list remains saved, with the option of calculating a pre-list with the difference in the real value from the list. Ideal both for people who just want to make a simple list and for people who want to control their expenses, the service also has a microphone option, where the user, having their hands full, can choose to speak the item instead of typing.");
            titleVigas.forEach(t => t.textContent = "MATH BEAMS ENGINEERING");
            descriptionVigas.forEach(p => p.textContent = "Software inspired by the well-known f-tool, but MATH BEAMS ENGINEERING focused on beams only. Thus, the user inserts the efforts into the beam, with the software taking care of making all the complex calculations of moment and shear efforts, thus drawing their respective diagrams. It also calculates the minimum steel area of ​​the reinforcement that can support such characteristics and even suggests a combination of gauges where the user can make adjustments and the software automatically recalculates it. However, the calculation of reinforcement is only limited to beams with a rectangular/square section. The Program performs calculations not only for 2 supports but for as many supports as necessary, as it performs calculations using the hyperstatic beam technique and linear equations when necessary. Thus saving the user from more than 30 calculation sheets depending on the complexity in just fractions of seconds. In the video above I solve several exercises on YouTube in fractions of a second using the software.");
            titleHidro.forEach(t => t.textContent = "HYDRO COLD WATER ENGINEERING");
            descriptionHidro.forEach(p => p.textContent = "Software developed to help and optimize cold water hydrosanitary projects, so the user can calculate their entire hydro project in just a few moments and quantify the pressures that exist at each point of use, thus following the Brazilian standard when a point of use does not have The software immediately indicates the minimum pressure required with a red color on the section and it is necessary to make adjustments, such as resizing the diameter(s) of the section or even previous sections. With the Software, such a calculation can be done in a matter of seconds with precision, saving the engineer a day of wasted recalculations, as once a pipe diameter changes there is a need to recalculate the entire project. After completing the calculations, the user can request a PDF through the program, as it quantifies all the components that go into the project, such as the length of each pipe, taps and any other accessories.");

            // mudar section tecnologias
            titleTecnologias.textContent = "TECHNOLOGIES";

            // mudar section contato
            titleContato.textContent = "GET IN TOUCH";
            labelNome.textContent = "NAME";
            labelAssunto.textContent = "SUBJECT";
            inputEnviar.value = "SEND";

            //mudar modal
            modalTecnologias.forEach(title => title.textContent = "TECHNOLOGIES");
            modalAcessar.forEach(title => title.textContent = "ACCESS");
            modalDesenvolvedores.forEach(title => title.textContent = "DEVELOPERS");

            // BTNs
            btnMore.forEach(btn => btn.textContent = "FIND OUT MORE");
            btnSrc.forEach(btn => btn.innerHTML = "SOURCE <i class='fa-brands fa-github'></i>");
            btnPro.forEach(btn => btn.innerHTML = "PROJECT <i class='fa-solid fa-globe'></i>");
        } else if (nextLang === 'Fra') {
            // mudar para frances

            // mudar o header
            sobre.textContent = "SUR MOI";
            projetos.textContent = "PROJETS";
            contato.textContent = "CONTACT";

            // mudar o header mobile
            sobreMobile.textContent = "SUR MOI";
            projetosMobile.textContent = "PROJETS";
            contatoMobile.textContent = "CONTACT";

            // mudar sobre
            titleSobre.textContent = "BONJOUR JE M'APPELLE DIONE";
            conteudoSobre.textContent = "J'ai obtenu mon diplôme en génie civil, mais j'ai fini par découvrir ma passion pour la programmation en développant des programmes permettant de résoudre des calculs d'ingénierie complexes. Construire ma base sur le Web principalement avec javascript et être capable de créer des solutions à la fois pour le web/mobile et le bureau, résoudre des problèmes en utilisant la créativité est devenu ma passion."

            // mudar section projetos
            sectionProjects.textContent = "Projects";
            titlePontua.forEach(t => t.textContent = "MARQUEZ PLUS");
            pontuaDescription.forEach(p => p.textContent = "Système développé dans un but de fidélisation de la clientèle. L'établissement proposerait désormais un système de points ce qui inciterait le client à consommer davantage dans l'établissement, comme Plus il consomme, plus il a de points, il peut donc échanger ces pointstant pour les produits que pour les extras. De plus, le client peutéchangez des points contre un tour de roulette et gagnez un article gratuit. Le tout dûment enregistré dans un système auquel seul l'administrateur a accès, enregistrer à la fois les objets à échanger et les objets qui vont sur la roue de la roulette et bien plus encore.");
            titlePortifolio.forEach(t => t.textContent = "PORTEFEUILLE");
            descriptionPortifolio.forEach(p => p.textContent = "Portfolio développé dans le but de montrer certains de mes travaux, en utilisant des techniques de développement front-end et back-end.");
            titleLista.forEach(t => t.textContent = "LISTE D'ACHATS EN LIGNE");
            listaDescription.forEach(p => p.textContent = "Site Web statique simple, développé dans le but d'aider les gens à faire une liste de courses, sans avoir besoin d'installer une application, même si l'utilisateur ferme le navigateur, la liste reste enregistrée, avec la possibilité de calculer une pré-liste avec la différence dans la valeur réelle de la liste. Idéal aussi bien pour les personnes qui souhaitent simplement faire une liste simple que pour celles qui souhaitent contrôler leurs dépenses, le service dispose également d'une option de microphone, où l'utilisateur, les mains occupées, peut choisir de prononcer l'élément au lieu de le taper.");
            titleVigas.forEach(t => t.textContent = "CALCUL DES POUTRES D'INGÉNIERIE");
            descriptionVigas.forEach(p => p.textContent = "Logiciel inspiré du célèbre f-tool, mais CALCUL DES POUTRES D'INGÉNIERIE s'est concentré uniquement sur les poutres. Ainsi, l'utilisateur insère les efforts dans la poutre, le logiciel se chargeant de faire tous les calculs complexes des efforts de moment et de cisaillement, traçant ainsi leurs diagrammes respectifs. Il calcule également la surface minimale en acier du renfort pouvant supporter de telles caractéristiques et suggère même une combinaison de jauges où l'utilisateur peut effectuer des ajustements et le logiciel la recalcule automatiquement. Cependant, le calcul du ferraillage se limite uniquement aux poutres de section rectangulaire/carrée. Le programme effectue des calculs non seulement pour 2 supports mais pour autant de supports que nécessaire, car il effectue des calculs en utilisant la technique des poutres hyperstatiques et des équations linéaires si nécessaire. Épargnant ainsi à l'utilisateur plus de 30 feuilles de calcul en fonction de la complexité en quelques fractions de secondes seulement. Dans la vidéo ci-dessus, je résous plusieurs exercices sur YouTube en fractions de seconde à l'aide du logiciel.");
            titleHidro.forEach(t => t.textContent = "HYDRO EAU FROIDE INGÉNIERIE");
            descriptionHidro.forEach(p => p.textContent = "Logiciel développé pour aider et optimiser les projets hydrosanitaires à eau froide, afin que l'utilisateur puisse calculer l'ensemble de son projet hydrosanitaire en quelques instants et quantifier les pressions qui existent à chaque point d'utilisation, suivant ainsi la norme brésilienne lorsqu'un point d'utilisation n'a pas Le logiciel indique immédiatement la pression minimale requise par une couleur rouge sur la section et il est nécessaire de procéder à des ajustements, comme redimensionner le(s) diamètre(s) de la section ou même les sections précédentes. Avec le logiciel, un tel calcul peut être effectué en quelques secondes avec précision, ce qui évite à l'ingénieur une journée de recalculs inutiles, car dès qu'un diamètre de tuyau change, il est nécessaire de recalculer l'ensemble du projet. Après avoir terminé les calculs, l'utilisateur peut demander un PDF via le programme, car il quantifie tous les composants entrant dans le projet, tels que la longueur de chaque tuyau, les robinets et tout autre accessoire.");

            // mudar section tecnologias
            titleTecnologias.textContent = "TECHNOLOGIES";

            // mudar section contato
            titleContato.textContent = "CONTACT";
            labelNome.textContent = "NOM";
            labelAssunto.textContent = "SUJET";
            inputEnviar.value = "ENVOYER";

            //mudar modal
            modalTecnologias.forEach(title => title.textContent = "TECHNOLOGIES");
            modalAcessar.forEach(title => title.textContent = "ACCÉDER");
            modalDesenvolvedores.forEach(title => title.textContent = "DÉVELOPPEURS");

            // BTNs
            btnMore.forEach(btn => btn.textContent = "EN SAVOIR PLUS");
            btnSrc.forEach(btn => btn.innerHTML = "SOURCE <i class='fa-brands fa-github'></i>");
            btnPro.forEach(btn => btn.innerHTML = "PROJET <i class='fa-solid fa-globe'></i>");
        } else {
            // mudar para por

            // mudar o header
            sobre.textContent = "SOBRE";
            projetos.textContent = "PROJETOS";
            contato.textContent = "CONTATO";

            // mudar o header mobile
            sobreMobile.textContent = "SOBRE";
            projetosMobile.textContent = "PROJETOS";
            contatoMobile.textContent = "CONTATO";

            // mudar sobre
            titleSobre.textContent = "OLÁ MEU NOME É DIONE";
            conteudoSobre.textContent = "Me formei em engenharia civil, mas acabei descobrindo minha paixão pela a programação ao desenvolver programas para solucionar cálculos complexos de engenharia. Fazendo minha base na web principalmente com javascript podendo criar soluções tanto web/mobile quanto desktop, solucionar problemas usando a criatividade se tornou minha paixão.";

            // mudar section projetos
            sectionProjects.textContent = "Projetos";
            titlePontua.forEach(t => t.textContent = "PONTUA MAIS");
            pontuaDescription.forEach(p => p.textContent = "Sistema desenvolvido com a finalidade de fidelizar o cliente. Pois o estabelecimento passaria a oferecer um sistema de pontos no qual incentivaria o cliente a consumir mais no estabelecimento, pois mais ele consumir maior os pontos, assim o mesmo podendo trocar tais pontos tanto por produtos quanto por adicionais. Além do mais o cliente podendo trocar pontos por uma volta na roleta ganhando um item de brinde. Tudo devidamente cadastrado em um sistema aonde apenas o admin tem acessso, cadastrando tando  os items a serem trocados, como os items nos quais vão na roleta e muito mais.");
            titlePortifolio.forEach(t => t.textContent = "PORTIFOLIO");
            descriptionPortifolio.forEach(p => p.textContent = "Portifolio desenvolvido com o intuito de mostrar um pouco do meu trabalho, usando tecnicas de desenvolvimento de front-end e back-end");
            titleLista.forEach(t => t.textContent = "LISTA DE COMPRAS ONLINE");
            listaDescription.forEach(p => p.textContent = "Site estático simples, desenvolvido com intuito de ajudar pessoas ao fazer lista de compras, sem a necessidade de instalação de aplicativo, mesmo o usuário fechando o navegado a lista mantém salva, ainda com opção de cálculo de uma pré lista com a diferença do valor real da lista. Ideal tanto para pessoas que apenas desejam fazer uma lista simples quanto para pessoas que desejam controlar seus gastos, o serviço ainda tem a opção de microfone, aonde o usuário por estar com as mão ocupadas pode optar de falar o item ao invés de digitar.");
            titleVigas.forEach(t => t.textContent = "CALC VIGAS ENGENHARIA");
            descriptionVigas.forEach(p => p.textContent = "Software inspirado no já conhecido f-tool, porém CALC VIGAS focado em apenas vigas. Assim o usuário inserindo os esforços na viga, com o software se encarregando de fazer todos os cálculos complexos de esforços de momento e cisalhamento, assim desenhando seus respectivos diagramas. Também calculando a área mínima de aço da armadura que possa suportar tais características e até sugerindo uma combinação de bitolas aonde o usuário pode fazer seus ajustes e automaticamente o software o-recalcula. Poém o calculo das armaduras apenas se limita as vigas de seção retangular/quadrada. O Programa realiza calculos não de apenas 2 apoios mais de quantos mais apoios forem necessários, pois executa calculos com a técnica de vigas hiperestáticas e equações lineares quando necessário. Assim salvando o usuário de mais de 30 folhas de cálculos dependendo da complexidade em apenas frações de segundos.");
            titleHidro.forEach(t => t.textContent = "HIDRO ÁGUA FRIA ENGENHARIA");
            descriptionHidro.forEach(p => p.textContent = "Software desenvolvido para ajudar e otimizar projetos hidrosanitários de água fria, assim o usuário em apenas poucos instantes consegue calcular toda o seu projeto hidro e quantificar as pressões que existem em cada ponto de utilização, assim seguindo a norba brasileira quando um ponto de utilização não tem a pressão mínima necessária prontamente o software sinaliza com uma cor vermelha sobre o treco e sendo necessário fazer ajustes como por exemplo o redimensionamento do(s) diâmetros do trecho ou até dos trechos anteriores. Com o Software tal cálculo pode ser feito em questão de segundos com precisão salvando o engenheiro de um dia perdido de recálculos, pois uma vês que se altera um diâmetro de uma tubulação há a necessidade de recalcular todo o projeto. Após terminado os cálculos o usuário pode solicitar um pdf pelo o programa, pois o mesmo quantifica todos os componentes que vão no projeto como comprimento de cada tubulação, torneiras e quaisquer outro acessório.");

            // mudar section tecnologias
            titleTecnologias.textContent = "TECNOLOGIAS";

            // mudar section contato
            titleContato.textContent = "CONTATO";
            labelNome.textContent = "NOME";
            labelAssunto.textContent = "ASSUNTO";
            inputEnviar.value = "ENVIAR";

            //mudar modal
            modalTecnologias.forEach(title => title.textContent = "TECNOLOGIAS");
            modalAcessar.forEach(title => title.textContent = "ACESSAR");
            modalDesenvolvedores.forEach(title => title.textContent = "DESENVOLVEDORES");

            // BTNs
            btnMore.forEach(btn => btn.textContent = "SAIBA MAIS");
            btnSrc.forEach(btn => btn.innerHTML = "FONTE <i class='fa-brands fa-github'></i>");
            btnPro.forEach(btn => btn.innerHTML = "PROJECTO <i class='fa-solid fa-globe'></i>");
        }

        const samples = document.querySelectorAll(".sample");
        for (let i = 0; i < samples.length; i++) {
            const p = samples[i].querySelector(".p-description");
            const newText = p.innerText.substring(0, 80) + "...";
            p.textContent = newText;
        }
        //voltando o blur ao normal header   
        elements.forEach(element => element.style.filter = "none");
    }, time);


}
function mobileHeader() {
    let isMax = false;
    // pegando a altura inicial
    const nav = document.querySelector(".nav-hidden");
    const head = document.querySelector(".header-fixed");
    nav.style.display = "block";
    const altNav = nav.offsetHeight;
    const altHead = head.offsetHeight;
    console.log(altNav)
    head.style.height = `${altHead - altNav - 15}px`;
    // nav.style.visibility = "hidden";
    // nav.style.display = "none";

    const menu = document.querySelector(".fa-bars");
    menu.addEventListener("click", () => {
        head.style.height = !isMax ? `${altHead}px` : `${altHead - altNav - 15}px`;
        // effectHeader();
        isMax = !isMax;
    })
}
function rollSection() {
    const links = document.querySelectorAll(".link-section");
    const lis = document.querySelectorAll(".li-section");
    lis.forEach(li => {
        li.addEventListener("click", e => {
            const link = e.target.querySelector(".link-section")
            document.querySelector(link.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        })
    });
    links.forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault();
            document.querySelector(e.target.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        })
    });
}
function effectHeader() {
    const header = document.querySelector(".header-fixed");
    const hightHeader = header.clientHeight;
    const container = document.querySelector(".container");
    container.style.top = `${hightHeader}px`;
}
function portraitEffect() {
    const portrait = document.querySelector(".portrait");
    const widthPortait = portrait.clientWidth;
    portrait.style.height = `${widthPortait * 1.1}px`;
}
function samplesEffects() {
    const samples = document.querySelectorAll(".sample");

    for (let i = 0; i < samples.length; i++) {
        let hasMoved = false;
        let par = false;
        let widthSample = document.querySelector(".projects").clientWidth;
        let hSample = 0;
        if (window.innerWidth > 800) {
            hSample = samples[i].clientWidth * 0.284;
            // window.innerWidth > 800 ? samples[i].clientWidth * 0.284 : samples[i].clientWidth * 0.284 * 2.6;
        } else if (window.innerWidth < 800 && window.innerWidth > 600) {
            hSample = samples[i].clientWidth * 0.284 * 2.6;
        } else if (window.innerWidth < 600 && window.innerWidth > 400) {
            hSample = samples[i].clientWidth * 0.284 * 4;
        } else if (window.innerWidth < 400) {
            hSample = samples[i].clientWidth * 0.284 * 4.6;
        }

        hSample = hSample.toFixed(2);
        hSample = Number(hSample);
        samples[i].style.height = `${hSample}px`;

        // verificando se o sample é par
        if (i % 2 !== 0) {
            par = true;
            widthSample = widthSample - samples[i].clientWidth;
            widthSample = widthSample / samples[i].clientWidth;
            samples[i].style.transform = `translateX(${widthSample * 200}%)`;
        } else {
            widthSample = widthSample - samples[i].clientWidth;
            widthSample = widthSample / samples[i].clientWidth;
            samples[i].style.transform = `translateX(${widthSample * -100}%)`;
        }
        const limText = 80;
        const p = samples[i].querySelector(".p-description");
        if (p.innerText.length > limText) {
            const newText = p.innerText.substring(0, limText) + "...";
            p.innerText = newText;
        }

        const sample = samples[i];
        sample.style.filter = 'blur(10px)';
        window.addEventListener("scroll", () => {
            const rect = sample.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight + 300) {
                if (!hasMoved) {
                    sample.style.transition = "all 0.25s ease-out";
                    const slide = par ? 100 : 0;
                    sample.style.transform = `translateX(${widthSample * slide}%)`;
                    sample.style.filter = 'blur(0px)';
                    hasMoved = true;
                }
            }
        })
    }
}
function actModal(el) {
    const modalName = el.id;
    const layer = document.querySelector(".layer-modal");
    layer.style.display = "block";
    const modals = document.querySelectorAll(".modal");

    // tunrning off modals
    modals.forEach(modal => modal.style.display = "none");
    const modal = document.querySelector(`.${modalName}`);
    modal.style.display = "block";
    document.body.classList.add("no-scroll");
}
function closeModal() {
    const modals = document.querySelectorAll("modal");
    modals.forEach(modal => modal.style.display = "none");
    const layer = document.querySelector(".layer-modal");
    layer.style.display = "none";
    document.body.classList.remove("no-scroll");
}
function redirect(e, el) {
    e.preventDefault();
    const link = el.href;
    window.open(link, '_blank');
}
function sampleAnimation() {
    const samples = document.querySelectorAll(".sample");

    samples.forEach(sample => {
        let hasMoved = false;
        window.addEventListener("scroll", () => {
            const rect = sample.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight + 200) {
                console.log('visto ent se mover')
                if (!hasMoved) {
                    sample.style.transition = "all 0.25s ease";
                    sample.style.borderRadius = '50px';
                    hasMoved = true;
                }
            }
        })
    });
}