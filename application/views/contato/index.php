<?php $this->load->view('header'); ?>

<section class="s-hero-default">
  <div class="container" data-aos="fade-up">
      <div class="top-infos">
          <h1>Contato</h1>

        <ul class="breadcrumbs">
            <?php foreach ($breadcrumbs as $index => $breadcrumb): ?>
                <li>
                    <?php 
                        // Verifica se é o último item. Se for, exibe sem link
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

  <section class="section_contato">
      <div class="caption" data-aos="fade-up">
          <img src="assets/image/default/logo-title.png">
          <p class="title">Nossos canais</p>
      </div>

      <p class="subtitle" data-aos="fade-up">Quer comprar, tem dúvidas ou<br> já é cliente? Fale com a gente!</p>
      <p class="subtitle2" data-aos="fade-up">Estamos prontos para ajudar em cada etapa.</p>

      <div class="contact_container">
          <div class="left" data-aos="fade-right">

              <div class="itens_contact">
                  <div class="item">
                      <img src="assets/image/page-contato/atendimento.png">
                      <div class="texts">
                          <p>Atendimento ao cliente:</p>
                          <p>(11) 4200-6020</p>
                      </div>
                  </div>

                  <div class="item">
                      <img src="assets/image/page-contato/central.png">
                      <div class="texts">
                          <p>Central:</p>
                          <p>(31) 3516-6600</p>
                      </div>
                  </div>

                  <div class="item">
                      <img src="assets/image/page-contato/cobranca.png">
                      <div class="texts">
                          <p>Cobrança:</p>
                          <p>(11) 4200-6020</p>
                      </div>
                  </div>
              </div>

              <div class="itens_address">
                  <div class="item">
                      <img src="assets/image/page-contato/endereco.png">
                      <div class="texts">
                          <p>Rua dos Timbiras, 2.072 – 10º andar – salas: 1008 a 1011 – Bairro Lourdes – Belo
                              Horizonte, MG</p>
                      </div>
                  </div>
                  <div class="item">
                      <img src="assets/image/page-contato/horario.png">
                      <div class="texts">
                          <p><b>Horário Comercial:</b> Segunda a Sexta: das 09h às 18h.</p>
                      </div>
                  </div>

              </div>

          </div>

          <div class="right" data-aos="fade-left">
              <form class="formulario_contato form-footer">
                  <p class="title_form">Envie uma Mensagem</p>
                  <input type="text" name="nome" placeholder="Nome" required>
                  <input type="email" name="email" placeholder="E-mail" required>
                  <input type="text" name="telefone" placeholder="Telefone" required>
                  <textarea rows="10" name="messagem"></textarea>
                  <p>
                      <button type="submit">Enviar</button>
                  </p>
              </form>
          </div>

      </div>
  </section>

  <section class="section_worked">
      <div class="container_worked" data-aos="fade-up">
          <p class="title_worked">Trabalhe Conosco</p>
          <p class="subtitle_worked">Procurando reconhecimento profissional e oportunidade no mercado? Venha trabalhar na Gran Viver, empresa consolidada como a maior loteadora de Minas Gerais, aqui os colaboradores são desenvolvidos e reconhecidos profissionalmente. Junte-se ao nosso time e faça a diferença!</p>
          <button>Encontre a oportunidade que mais combina com você. ➔</button>
      </div>

  </section>

  <iframe data-aos="fade-up" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.9671890764225!2d-43.947175228150876!3d-19.92578744049027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6992a3c160395%3A0x9d4ed3ea3bfff855!2sRua%20dos%20Timbiras%2C%202072%20-%20Centro%2C%20Belo%20Horizonte%20-%20MG%2C%2030140-061!5e0!3m2!1spt-BR!2sbr!4v1754935634410!5m2!1spt-BR!2sbr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" height="400" width="100%"></iframe>

<?php $this->load->view('footer'); ?>