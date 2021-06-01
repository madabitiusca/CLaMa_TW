<!DOCTYPE html>
<html lang="ro">

    <head>
        <title>ClaMA (Class Manager)</title>
        <meta charset="utf-8">
    </head>

    <body>
        <header>ClaMA (Class Manager)</header>

        <section typeof="sa:AuthorsList">
            <h2>Autori</h2>
            <ul>
              <li typeof="sa:ContributorRole" property="schema:author">
                <span typeof="schema:Person">
                  <meta property="schema:givenName" content="Madalina">
                  <meta property="schema:familyName" content="Bitiusca">
                  <span property="schema:name">Madalina Bitiusca</span>
                </span></li>
              <li typeof="sa:ContributorRole" property="schema:author">
              <span typeof="schema:Person">
                  <meta property="schema:givenName" content="Andreea">
                  <meta property="schema:familyName" content="Nistor">
                  <span property="schema:name">Andreea Nistor</span>
                </span></li>
                <ul>
                  <li property="schema:roleContactPoint" typeof="schema:ContactPoint">
                    <a href="mailto:madalina.bitiusca@info.uaic.ro"
                       property="schema:email">madalina.bitiusca@info.uaic.ro</a>
                  </li>
                  <li property="schema:roleContactPoint" typeof="schema:ContactPoint">
                    <a href="mailto:andreea.nistor@info.uaic.ro"
                       property="schema:email">andreea.nistor@info.uaic.ro</a>
                  </li>
                </ul>
              </li>
            </ul>
          </section>

        <section id="cerinte" property="schema:description" >
            <h2>Cerinte</h2>
            <p>Se dorește realizarea unui utilitar pentru managementul unei grupe de studenți. Soluția Web trebuie să permită minimal:</p>

                <ul>
                    <li>Posibilitatea de a genera un cod ce va fi utilizat pentru a face prezența (cod ce va expira după o perioada de S secunde).</li>
                    <li>Posibilitatea de a pune un numar de note (același pentru toți studenții) și de a folosi o formulă matematică ce utilizează operatori de bază (minimal: +, -, *, /, round, floor, ceil) pentru a calcula o notă finală.</li>
                    <li> Studenții vor avea posibilitatea de încarcare a unor documente ce trebuie să fie notate de către profesor și de a-și vedea notele propuse de acesta.</li>
                    <li>Profesorii pot accepta studenții într-o anumita grupă sau pot revoca acest drept, pot pune note asociate diverselor teme sau pentru ascultari. Profesorii vor avea posibilitatea de generare a unui catalog ce poate fi exportat în oricare dintre formatele CSV, HTML, PDF.</li> 
                    <li>Aplicația trebuie să poată fi folosită simultan la diferite materii și în ani diferiți. </li>
                    <li>Lista studenților și profesorilor se va importa/exporta (d)in format XML.</li>
                </ul>
        </section>

        <section id="continutulAplicatiei" property="schema:description">
            <h2>Aplicatia contine:</h2>
                <ul>
                    <li>Autentificarea si inregistrarea in pagina</li>
                    <li>Pagina profesorului</li>
                    <li>Pagina studentului</li>
                  </ul>
        </section>
        <section id="Interfata" property="schema:description">
        <h2>Interfata utilizatorului</h2>
            <p> Pentru ca utilizatorul sa poata accesa aplicatia, indiferent ca acesta este student sau cadru didactic, 
        acesta trebuie sa isi creeze un cont nou sau sa se inregistreze cu contul deja creat. </p>
        <h3>Interfata studentului</h3>
            <p>Studentul va avea acces la:</p>
        <ul>
            <li>notele obtinute la materiile din anul si semestru corespunzator</li>
            <li>sectiunea de anunturi, unde acestia pot vedea ultimele noutati </li>
            <li>numarul de prezente la toate materiile</li>
        </ul>
        <h3> Interfata cadrelor didactice </h3>
             <p>Cadrele didactrice vor putea sa</p>
        <ul>
            <li>genereze coduri de prezenta pentru studenti</li>
            <li>sa modifice lista studentilor</li>
            <li>sa adauge un anunt</li>
            <li>sa introduca formule de calcul pentru notele studentilor</li>
        </ul>
        </section>
        </body>

