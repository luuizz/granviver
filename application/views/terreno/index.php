<?php $this->load->view('header'); ?>

<section class="s-hero-default">
  <div class="container" data-aos="fade-up">
      <div class="top-infos">
          <h1>Ofereça seu Terreno</h1>

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

  <section class="section_terreno">
      <div class="caption" data-aos="fade-up">
          <img src="assets/image/default/logo-title.png">
          <p class="title">Ofereça sua área</p>
      </div>
      <p class="subtitle" data-aos="fade-up">Quer oferecer sua área para nós? <br> Preencha os campos abaixo:</p>


      <div class="formulario" data-aos="fade-left">
          <div class="group_input">
              <div class="inputs">
                  <label>Nome</label>
                  <input type="text" name="nome" required>
              </div>
              <div class="inputs">
                  <label>Email</label>
                  <input type="email" name="email" required>
              </div>
          </div>

          <div class="group_input">
              <div class="inputs">
                  <label>Telefone</label>
                  <input type="text" name="telefone" required>
              </div>
              <div class="inputs">
                  <label>Localização da Área</label>
                  <input type="email" name="email" required>
              </div>
          </div>
          <div class="group_textarea">
              <div class="textarea_msg">
                  <label>Mensagem</label>
                  <textarea rows="10" name="messagem"></textarea>
              </div>
          </div>
          <div class="group_privacy_button">
              <div class="group_privacy">
                  <label>Privacidade</label>
                  <div class="group">
                      <input type="checkbox" name="policy_private">
                      <label class="text_policy_private"> Eu li e aceito a politica de privacidade</label>
                  </div>
              </div>
              <div class="btn_form">
                  <button type="submit">Enviar</button>
              </div>
          </div>

      </div>




  </section>

<?php $this->load->view('footer'); ?>