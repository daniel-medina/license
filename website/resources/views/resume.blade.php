@extends('template')

@section('content')
<div class="container">
  <div class="row">
    <div class="resume">
      <!-- Photo et présentation rapide -->
      <div class="presentation">
        <div id="photo">
          <img src="/images/photo.png" alt="Photo" title="Photo" />
        </div>
        <div class="nom">Daniel MEDINA</div>
        <div class="age">23 ans</div>
        <div class="description">
          <ul>
            <li>Sérieux; curieux; organisé</li>
            <li>Autodidacte</li>
            <li>Passionné d'informatique</li>
          </ul>
        </div>
        <div class="adresse">
          <table>
            <tr>
              <ul>
                <td class="icone"><i class="fas fa-home"></i></td>
                <td class="detail">
                  <li>42 avenue de la réponse</li>
                  <li>à tout</li>
                  <li>42000 Andromède</li>
                </td>
              </ul>
            </tr>
          </table>
        </div>
        <div class="telephone"><i class="fas fa-phone"></i> 07 66 66 66 66</div>
        <div class="email"><i class="fas fa-envelope"></i> daniel.medina@etu.umontpellier.fr</div>
        <!-- Compétences -->
        <div class="titre">
          <div id="texte">Compétences</div>
          <div id="trait"></div>
        </div>
        <div class="competences">
          <div id="nom">Permis B</div>
        </div>

        <!-- Systèmes GNU/Linux -->
        <div class="competences">
          <div id="nom">Systèmes GNU/Linux</div>
          <!-- 13 blocks en tout -->
          <div id="niveau">
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
          </div>
        </div>

        <!-- Développement web -->
        <div class="competences">
          <div id="nom">Développement web</div>
          <!-- 13 blocks en tout -->
          <div id="niveau">
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="n"></div>
            <div class="n"></div>
          </div>
        </div>

        <!-- Programmation -->
        <div class="competences">
          <div id="nom">Programmation</div>
          <!-- 13 blocks en tout -->
          <div id="niveau">
            <div class="o"></div>
            <div class="o"></div>
            <div class="o"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
            <div class="n"></div>
          </div>
        </div>


        <!-- Langues -->
        <div class="titre">
          <div id="texte">Langues</div>
          <div id="trait"></div>
        </div>
        <ul>
          <li><i class="fas fa-circle"></i> Francais C2 | Anglais B2</li>
          <li><i class="fas fa-circle"></i> Espagnol A1</li>
          <li><i class="fas fa-circle"></i> HTML | CSS | PHP | JavaScript | SQL</li>
          <li><i class="fas fa-circle"></i> Python | C/C++</li>
        </ul>

        <!-- Frameworks -->
        <div class="titre">
          <div id="texte">Frameworks</div>
          <div id="trait"></div>
        </div>
        <ul>
          <li><i class="fas fa-circle"></i> Pug | SaSS | Bootstrap | Skeleton</li>
          <li><i class="fas fa-circle"></i> Laravel | Lumen</li>
          <li><i class="fas fa-circle"></i> NodeJS | React | Vue</li>
        </ul>
        <!-- Base de données -->
        <div class="titre">
          <div id="texte">Base de données</div>
          <div id="trait"></div>
        </div>
        <ul>
          <li><i class="fas fa-circle"></i> MySQL | PostgreSQL | MongoDB</li>
        </ul>
        <!-- Internet -->
        <div class="titre">
          <div id="texte">Internet</div>
          <div id="trait"></div>
        </div>
        <ul>
          <li><a href="http://github.com/daniel-medina" title="Github" target="_blank">github</a></li>
        </ul>

      </div>

      <!-- Contenu du CV -->
      <div class="contenu">
        <!-- Expérience professionnelle -->
        <div class="col-lg-6 experience-professionnelle">
          <div class="titre">
            <div id="texte">Expérience professionnelle</div>
            <div id="trait"></div>
          </div>
          <div class="col-lg-12" id="bloc">
            <div class="info">
              <div id="date">2017-2018</div>
              <div id="nature">Stage</div>
            </div>
            <div class="nom">
              Mairie<br />
              Carcassonne
            </div>
            <div class="mention">
              TOTAL<br />
              8 semaines</div>
            <div class="activites">
              <div id="rappel">Activités</div>
              <div id="detail">Conception du progiciel OPENDREE | assistance informatique</div>
            </div>
          </div>
          <div class="col-lg-12" id="bloc">
            <div class="info">
              <div id="date">2015-2016</div>
              <div id="nature">Stage</div>
            </div>
            <div class="nom">
              Tressol Chabrier Carcassonne<br />
              Citroen
            </div>
            <div class="mention">
              TOTAL<br />
              8 semaines</div>
            <div class="activites">
              <div id="rappel">Activités</div>
              <div id="detail">Maintenance du réseau de l'entreprise | migration de base de donnée intranet</div>
            </div>
          </div>
          <div class="col-lg-12" id="bloc">
            <div class="info">
              <div id="date">2017-2018</div>
              <div id="nature">Stage</div>
            </div>
            <div class="nom">
              Centre des finances publique<br />
              Carcassonne
            </div>
            <div class="mention">
              TOTAL<br />
              8 semaines</div>
            <div class="activites">
              <div id="rappel">Activités</div>
              <div id="detail">Migration de données sur tableur | assistance informatique</div>
            </div>
          </div>
        </div>


        <!-- Expérience technique -->
        <div class="col-lg-6 experience-technique">
          <div class="titre">
            <div id="texte">Expérience technique</div>
            <div id="trait"></div>
          </div>
          <li><i class="fas fa-circle"></i> Fabrication de sites web</li>
          <li><i class="fas fa-circle"></i> Gestion de systèmes Gentoo GNU/Linux</li>
          <li><i class="fas fa-circle"></i> Gestion de noyau Linux</li>
          <li><i class="fas fa-circle"></i> Administration de serveurs GNU/Linux</li>
          <li><i class="fas fa-circle"></i> Protection / optimisation de serveurs GNU/Linux</li>
          <li><i class="fas fa-circle"></i> Maintenance de réseau d'entreprise</li>
          <li><i class="fas fa-circle"></i> Création de jeux vidéos simple en 2D en python</li>
          <li><i class="fas fa-circle"></i> Créations d'outils informatique pratique utilisés quotidiennement</li>
          <li><i class="fas fa-circle"></i> Gestion de multiples dépôts Git</li>
        </div>

        <!-- Éducation -->
        <div class="col-lg education">
          <div class="titre">
            <div id="texte">Éducation</div>
            <div id="trait"></div>
          </div>
          <div class="col-lg-12" id="bloc">
            <div class="info">
              <div id="date">2018-</div>
            </div>
            <div class="nom">
              Licence Informatique<br />
              Faculté Des Sciences de Montpellier
            </div>
          </div>
          <div class="col-lg-12" id="bloc">
            <div class="info">
              <div id="date">2018</div>
            </div>
            <div class="nom">
              Année de Préparation aux Études Supérieures Scientifique<br />
              Faculté Des Sciences de Montpellier
            </div>
          </div>
          <div class="col-lg-12" id="bloc">
            <div class="info">
              <div id="date">2017</div>
            </div>
            <div class="nom">
              Baccalauréat professionnel<br />
              Gestion-Administration
            </div>
            <div class="mention tb">
              Mention<br />
              Très bien
            </div>
          </div>
        </div>

        <!-- Centres d'intérêt -->
        <div class="col-lg centre-interet">
          <div class="titre">
            <div id="texte">Centres d'intérêt</div>
            <div id="trait"></div>
          </div>
          <li><i class="fas fa-circle"></i> Informatique</li>
          <li><i class="fas fa-circle"></i> Le golf</li>
          <li><i class="fas fa-circle"></i> Netflix</li>
          <li><i class="fas fa-circle"></i> Porter un gilet-jaune</li>
          <li><i class="fas fa-circle"></i> Les complots</li>
          <li><i class="fas fa-circle"></i> Fabriquer des fusées</li>
          <li><i class="fas fa-circle"></i> Littérature</li>
          <li><i class="fas fa-circle"></i> Cinéma</li>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
