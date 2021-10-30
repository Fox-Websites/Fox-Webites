<?php
    // Template Name: Contato
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section id="contact">
    <div id="contact__content">
      <h1 id="contact__content__title">
        Tem alguma duvida? Entre em contato conosco
      </h1>
      <p id="contact__content__subtitle">
        Preencha o formulário e nossa equipe entrará em contato em até 24
        horas.
      </p>
      <form id="contact__content__form" action="https://formspree.io/f/mwkajoyg" method="POST">
        <input class="contact__content__form__input" placeholder="Nome Completo" type="text" name="name" />
        <input class="contact__content__form__input" placeholder="E-mail" type="email" name="email" />
        <input class="contact__content__form__input" placeholder="Telefone Celular" type="tel" name="tel" />
        <textarea class="contact__content__form__input" placeholder="Mensagem" name="message" rows="5"></textarea>
        <input type="submit" id="contact__content__form__submit" value="Enviar" />
      </form>
    </div>
    <div id="contact__info">
      <div id="contact__info__content">
        <div id="contact__info__contact">
          <h2 id="contact__info__contact">Contato</h2>
          <ul id="contact__info__contac_list">
            <li>
              <a href="mailto:contato@foxwebsites.com.br">
                <p>contato@foxwebsites.com.br</p>
              </a>
            </li>
            <li>
              <a href="tel:51996236798">
                <p>+ 55 (51) 9 9623-6798</p>
              </a>
            </li>
          </ul>
        </div>
        <div id="contact__info__location">
          <h2 id="contact__info__location__title">Localização</h2>
          <p id="contact__info__location__description">
            Camaquã - RS - Brasil
          </p>
        </div>
      </div>
      <div id="contact__info__contact__map">
        <iframe id="contact__info__contact__map__iframe"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3425.2592336925386!2d-51.81272598404256!3d-30.851416372565485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951a771f5bfc9eb1%3A0x2e44c13de2d4b98e!2sAv.%20Pres.%20Vargas%2C%20433%20-%20Centro%2C%20Camaqu%C3%A3%20-%20RS%2C%2096180-000!5e0!3m2!1spt-BR!2sbr!4v1634764849574!5m2!1spt-BR!2sbr"
          style="border: 0" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>