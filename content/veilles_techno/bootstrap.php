<main class="main-techno">
    <h1>Bootstrap</h1>
    <h2>C'est quoi bootstrap ?</h2>
    <p>
        Bootstrap veut dire Amorçage en français, il est utilisé dans le
        langage informatique pour désigner le chargement/démarrage d'un
        programme, en particulier un système d'exploitation à partir d'un
        strict minimum d'information. De plus bootstrap désigne aussi une
        languette en cuir cousue sur certaines bottes pour pouvoir les
        enfiler plus facilement.
    </p>

    <p>
        Bootstrap est un framework front-end mais c'est quoi un framework ?
        C'est un ensemble d'outils conçu par des développeurs afin de former
        un seul outil plus ou moins complexe permettant d'augmenter la
        productivité des développeurs en leur laissant plus ou moins de
        liberté.
    </p>

    <p>
        Bootstrap existe donc afin de faciliter le développement front-end
        des site web et appli mobile en leur donnant la possibilité de
        créer des sites responsive (c-a-d qu'ils s'adaptent au format de
        l'écran utilisé) rapidement et simplement. L'inconvénient est qu'ils
        sont obligés d'utiliser les outils prédéfinis de Bootstrap et donc
        les sites développés avec Bootstrap ont tendances à se ressembler.
    </p>

    <p>
        Au final ce framework porte bien son nom car il permet d'« amorcer »
        un site très simplement et d'arriver à un résultat convenable et
        responsive en très peu de temps.
    </p>

    <h2>Comment cela fonctionne ?</h2>
    <p>
        Bootstrap est en fait une feuille de style CSS ainsi que des
        fonctionnalités JavaScript préfabriqués organisé par nom de
        classe générique. De ce fait le design de certains éléments
        sont prêt à l'utilisation, il suffit d'ajouter la bonne classe
        à l'élément HTML souhaité.
    </p>

    <p>Exemples :</p>
    <ul>
        <li>La classe d-flex applique la propriété CSS suivante
        </li>
        <li>
            <pre>display: flex;</pre>
        </li>
        <li>La classe align-items-center applique la proriété CSS suivante
        </li>
        <li>
            <pre>align-items: center;</pre>
        </li>
        <li>La classe text-dark applique la proriété CSS suivante
        </li>
        <li>
            <pre>color: var(--bs-black);</pre>
        </li>
        <li>La classe text-decoration-none applique la proriété CSS suivante
        </li>
        <li>
            <pre>text-decoration: none;</pre>
        </li>
        <li>La classe mt-3 applique la propriété CSS suivante
        </li>
        <li>
            <pre>margin-top: 1rem;</pre>
        </li>
    </ul>

    <p>
        On remarque que généralement les noms de classes sont bien explicites
        ce qui rend le framework très accessible.
    </p>

    <h2>Comment l'utiliser ?</h2>

    <p>
        Pour utiliser bootstrap, rien de plus simple, il suffit d'ajouter, dans la balise

        &lt;head&gt; la ligne suivante :
    </p>
    <pre>
        &lt;link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
        /&gt;
    </pre>
    <p>
        Cela importera direct la feuille de style de bootstrap comportant tout le
        framework CSS dans votre html. L'avantage avec cette façon de faire est que
        vous aurez la possibilité d'utiliser n'importe quel élément du framework,
        l'inconvénient est que vous finirez avec un surcharge de code CSS car toute
        les classes bootstrap que vous n'utiliserez pas seront quand même chargées.
    </p>
    <p>
        Pour parer à cela il est possible de ne charger qu'une partie de bootstrap,
        par exemple si vous ne voulez utiliser que la grille bootstrap il suffit
        d'inclure cette ligne dans la balise &lt;head&gt; :
    </p>
    <pre>
        &lt;link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap-grid.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous"
        /&gt;
    </pre>
    <p>
        Cela permets de pouvoir placer les éléments facilement grâce aux classes de bootstrap
        et d'implémenter le design voulu aux composant du site web sans surcharger le CSS.
    </p>
</main>