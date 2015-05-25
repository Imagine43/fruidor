<div class="container">
    <div class="row">
            <div class="account-wall">
                        <h1 class="text-center login-title">Gestion Client</h1>
            </div>
            <br/>
            <div>
            <form method="post" action="">
            <?php
                $idconn = mysqli_connect('localhost','root','');
                mysqli_select_db($idconn,'fruidor');
                $id = $_GET['id'];
                $sql = 'SELECT * from client where cli_id='.$id.'';
                $req= mysqli_query($idconn,$sql);
                print_r($req);
                var_dump($req);
                print_r($sql);
                
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
                       </tr> ';
                foreach ($req as $value) 
                {
                    echo '<tr>';
                    echo '<td><input value='.$value['cli_id'].'></td>';
                    echo '<td><input value='.$value['cli_nom'].'></td>';
                    echo '<td><input value='.$value['cli_prenom'].'></td>';
                    echo '<td><input value='.$value['cli_adr1'].'></td>';
                    echo '<td><input value='.$value['cli_adr2'].'></td>';
                    echo '<td><input value='.$value['cli_ville'].'></td>';
                    echo '<td><input value='.$value['cli_cp'].'></td>';
                    echo '<td><input value='.$value['cli_tel'].'></td>';
                    echo '<td><input value='.$value['cli_email'].'></td>'; 
                    echo '</tr>';
                }

                echo '</table>';
                echo '<br/>';
                echo '<input type="button" value="Valider">'
                
                mysqli_close($idconn);
            ?>
            </form>
            </div>
        </div>
</div>