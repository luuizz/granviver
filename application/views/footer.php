<footer class="footer" id="contato_empresarial">
    <div class="container">
        <div class="top-area">
            <div class="form-contato">
                <img src="<?php echo $baseUrl; ?>/assets/image/icons/cartaWhite.png" id="carta-icon">
                <h3>Fale conosco</h3>
                <p>Nós estamos muito interessados no que você tem a dizer.</p>
                <form class="form-footer">
                    <input type="text" placeholder="Seu nome" required>
                    <input type="email" placeholder="Seu e-mail" required>
                    <input type="text" placeholder="Seu telefone" class="cont_telefone" required>
                    <textarea placeholder="Mensagem"></textarea>
                    <button type="submit">Enviar <img src="<?php echo $baseUrl; ?>/assets/image/icons/arrow_icon.png"></button>
                </form>
            </div>

            <div class="right-area">
                <div class="area-top">
                    <ul class="call-action">
                        <li>
                            <a href="tel:08009416699">
                                <div class="icon-footer">
                                    <img src="<?php echo $baseUrl; ?>/assets/image/icons/tel_icon.png">
                                </div>
                                <span><small>Fale conosco</small>0800 941 6699</span>
                            </a>
                        </li>

                        <li>
                            <a href="mailto:granviver@abcopolispaulista.com.br">
                                <div class="icon-footer">
                                    <img src="<?php echo $baseUrl; ?>/assets/image/icons/send_icon.png">
                                </div>
                                <span><small>Envie um e-mail</small>granviver@abcopolispaulista.com.br</span>
                            </a>
                        </li>
                    </ul>

                    <div class="container-img">
                        <img src="<?php echo $baseUrl; ?>/assets/image/excavator.png" class="excavator">
                    </div>
                </div>

                <div class="area-bottom">
                    <div class="top">
                        <img src="<?php echo $baseUrl; ?>/assets/image/granviver_icons/GranViver_icon2.png" alt="Logo">
                        <p class="history">Há mais de 50 anos, a Gran Viver transforma sonhos em realidade, criando espaços onde mais de 10 mil famílias já encontraram o lugar ideal para viver.</p>
                    </div>

                    <div class="bottom">
                        <div class="social-links">
                            <a href="https://www.instagram.com/granviver/">
                                <img src="<?php echo $baseUrl; ?>/assets/image/icons/insta_icon.png" alt="Instagram">
                            </a>
                            <a href="https://www.facebook.com/granviver">
                                <img src="<?php echo $baseUrl; ?>/assets/image/icons/face_icon.png" alt="Facebook">
                            </a>
                            <a href="https://www.linkedin.com/company/gran-viver-urbanismo/mycompany/">
                                <img src="<?php echo $baseUrl; ?>/assets/image/icons/linkedin_icon.png" alt="LinkedIn">
                            </a>
                        </div>

                        <div class="infos-contact">
                            <div class="info-line">
                                <img src="<?php echo $baseUrl ?>/assets/image/icons/local_icon.png" alt="Endereço">
                                <span><strong>Endereço:</strong> Edifício Spartacus Rua Ceará, n1431, 15º andar, Funcionários -
                                    BH</span>
                            </div>

                            <div class="info-line">
                                <img src="<?php echo $baseUrl ?>/assets/image/icons/clock_icon.png" alt="Horário">
                                <span><strong>Aberto:</strong> Seg-Sex / 9h às 18h</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy">
            <p class="copy-text">© <?php echo date('Y'); ?> <span>Gran Viver</span>. Todos os direitos reservados</p>

            <div class="copy-img">
                <span>Desenvolvimento:</span>
                <img src="<?php echo $baseUrl; ?>/assets/image/bloko.png" class="bloko">
            </div>

            <div class="copy-agency">
                <p>Desenvolvido por <a href="https://www.agenciaaffinity.com.br/" target="_blank">Affinity</a></p>
            </div>
        </div>
    </div>
</footer>


    <?php include 'include/social-share.php' ?>
    <script type="text/javascript" 
    src="https://app.contako.com.br/WidgetJSFixo.sikoni/?cadastro=9B82E057CE"> 
    </script>

    <script src="/plugins/jquery/jquery-3.6.0.min.js"></script>
    <script src="/plugins/lightbox2/src/js/lightbox.js"></script>
    <script src="/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="/vendor/igorescobar/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/all.js"></script>
    </body>
</html>
