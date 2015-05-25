<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                        <h1 class="text-center login-title">Gestion Client</h1>
            </div>
            <br/>
            <div>
            <?php
                $idconn = mysqli_connect('localhost','root','');
                mysqli_select_db($idconn,'fruidor');

                $sql = 'SELECT * from client';
                $req= mysqli_query($idconn,$sql);
                $data = mysqli_fetch_array($req);
                
                //Requete SQL de modification d'une entrée.


                echo '<table class="tablegestioncli">';
                echo '<tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse 1</th>
                        <th>Adresse 2</th>
                        <th>Ville</th>
                        <th>Code Postal</th>
                        <th>Téléphone</th>
                        <th>E-Mail</th>
                        <th> </th>
                        <th> </th>
                       </tr> ';
                foreach ($req as $value) 
                {
                    echo '<tr>';
                    echo '<td>'.$value['cli_id'].'</td>';
                    echo '<td>'.$value['cli_nom'].'</td>';
                    echo '<td>'.$value['cli_prenom'].'</td>';
                    echo '<td>'.$value['cli_adr1'].'</td>';
                    echo '<td>'.$value['cli_adr2'].'</td>';
                    echo '<td>'.$value['cli_ville'].'</td>';
                    echo '<td>'.$value['cli_cp'].'</td>';
                    echo '<td>'.$value['cli_tel'].'</td>';
                    echo '<td>'.$value['cli_email'].'</td>';  
                    echo '<td><a href="modification?id='.$value['cli_id'].'"><img src="assets/img/modifier.gif" title="Modifier"/></a></td>';
                    echo '<td><a href="#"><img src="assets/img/supprimer.gif" title="Supprimer"/></a></td>';
                    echo '</tr>';
                }

                echo '</table>';

                mysqli_close($idconn);
            ?>
            </div>
        </div>
    </div>
</div>