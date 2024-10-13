        <?php
        // setcookie("cookie_viwed",false,time() - 3600,"/");            
        if (!isset($_COOKIE['cookie_viwed'])) {
            $cookie_name = "cookie_viwed";
            $cookie_value = true;
            $cookie_expiration = time() + (24 * 60 * 60);
            $cookie_path = "/";
            setcookie($cookie_name, $cookie_value, $cookie_expiration, $cookie_path);
            $ip = $_SERVER['REMOTE_ADDR'];
            // depois ao subir no servidor por $ip no lugar
            controllers\homeController::checkViewer($ip);
            echo 'cookie ja criado';
        }

        ?>
        <div class="container">
            <section id="sobre">
                <div class="center">
                    <div class="apresentation">
                        <div class="portrait">
                            <img src="<?php echo INCLUDE_PATH; ?>images/photo.jpeg" alt="">
                        </div>
                        <div class="cover-letter">
                            <h2 class="title-sobre">OLÁ MEU NOME É DIONE</h2>
                            <p class="conteudo-sobre">Me formei em engenharia civil, mas acabei descobrindo minha paixão pela a programação
                                ao desenvolver programas para solucionar cálculos complexos de engenharia. Fazendo
                                minha base na web principalmente com javascript podendo criar soluções tanto web/mobile
                                quanto desktop, solucionar problemas usando a criatividade se tornou minha paixão.
                            </p>
                        </div>
                    </div><!--apresentation-->
            </section>
            <section id="projetos" class="projects">

                <div class="layer-modal">
                    <div class="modal pontua">
                        <div class="close-modal" onClick="closeModal()">X</div>
                        <div class="wrap-slider">
                            <div class="pannel-chevron-left">
                                <div class="chevron-left"><i class="fa-solid fa-chevron-left"></i></div>
                            </div>
                            <div class="pannel-chevron-right">
                                <div class="chevron-right"><i class="fa-solid fa-chevron-right"></i></div>
                            </div>
                            <div id="wrap-slide-pontua" class="wrap-img-modal" style="width:100%;">
                                <div class="wrap-contents slider-vigas slider">
                                    <div class="wrap-video">
                                        <div class="icon-play">
                                            <i class="fa-regular fa-circle-play"></i>
                                        </div>
                                        <video class="slides" controls>
                                            <source src="<?php echo INCLUDE_PATH; ?>images/admPontua.mp4" type="video/mp4">
                                        </video>
                                    </div><!--wrap-video-->
                                    <div class="wrap-video">
                                        <div class="icon-play">
                                            <i class="fa-regular fa-circle-play"></i>
                                        </div>
                                        <video class="slides" controls>
                                            <source src="<?php echo INCLUDE_PATH; ?>images/clientePontua.mp4" type="video/mp4">
                                        </video>
                                    </div><!--wrap-video-->
                                    <img class="slides" src="<?php echo INCLUDE_PATH; ?>images/pontua.jpeg" alt="" style="object-fit:fill;">
                                </div>
                            </div>
                        </div>
                        <div class="pannel-mini-indice">
                            <div class="mini-indice"></div>
                            <div class="mini-indice"></div>
                            <div class="mini-indice"></div>
                        </div>
                        <!-- <div class="wrap-img-modal" style="width:100%;">
                            <img src="<?php echo INCLUDE_PATH; ?>images/pontua.jpeg" alt="" style="object-fit:fill;">
                        </div> -->
                        <div class="wrap-description-modal">
                            <h2 id="title-pontua" class="title-pontua">PONTUA MAIS</h2>
                            <p class="p-description description-pontua">Sistema desenvolvido com a finalidade de fidelizar o cliente.
                                Pois o estabelecimento passaria a oferecer um sistema de pontos
                                no qual incentivaria o cliente a consumir mais no estabelecimento, pois
                                mais ele consumir maior os pontos, assim o mesmo podendo trocar tais pontos
                                tanto por produtos quanto por adicionais. Além do mais o cliente podendo
                                trocar pontos por uma volta na roleta ganhando um item de brinde.
                                Tudo devidamente cadastrado em um sistema aonde apenas o admin tem acesso,
                                cadastrando tando os items a serem trocados, como os items nos quais vão na roleta
                                e muito mais.
                            </p>
                        </div>
                        <div class="wrap-tech-modal">
                            <h2 class="modal-tecnologias">TECNOLOGIAS</h2>
                            <div class="technologies">
                                <div class="btn-tech">HTML</div>
                                <div class="btn-tech">CSS</div>
                                <div class="btn-tech">JAVASCRIPT</div>
                                <div class="btn-tech">JQUERY</div>
                                <div class="btn-tech">JWT</div>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-acessar">ACESSAR</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev/Pontua_mais/" class="btn-tech btn-src" style="width:150px;" onClick="redirect(event,this)">
                                    CODIGO FONTE <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://dioneferredev.github.io/Pontua_mais/home" class="btn-tech btn-pro" style="width:100px;" onClick="redirect(event,this)">
                                    PROJETO <i class="fa-solid fa-globe"></i>
                                </a>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-desenvolvedores">DESENVOLVEDORES</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev" class="btn-tech" style="width:150px;" onClick="redirect(event,this)">
                                    DIONE FRONTEND<i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://github.com/ricardodamaceno" class="btn-tech" style="width:150px;" onClick="redirect(event,this)">
                                    RICARDO DAMASCENO BACKEND <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--pontua-modal-->
                    <div class="modal portifolio">
                        <div class="close-modal" onClick="closeModal()">X</div>
                        <div class="wrap-img-modal" style="width:100%;">
                            <img src="<?php echo INCLUDE_PATH; ?>images/portifolio.jpeg" alt="" style="object-fit:fill;">
                        </div>
                        <div class="wrap-description-modal">
                            <h2 class="title-portifolio">PORTIFOLIO</h2>
                            <p class="p-description description-portifolio">Portifolio desenvolvido com o intuito de mostrar um pouco do
                                meu trabalho, usando tecnicas de desenvolvimento de front-end e back-end
                            </p>
                        </div>
                        <div class="wrap-tech-modal">
                            <h2 class="modal-tecnologias">TECNOLOGIAS</h2>
                            <div class="technologies">
                                <div class="btn-tech">HTML</div>
                                <div class="btn-tech">CSS</div>
                                <div class="btn-tech">JAVASCRIPT</div>
                                <div class="btn-tech">PHP</div>
                                <div class="btn-tech">MYSQL</div>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-acessar">ACESSAR</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev/Portifolio" class="btn-tech btn-src" style="width:150px;" onClick="redirect(event,this)">
                                    CODIGO FONTE <i class="fa-brands fa-github"></i>
                                </a>
                                <!-- <a href="https://dioneferredev.github.io/Pontua_mais/" class="btn-tech btn-pro" style="width:100px;" onClick="redirect(event,this)">
                                    PROJETO <i class="fa-solid fa-globe"></i>
                                </a> -->
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-desenvolvedores">DESENVOLVEDORES</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev" class="btn-tech" style="width:150px;" onClick="redirect(event,this)">
                                    DIONE FULLSTACK<i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--portifolio-modal-->
                    <div class="modal lista">
                        <div class="close-modal" onClick="closeModal()">X</div>
                        <div class="wrap-img-modal" style="width:100%;">
                            <img src="<?php echo INCLUDE_PATH; ?>images/lista.jpeg" alt="" style="object-fit:fill;">
                        </div>
                        <div class="wrap-description-modal">
                            <h2 class="title-lista">LISTA DE COMPRAS ONLINE</h2>
                            <p class="p-description description-lista">Site estático simples, desenvolvido com intuito de ajudar
                                pessoas ao fazer lista de compras, sem a necessidade de instalação de aplicativo,
                                mesmo o usuário fechando o navegado a lista mantém salva, ainda com opção de cálculo
                                de uma pré lista com a diferença do valor real da lista. Ideal tanto para pessoas
                                que apenas desejam fazer uma lista simples quanto para pessoas que desejam controlar
                                seus gastos, o serviço ainda tem a opção de microfone, aonde o usuário por estar com
                                as mão ocupadas pode optar de falar o item ao invés de digitar.
                            </p>
                        </div>
                        <div class="wrap-tech-modal">
                            <h2 class="modal-tecnologias">TECNOLOGIAS</h2>
                            <div class="technologies">
                                <div class="btn-tech">HTML</div>
                                <div class="btn-tech">CSS</div>
                                <div class="btn-tech">JAVASCRIPT</div>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-acessar">ACESSAR</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev/lista-de-compras-online" class="btn-tech btn-src" style="width:150px;" onClick="redirect(event,this)">
                                    CODIGO FONTE <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://dioneferredev.github.io/lista-de-compras-online/" class="btn-tech btn-pro" style="width:100px;" onClick="redirect(event,this)">
                                    PROJETO <i class="fa-solid fa-globe"></i>
                                </a>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-desenvolvedores">DESENVOLVEDORES</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev" class="btn-tech" style="width:150px;" onClick="redirect(event,this)">
                                    DIONE FULLSTACK<i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--lista-modal-->
                    <div class="modal vigas">
                        <div class="close-modal" onClick="closeModal()">X</div>
                        <div class="wrap-slider">
                            <div class="pannel-chevron-left">
                                <div class="chevron-left"><i class="fa-solid fa-chevron-left"></i></div>
                            </div>
                            <div class="pannel-chevron-right">
                                <div class="chevron-right"><i class="fa-solid fa-chevron-right"></i></div>
                            </div>
                            <div id="wrap-slide-vigas" class="wrap-img-modal" style="width:100%;">
                                <div class="wrap-contents slider-vigas slider">

                                    <div class="wrap-video">
                                        <div class="icon-play">
                                            <i class="fa-regular fa-circle-play"></i>
                                        </div>
                                        <video class="slides" controls>
                                            <source src="<?php echo INCLUDE_PATH; ?>images/videoVigas.mp4" type="video/mp4">
                                        </video>
                                    </div><!--wrap-video-->

                                    <!-- <video class="slides" width="640" height="360" controls>
                                        <source src="<?php echo INCLUDE_PATH; ?>images/videoVigas.mp4" type="video/mp4">
                                    </video> -->
                                    <img class="slides" src="<?php echo INCLUDE_PATH; ?>images/vigas.jpeg" alt="" style="object-fit:fill;">
                                    <img class="slides" src="<?php echo INCLUDE_PATH; ?>images/vigasAtual.jpg" alt="" style="object-fit:fill;">
                                </div>
                            </div>
                        </div>
                        <div class="pannel-mini-indice">
                            <div class="mini-indice"></div>
                            <div class="mini-indice"></div>
                            <div class="mini-indice"></div>
                        </div>
                        <div class="wrap-description-modal">
                            <h2 class="title-vigas">CALC VIGAS ENGENHARIA</h2>
                            <p class="p-description description-vigas">Software inspirado no já conhecido f-tool, porém CALC VIGAS
                            focado em apenas vigas. Assim o usuário inserindo os esforços na viga, com o software se encarregando 
                            de fazer todos os cálculos complexos de esforços de momento e cisalhamento, assim desenhando seus 
                            respectivos diagramas. Também calculando a área mínima de aço da armadura que possa suportar tais 
                            características e até sugerindo uma combinação de bitolas aonde o usuário pode fazer seus ajustes e 
                            automaticamente o software o-recalcula. Poém o calculo das armaduras apenas se limita as vigas de seção 
                            retangular/quadrada. O Programa realiza calculos não de apenas 2 apoios mais de quantos mais apoios 
                            forem necessários, pois executa calculos com a técnica de vigas hiperestáticas e equações lineares quando
                             necessário. Assim salvando o usuário de mais de 30 folhas de cálculos dependendo da complexidade em 
                             apenas frações de segundos. No vídeo acima resolvo vários exercícios no YouTube em frações de segundo 
                             usando o software.
                            </p>
                        </div>
                        <div class="wrap-tech-modal">
                            <h2 class="modal-tecnologias">TECNOLOGIAS</h2>
                            <div class="technologies">
                                <div class="btn-tech">HTML</div>
                                <div class="btn-tech">CSS</div>
                                <div class="btn-tech">JAVASCRIPT</div>
                                <div class="btn-tech">CANVAS</div>
                                <div class="btn-tech">ELECTRONJS</div>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-acessar">ACESSAR</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev/dione-vigas" class="btn-tech btn-src" style="width:150px;" onClick="redirect(event,this)">
                                    CODIGO FONTE <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-desenvolvedores">DESENVOLVEDORES</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev" class="btn-tech" style="width:150px;" onClick="redirect(event,this)">
                                    DIONE FULLSTACK<i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--vigas-modal-->
                    <div class="modal hidro">
                        <div class="close-modal" onClick="closeModal()">X</div>
                        <div class="wrap-img-modal" style="width:100%;">
                            <img src="<?php echo INCLUDE_PATH; ?>images/hidro.jpeg" alt="" style="object-fit:fill;">
                        </div>
                        <div class="wrap-description-modal">
                            <h2 class="title-hidro">HIDRO AGUA FRIA ENGENHARIA</h2>
                            <p class="p-description description-hidro">Software desenvolvido para ajudar e otimizar projetos
                                hidrosanitários de água fria, assim o usuário em apenas poucos instantes
                                consegue calcular toda o seu projeto hidro e quantificar as pressões que existem
                                em cada ponto de utilização, assim seguindo a norba brasileira quando um ponto de
                                utilização não tem a pressão mínima necessária prontamente o software sinaliza
                                com uma cor vermelha sobre o treco e sendo necessário fazer ajustes como por
                                exemplo o redimensionamento do(s) diâmetros do trecho ou até dos trechos anteriores.
                                Com o Software tal cálculo pode ser feito em questão de segundos com precisão
                                salvando o engenheiro de um dia perdido de recálculos, pois uma vês que se altera
                                um diâmetro de uma tubulação há a necessidade de recalcular todo o projeto.
                                Após terminado os cálculos o usuário pode solicitar um pdf pelo o programa, pois
                                o mesmo quantifica todos os componentes que vão no projeto como comprimento
                                de cada tubulação, torneiras e quaisquer outro acessório.
                            </p>
                        </div>
                        <div class="wrap-tech-modal">
                            <h2 class="modal-tecnologias">TECNOLOGIAS</h2>
                            <div class="technologies">
                                <div class="btn-tech">HTML</div>
                                <div class="btn-tech">CSS</div>
                                <div class="btn-tech">JAVASCRIPT</div>
                                <div class="btn-tech">LOCKJS</div>
                                <div class="btn-tech">ELECTRONJS</div>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-acessar">ACESSAR</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev/hidro" class="btn-tech btn-src" style="width:150px;" onClick="redirect(event,this)">
                                    CODIGO FONTE <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="wrap-access">
                            <h2 class="modal-desenvolvedores">DESENVOLVEDORES</h2>
                            <div class="wrap-show-modal">
                                <a href="https://github.com/DioneFerreDev" class="btn-tech" style="width:150px;" onClick="redirect(event,this)">
                                    DIONE FULLSTACK<i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--vigas-modal-->
                </div><!--layer-->

                <h2 class="section-projects">Projetos</h2>

                <div class="sample">
                    <div class="wrap-description">
                        <div class="title-project">
                            <h2 class="title-pontua">PONTUA MAIS</h2>
                        </div>
                        <div class="wrap-p-description">
                            <p class="p-description description-pontua">Sistema desenvolvido com a finalidade de fidelizar o cliente.
                                Pois o estabelecimento passaria a oferecer um sistema de pontos
                                no qual incentivaria o cliente a consumir mais no estabelecimento, pois
                                mais ele consumir maior os pontos, assim o mesmo podendo trocar tais pontos
                                tanto por produtos quanto por adicionais. Além do mais o cliente podendo
                                trocar pontos por uma volta na roleta ganhando um item de brinde.
                                Tudo devidamente cadastrado em um sistema aonde apenas o admin tem acessso,
                                cadastrando tando os items a serem trocados, como os items nos quais vão na roleta
                                e muito mais.
                            </p>
                            <div class="technologies">
                                <div class="btn-tech">HTML</div>
                                <div class="btn-tech">CSS</div>
                                <div class="btn-tech">JAVASCRIPT</div>
                                <div class="btn-tech">JQUERY</div>
                                <div class="btn-tech">JWT</div>
                            </div>
                            <button id="pontua" class="btn-more" type="button" onClick="actModal(this)">SAIBA MAIS</button>
                        </div>
                    </div>
                    <div class="wrap-project">
                        <img src="<?php echo INCLUDE_PATH; ?>images/pontua.jpeg" alt="">
                    </div>
                </div>
                <div class="sample">
                    <div class="wrap-description">
                        <div class="title-project">
                            <h2 class="title-portifolio">PORTIFOLIO</h2>
                        </div>
                        <p class="p-description description-portifolio">Portifolio desenvolvido com o intuito de mostrar um pouco do
                            meu trabalho, usando tecnicas de desenvolvimento de front-end e back-end
                        </p>
                        <div class="technologies">
                            <div class="btn-tech">HTML</div>
                            <div class="btn-tech">CSS</div>
                            <div class="btn-tech">JAVASCRIPT</div>
                            <div class="btn-tech">PHP</div>
                            <div class="btn-tech">MYSQL</div>
                        </div>
                        <button id="portifolio" class="btn-more" type="button" onClick="actModal(this)">SAIBA MAIS</button>
                    </div>
                    <div class="wrap-project">
                        <img src="<?php echo INCLUDE_PATH; ?>images/portifolio.jpeg" alt="">
                    </div>
                </div>
                <div class="sample">
                    <div class="wrap-description">
                        <div class="title-project">
                            <h2 class="title-lista">LISTA DE COMPRAS ONLINE</h2>
                        </div>
                        <p class="p-description description-lista">Site estático simples, desenvolvido com intuito de ajudar
                            pessoas ao fazer lista de compras, sem a necessidade de instalação de aplicativo,
                            mesmo o usuário fechando o navegado a lista mantém salva, ainda com opção de cálculo
                            de uma pré lista com a diferença do valor real da lista. Ideal tanto para pessoas
                            que apenas desejam fazer uma lista simples quanto para pessoas que desejam controlar
                            seus gastos, o serviço ainda tem a opção de microfone, aonde o usuário por estar com
                            as mão ocupadas pode optar de falar o item ao invés de digitar.
                        </p>
                        <div class="technologies">
                            <div class="btn-tech">HTML</div>
                            <div class="btn-tech">CSS</div>
                            <div class="btn-tech">JAVASCRIPT</div>
                        </div>
                        <button id="lista" class="btn-more" type="button" onClick="actModal(this)">SAIBA MAIS</button>
                    </div>
                    <div class="wrap-project">
                        <img src="<?php echo INCLUDE_PATH; ?>images/lista.jpeg" alt="">
                    </div>
                </div>
                <div class="sample">
                    <div class="wrap-description vigas-description">
                        <div class="title-project">
                            <h2 class="title-vigas">CALC VIGAS ENGENHARIA</h2>
                        </div>
                        <p class="p-description description-vigas">Software inspirado no já conhecido f-tool, porém CALC VIGAS
                            focado em apenas vigas. Assim o usuário inserindo os esforços na viga, com o software se encarregando 
                            de fazer todos os cálculos complexos de esforços de momento e cisalhamento, assim desenhando seus 
                            respectivos diagramas. Também calculando a área mínima de aço da armadura que possa suportar tais 
                            características e até sugerindo uma combinação de bitolas aonde o usuário pode fazer seus ajustes e 
                            automaticamente o software o-recalcula. Poém o calculo das armaduras apenas se limita as vigas de seção 
                            retangular/quadrada. O Programa realiza calculos não de apenas 2 apoios mais de quantos mais apoios 
                            forem necessários, pois executa calculos com a técnica de vigas hiperestáticas e equações lineares quando
                             necessário. Assim salvando o usuário de mais de 30 folhas de cálculos dependendo da complexidade em 
                             apenas frações de segundos. No vídeo acima resolvo vários exercícios no YouTube em frações de segundo 
                             usando o software.
                        </p>
                        <div class="technologies">
                            <div class="btn-tech">HTML</div>
                            <div class="btn-tech">CSS</div>
                            <div class="btn-tech">JAVASCRIPT</div>
                            <div class="btn-tech">CANVAS</div>
                            <div class="btn-tech">ELECTRONJS</div>
                        </div>
                        <button id="vigas" class="btn-more" type="button" onClick="actModal(this)">SAIBA MAIS</button>
                    </div>
                    <div class="wrap-project project-vigas">
                        <img src="<?php echo INCLUDE_PATH; ?>images/vigas.jpeg" alt="">
                    </div>
                </div>
                <div class="sample">
                    <div class="wrap-description hidro-description">
                        <div class="title-project">
                            <h2 class="title-hidro">Hidro água fria</h2>
                        </div>
                        <p class="p-description description-hidro">Software desenvolvido para ajudar e otimizar projetos
                            hidrosanitários de água fria, assim o usuário em apenas poucos instantes
                            consegue calcular toda o seu projeto hidro e quantificar as pressões que existem
                            em cada ponto de utilização, assim seguindo a norba brasileira quando um ponto de
                            utilização não tem a pressão mínima necessária prontamente o software sinaliza
                            com uma cor vermelha sobre o treco e sendo necessário fazer ajustes como por
                            exemplo o redimensionamento do(s) diâmetros do trecho ou até dos trechos anteriores.
                            Com o Software tal cálculo pode ser feito em questão de segundos com precisão
                            salvando o engenheiro de um dia perdido de recálculos, pois uma vês que se altera
                            um diâmetro de uma tubulação há a necessidade de recalcular todo o projeto.
                            Após terminado os cálculos o usuário pode solicitar um pdf pelo o programa, pois
                            o mesmo quantifica todos os componentes que vão no projeto como comprimento
                            de cada tubulação, torneiras e quaisquer outro acessório.
                        </p>
                        <div class="technologies">
                            <div class="btn-tech">HTML</div>
                            <div class="btn-tech">CSS</div>
                            <div class="btn-tech">JAVASCRIPT</div>
                            <div class="btn-tech">ELECTRONJS</div>
                            <div class="btn-tech">LOKIJS</div>
                        </div>
                        <button id="hidro" class="btn-more" type="button" onClick="actModal(this)">SAIBA MAIS</button>
                    </div>
                    <div class="wrap-project project-hidro">
                        <img src="<?php echo INCLUDE_PATH; ?>images/hidro.jpeg" alt="">
                    </div>
                </div>
            </section>

            <section id="tecnologias" class="abilitis">
                <h2 class="title-tecnologias">TECNOLOGIAS</h2>

                <div class="wrap-tech">
                    <table>
                        <thead>
                            <tr>
                                <th>FRONTEND <i class="fa-solid fa-code"></i></th>
                                <th>BACKEND <i class="fa-solid fa-database"></i></th>
                                <th>MOBILE <i class="fa-solid fa-mobile-screen"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tech">html <i class="fa-brands fa-html5"></i></td>
                                <td class="tech">javascript <i class="fa-brands fa-js"></i></td>
                                <td class="tech">react native <i class="fa-brands fa-react"></i></td>
                            </tr>
                            <tr>
                                <td class="tech">css <i class="fa-brands fa-css3-alt"></i></td>
                                <td class="tech">nodejs <i class="fa-brands fa-node-js"></i></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tech">jquery jQuery</td>
                                <td class="tech">php <i class="fa-brands fa-php"></i></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tech">reactjs <i class="fa-brands fa-react"></i></td>
                                <td class="tech">mysql <i class="fa-solid fa-database"></i></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="tech">javascript <i class="fa-brands fa-js"></i></td>
                                <td class="tech">mongodb <i class="fa-solid fa-database"></i></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>


            <section id="contato" class="touch">

                <h2 class="title-contato">CONTATO</h2>
                <div class="pannel-touch">
                    <div class="center-touch">
                        <a href="https://github.com/DioneFerreDev" class="btn-touch" onClick="redirect(event, this)">GIT HUB <i class="fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/dione-ferreira-teixeira-46948a262" class="btn-touch" onClick="redirect(event, this)">LINKEDIN <i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
                <?php
                if (isset($_POST['acao']) && $_POST['acao'] == 'ENVIAR') {
                    $name = $_POST['name'];
                    echo '<script>alert(enviar email '.$name.')</script>';
                    // $email = new Email("dione@ferrTeix.com","Dione","Ferre123@",$name);
                    // $email.
                }
                // $email = new Email();
                
                // $mail = new PHPMailer(true);

                ?>
                <div class="wrap-form">
                    <form id="form-email" method="post" enctype="multipart/form-data" action="<?php echo INCLUDE_PATH; ?>painel/ajax/formularios.php">

                        <div class="painel-alert">
                            <h2></h2>
                        </div>
                        <div class="wrap-input">
                            <label for="">EMAIL</label>
                            <input type="text" name="email" required />
                        </div>
                        <div class="wrap-input">
                            <label class="label-nome" for="">NOME</label>
                            <input type="text" name="nome" required />
                        </div>
                        <div class="wrap-input">
                            <label class="label-assunto" for="">ASSUNTO</label>
                            <textarea type="text" name="assunto" required></textarea>
                        </div>
                        <div class="wrap-input">
                            <input class="input-enviar" type="submit" name="acao" value="ENVIAR" />
                        </div>
                    </form>
                </div>
                <base href="" base="<?php echo INCLUDE_PATH; ?>painel/">
                </base>
            </section>