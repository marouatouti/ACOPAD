<?php
    require_once "../config/header.php";
?>
            <div class="partie_recherche">
                <h1>Tableau de suivi: 2021</h1>
                <div class="recherche">
                    <form action="">
                        <input type="search"><button>Rechercher</button>
                    </form>
                </div>
            
            <div class="filtre">
                <div class="filtre_rouge"></div>
                <div class="filtre_jaune"></div>
                <div class="filtre_vert"></div>
            </div>
        </div>
        <table class="t_accueil">
            <thead>
                <tr>
                    <th >Identifiant PE</th>
                    <th>Nom/prenom</th>
                    <th>Age</th>
                    <th>RQTH</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="vert">
                    <td class="raduis1">1234</td>
                    <td>nico le mechant</td>
                    <td>1 ans</td>
                    <td>jsp</td>
                    <td class="plus"><a href="">+</a></td>
                </tr>
                <tr class="jaune">
                    <td>4321</td>
                    <td>Marwa</td>
                    <td>5 ans</td>
                    <td>jsp</td>
                    <td class="plus"><a href="">+</a></td>
                </tr>
                <tr class="rouge">
                    <td>1234</td>
                    <td>Maroua</td>
                    <td>18 ans</td>
                    <td>jsp</td>
                    <td class="plus"><a href="">+</a></td>
                </tr>
            </tbody>
        </table>
        </main>
    </body>
</html>