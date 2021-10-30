<?php
    // Template Name: Politica de Privacidade
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section id="policy">
    <h1 id="policy__title">Policita de Privacidade</h1>

    <p id="policy__last_update">Ultima modificação: 20 de Outubro de 2021</p>

    <p>
      A Política de Privacidade On-Line do site da
      <span>Fox Websites</span> (https://foxwebsites.com.br) foi criada para
      respeitar a LGPD (Lei Geral de Proteção de Dados) e afirmar o nosso
      compromisso com a segurança e a privacidade das informações coletadas
      dos visitantes de nosso site. Esta política está sujeita a eventuais
      atualizações e recomendamos que ela seja consultada periodicamente. Você
      pode visitar nosso site e conhecer nossos serviços e produtos, verificar
      nossas ofertas, ler artigos, obter informações e suporte sem precisar
      fornecer nenhuma informação pessoal. Mas, caso isso aconteça, esta
      política procura esclarecer como coletamos e tratamos seus dados
      pessoais.
    </p>

    <h2>Como tratamos os dados</h2>
    <ol>
      <li>
        <p>
          Qualquer informação fornecida pelos usuários será coletada e
          guardada de acordo com os padrões atuais de segurança e
          confiabilidade.
        </p>
      </li>
      <li>
        <p>
          Utilizamos em nosso site o protocolo padrão HTTPS que garante que
          todas as informações coletadas dos usuários trafeguem de forma
          segura, utilizando processo de criptografia padrão da Internet.
        </p>
      </li>
      <li>
        <p>
          As informações pessoais que nos forem fornecidas serão coletadas por
          meios legais. Essa coleta terá o propósito de comunicação comercial
          para que possamos vender nossos serviços, produtos, prestar suporte
          a atendimento sobre eles.
        </p>
      </li>
      <li>
        <p>
          A menos que tenhamos determinação legal ou judicial, as informações
          dos usuários jamais serão fornecidas a terceiros ou usadas para
          finalidades diferentes daquelas para as quais foram coletadas.
        </p>
      </li>
      <li>
        <p>
          O acesso as informações coletadas está restrito apenas aos gestores
          da <span>Fox Websites</span> e manteremos a integridade das
          informações que nos forem fornecidas.
        </p>
      </li>
      <li>
        <p>
          Eventualmente, poderemos utilizar cookies (*) para confirmar sua
          identidade, personalizar seu acesso e acompanhar a utilização de
          nosso website visando o aprimoramento de sua navegação e
          funcionalidade.
        </p>
      </li>
      <li>
        <p>
          Colocamos à disposição de nossos usuários, canais de atendimento ao
          cliente, para esclarecer qualquer dúvida que possa surgir referente
          aos seus dados. Estes canais podem ser acionados através do e-mail
          contato@foxwebsites.com.br ou do nosso Formulário de contato.
        </p>
      </li>
    </ol>

    <h2>Como coletamos os dados</h2>
    <ul>
      <li>
        <p>
          Através dos rastreadores e cookies dos serviços de marketing e SEO
          da <span>Google</span>. Estas ferramentas coletam dados anônimos
          como a sua localização, seu IP, rastreia a navegação e analisa o seu
          comportamento em nosso site a fim de nos fornecer relatórios sobre
          os serviços e produtos que você procurou e qual a origem da sua
          visita; pesquisa do Google, acesso direto ou link existente em outro
          site, a <span>Fox Websites</span> respeita a política de privacidade
          da Google, para mais informações leia a Política diretamente no site
          da Google.
        </p>
      </li>
      <li>
        <p>
          <span>Cookies do WordPress</span>. Utilizamos a plataforma
          WordPress, ele necessita criar cookies (pequenos arquivos de texto
          que podem definir preferências) no computador ou dispositivo do
          visitante para fornecer uma experiência mais agradável de navegação
          baseado na coleta de dados anônimos. Os cookies definem por exemplo
          o cache do servidor para que a navegação se torna mais rápida e
          fluída. Importante! Cookies não coletam informações pessoais suas,
          nem nos permite acessar arquivos e programas de seu computador. Você
          pode remover os cookies a qualquer momento limpando o histórico do
          seu navegador.
        </p>
      </li>
    </ul>

    <h2>Consentimento ou Bloqueio de Cookies</h2>
    <p>
      Para que os recursos de coleta de dados em nosso site funcione
      adequadamente é necessário o uso de cookies (pequenos arquivos de texto
      que podem definir preferências). Os cookies não são programas, não
      roubam dados de seu computador e não colocam a sua navegação em risco,
      no entanto, é de seu direito bloquear nossos cookies caso queira.
    </p>

    <h2>Seus Direitos</h2>
    <p>Você tem os seguintes direitos:</p>
    <ul>
      <li>
        <p>
          O direito de bloquear qualquer tipo de rastreador e cookie gerado em
          nosso site de modo a não compartilhar nenhum tipo de informação
          sobre a sua conexão e acesso ao nosso site.
        </p>
      </li>
      <li>
        <p>
          O direito de nos pedir para atualizar qualquer informação pessoal
          incorreta de que temos sobre você.
        </p>
      </li>
      <li>
        <p>
          O direito de optar por sair de quaisquer meios de comunicação
          comercial e de marketing.
        </p>
      </li>
      <li>
        <p>
          O direito de pedir a remoção de qualquer dado pessoal que tenhamos
          armazenado sobre você.
        </p>
      </li>
    </ul>
    <p>
      Reservamos o prazo de 5 dias úteis para lhe responder sobre qualquer
      contato referente aos seus dados pessoais, podendo este prazo ser
      estendido em período de festas, feriados prolongados, recesso e férias
      coletivas.
    </p>
  </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>