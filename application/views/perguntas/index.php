<?php $this->load->view('header'); ?>

<section class="s-hero-default">
    <div class="container">
        <div class="top-infos">
            <h1 data-aos="fade-up">Perguntas Frequentes</h1>

            <ul class="breadcrumbs">
                <?php foreach ($breadcrumbs as $index => $breadcrumb): ?>
                    <li>
                        <?php 
                            if ($index === count($breadcrumbs) - 1):
                        ?>
                            <?php echo $breadcrumb['name']; ?>
                        <?php else: ?>
                            <a href="<?php echo $breadcrumb['url']; ?>"><?php echo $breadcrumb['name']; ?></a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>

<section class="section_perguntas">
    <div class="caption" data-aos="fade-up">
        <img src="assets/image/default/logo-title.png">
        <p class="title">Central de Ajuda</p>
    </div>

    <p class="subtitle" data-aos="fade-up">As respostas que você procura podem estar aqui.<br> Confira!</p>

    <div class="questions-list" data-aos="fade-right">
        <div class="text_title">
            <p>Nesta página, você você encontra respostas para as dúvidas mais comuns de quem adquire um lote. Se
                após a leitura permanecer alguma dúvida, estaremos à disposição para esclarecê-la.</p>

            <div class="w3-bar w3-black tab_menu_question">
                <button class="w3-bar-item w3-button active" onclick="openListQuestion(event, 'ver-todos')">Ver
                    Todos</button>
                <button class="w3-bar-item w3-button"
                    onclick="openListQuestion(event, 'contrato')">Contrato</button>
                <button class="w3-bar-item w3-button" onclick="openListQuestion(event, 'gran-viver')">Gran
                    Viver</button>
                <button class="w3-bar-item w3-button"
                    onclick="openListQuestion(event, 'residencial-fechado')">Residencial Fechado</button>
            </div>

        </div>



        <div class="container_question">
            <div id="ver-todos" class="w3-container option-question">
                <div class="container_accordion" id="accordion-container">

                    <div class="item">
                        <div class="accordion">
                            <p>Quando a Taxa Associativa é devida?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                A Taxa Associativa é devida a partir do momento em que o comprador adquire o imóvel
                                e passa a usufruir dos serviços da associação.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>O que é Taxa Associativa?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                É uma contribuição mensal destinada à manutenção das áreas comuns e segurança do
                                loteamento.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>É possível comprar um imóvel representado por um procurador?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Sim, desde que o procurador tenha uma procuração pública específica com poderes para
                                tal finalidade.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Após a compra, a topografia do imóvel pode ser alterada? Se sim, por quais razões?
                            </p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Sim, mediante aprovação prévia da associação ou da prefeitura, para fins como
                                drenagem, nivelamento ou obras autorizadas.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como acompanhar o andamento das obras do loteamento?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Acompanhe pelo portal do cliente, redes sociais da empresa ou contato direto com o
                                atendimento.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>O que é notificação cartorária?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                É um comunicado formal enviado por cartório para informar sobre pendências ou
                                situações legais envolvendo o imóvel.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como contratar os serviços de abastecimento de água e de energia elétrica?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Após o registro do imóvel, entre em contato com as concessionárias locais com a
                                documentação do lote.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como obter certidão de número? (Numeração correta do seu imóvel)</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                A certidão pode ser solicitada junto à prefeitura mediante apresentação dos
                                documentos do lote e proprietário.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Quando é possível construir e qual tipo de construção é possível executar?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Após a entrega oficial do lote e liberação pela associação. As construções devem
                                seguir o regulamento interno.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>O que é Associação de Moradores?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                É uma entidade que representa os interesses dos moradores, cuida da manutenção do
                                local e da gestão de recursos.
                            </div>
                        </div>
                    </div>


                </div>

                <div id="pagination-container"></div>
            </div>

            <div id="contrato" class="w3-container option-question" style="display:none">
                <div class="container_accordion" id="accordion-container-contrato">
                    <div class="item">
                        <div class="accordion">
                            <p>Quando a Taxa Associativa é devida?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                A Taxa Associativa é devida a partir do momento em que o comprador adquire o imóvel
                                e passa a usufruir dos serviços da associação.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>O que é Taxa Associativa?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                É uma contribuição mensal destinada à manutenção das áreas comuns e segurança do
                                loteamento.
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="accordion">
                            <p>Como é calculada a Taxa Associativa?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                A taxa é calculada com base no tamanho do lote e nos serviços oferecidos pela
                                associação.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Posso negociar a Taxa Associativa?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                A Taxa Associativa é um valor fixo determinado pela associação, não sendo passível
                                de negociação individual.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>O que acontece se eu não pagar a Taxa Associativa?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                O não pagamento pode acarretar multas, juros e restrições no uso das áreas comuns.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Quando devo começar a pagar a Taxa Associativa?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                O pagamento começa a partir da data da aquisição do imóvel e do usufruto dos
                                serviços.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Posso solicitar desconto na Taxa Associativa?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Descontos são avaliados apenas em casos especiais, mediante análise da associação.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como faço para contestar um valor cobrado na Taxa Associativa?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                É necessário entrar em contato com a administração da associação para esclarecer
                                dúvidas ou contestar cobranças.
                            </div>
                        </div>
                    </div>

                </div>

                <div id="pagination-container-contrato"></div>
            </div>

            <div id="gran-viver" class="w3-container option-question" style="display:none">
                <div class="container_accordion" id="accordion-container-gran-viver">
                    <div class="item">
                        <div class="accordion">
                            <p>Quais são os benefícios exclusivos do Gran Viver?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Os moradores têm acesso a áreas de lazer exclusivas, segurança 24h e clube social.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como funcionam as regras para reformas no Gran Viver?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Todas as reformas devem ser aprovadas previamente pela associação para manter o
                                padrão do loteamento.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Posso alugar meu imóvel no Gran Viver?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Sim, porém deve-se comunicar a administração para cadastro e acompanhamento do
                                locatário.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como é feita a manutenção das áreas comuns?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                A manutenção é feita mensalmente por equipes contratadas pela associação dos
                                moradores.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Quais são os horários de funcionamento das áreas de lazer?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                As áreas de lazer funcionam diariamente das 8h às 22h, respeitando normas de
                                convivência.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Existe controle de acesso para visitantes?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Sim, todos os visitantes devem ser registrados na portaria para segurança dos
                                moradores.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>O que devo fazer em caso de problemas com o fornecimento de água?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Entre em contato com a administração do condomínio que fará a comunicação com a
                                concessionária.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como posso participar das reuniões da associação?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                As reuniões são abertas e divulgadas com antecedência pela associação via e-mail e
                                avisos no portal.
                            </div>
                        </div>
                    </div>
                </div>

                <div id="pagination-container-gran-viver"></div>
            </div>


            <div id="residencial-fechado" class="w3-container option-question" style="display:none">
                <div class="container_accordion" id="accordion-container-residencial-fechado">
                    <div class="item">
                        <div class="accordion">
                            <p>Quais são as vantagens de morar em um residencial fechado?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Segurança reforçada, controle de acesso e áreas comuns exclusivas são as principais
                                vantagens.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como funciona a segurança no residencial?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Segurança 24 horas com rondas internas, câmeras e portaria controlada.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Posso fazer eventos na área comum do residencial?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Sim, desde que respeite as normas internas e faça a reserva prévia com a
                                administração.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Há restrições quanto a animais de estimação?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Sim, alguns residenciais possuem regras específicas sobre tipos e tamanhos de
                                animais.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Qual o procedimento para solicitar manutenção na minha unidade?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Você deve comunicar a administração via formulário online ou telefone para
                                agendamento.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como é a gestão do lixo no residencial fechado?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Existe coleta seletiva e pontos de descarte organizados para promover
                                sustentabilidade.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Posso personalizar a fachada do meu imóvel?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Apenas alterações aprovadas pela associação para manter a harmonia visual do
                                residencial.
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="accordion">
                            <p>Como posso participar das decisões do residencial?</p>
                        </div>
                        <div class="desc">
                            <div class="accordion_text">
                                Participando das assembleias e votações convocadas pela associação de moradores.
                            </div>
                        </div>
                    </div>
                </div>

                <div id="pagination-container-residencial-fechado"></div>
            </div>

        </div>

    </div>


</section>

<?php $this->load->view('footer'); ?>