<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
</head>
<body>
    <div class="container py-5">
        <div class="d-flex align-items-center justify-content-between">
            <h1>Liste des Apprenants</h1>
            <div class="btn btn-primary" data-bs-toggle="modal"data-bs-target="#modaladd"><i class="bi bi-plus"></i>  Ajouter Un Apprenant</div>
        </div>
                <?php
                    include_once 'api/database.php';
                    $db=new Database();
                    $apprenant=$db->getApprenant();
                ?>
        <table class="table">
            <thead>
                <tr>
                    <th Scope="col">Id</th>
                    <th Scope="col">Nom</th>
                    <th Scope="col">Email</th>
                    <th Scope="col">Pays</th>
                    <th Scope="col">Genre</th>
                    <th Scope="col">Action</th>
                    <th Scope="col">Action</th>
                </tr>
            </thead>
                    <tbody>
                        <?php
                            foreach($apprenant as $value){
                          ?>
                          <tr>
                            <td> <?php echo $value['id']; ?> </td>
                            <td> <?php echo $value['name']; ?> </td>
                            <td> <?php echo $value['email']; ?> </td>
                            <td> <?php echo $value['country']; ?> </td>
                            <td> <?php echo $value['gender']; ?> </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-warning">Modifier</a>
                                </td>
                                <td>
                                    <form  action="api/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                  </form>
                              </td>
                              
                          </tr>
                          <?php
                            }
                        ?>
                    </tbody>
         </table>  
         
         <!-- Modal et Appenant -->
        <div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Un Nouvel Apprenant</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <form action="api/create.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Nom Complet</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">email:</label>
                        <input type="email" class="form-control" name="email" id="email"/>
                    </div>

                    <div class="mb-3">
                        <label for="Country" class="col-form-label">Country:</label>
                        <Select class="form-control" name="country" id="Country">
                                <option>Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">??les ??land</option>
                                    <option value="Albania">Albanie</option>
                                    <option value="Algeria">Alg??rie</option>
                                    <option value="American Samoa">Samoa am??ricaines</option>
                                    <option value="Andorra">Andorre</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctique</option>
                                    <option value="Antigua and Barbuda">Antigua-et-Barbuda</option>
                                    <option value="Argentina">Argentine</option>
                                    <option value="Armenia">Arm??nie</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australie</option>
                                    <option value="Austria">Autriche</option>
                                    <option value="Azerbaijan">Azerba??djan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahre??n</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbade</option>
                                    <option value="Belarus">Bi??lorussie</option>
                                    <option value="Belgium">Belgique</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">B??nin</option>
                                    <option value="Bermuda">Bermudes</option>
                                    <option value="Bhutan">Bhoutan</option>
                                    <option value="Bolivia">Bolivie</option>
                                    <option value="Bonaire, Sint Eustatius and Saba">Pays-Bas carib??ens</option>
                                    <option value="Bosnia and Herzegovina">Bosnie-Herz??govine</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">??le Bouvet</option>
                                    <option value="Brazil">Br??sil</option>
                                    <option value="British Indian Ocean Territory">Territoire britannique de l???oc??an Indien</option>
                                    <option value="Brunei Darussalam">Brunei</option>
                                    <option value="Bulgaria">Bulgarie</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodge</option>
                                    <option value="Cameroon">Cameroun</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cap-Vert</option>
                                    <option value="Cayman Islands">??les Ca??mans</option>
                                    <option value="Central African Republic">R??publique centrafricaine</option>
                                    <option value="Chad">Tchad</option>
                                    <option value="Chile">Chili</option>
                                    <option value="China">Chine</option>
                                    <option value="Christmas Island">??le Christmas</option>
                                    <option value="Cocos (Keeling) Islands">??les Cocos</option>
                                    <option value="Colombia">Colombie</option>
                                    <option value="Comoros">Comores</option>
                                    <option value="Congo">Congo-Brazzaville</option>
                                    <option value="Congo, Democratic Republic of the Congo">Congo-Kinshasa</option>
                                    <option value="Cook Islands">??les Cook</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'Ivoire">C??te d???Ivoire</option>
                                    <option value="Croatia">Croatie</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Curacao">Cura??ao</option>
                                    <option value="Cyprus">Chypre</option>
                                    <option value="Czech Republic">Tch??quie</option>
                                    <option value="Denmark">Danemark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominique</option>
                                    <option value="Dominican Republic">R??publique dominicaine</option>
                                    <option value="Ecuador">??quateur</option>
                                    <option value="Egypt">??gypte</option>
                                    <option value="El Salvador">Salvador</option>
                                    <option value="Equatorial Guinea">Guin??e ??quatoriale</option>
                                    <option value="Eritrea">??rythr??e</option>
                                    <option value="Estonia">Estonie</option>
                                    <option value="Ethiopia">??thiopie</option>
                                    <option value="Falkland Islands (Malvinas)">??les Malouines (??les Falkland)</option>
                                    <option value="Faroe Islands">??les F??ro??</option>
                                    <option value="Fiji">Fidji</option>
                                    <option value="Finland">Finlande</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">Guyane fran??aise</option>
                                    <option value="French Polynesia">Polyn??sie fran??aise</option>
                                    <option value="French Southern Territories">Terres australes fran??aises</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambie</option>
                                    <option value="Georgia">G??orgie</option>
                                    <option value="Germany">Allemagne</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Gr??ce</option>
                                    <option value="Greenland">Groenland</option>
                                    <option value="Grenada">Grenade</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernesey</option>
                                    <option value="Guinea">Guin??e</option>
                                    <option value="Guinea-Bissau">Guin??e-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Ha??ti</option>
                                    <option value="Heard Island and Mcdonald Islands">??les Heard-et-MacDonald</option>
                                    <option value="Holy See (Vatican City State)">??tat de la Cit?? du Vatican</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hongrie</option>
                                    <option value="Iceland">Islande</option>
                                    <option value="India">Inde</option>
                                    <option value="Indonesia">Indon??sie</option>
                                    <option value="Iran, Islamic Republic of">Iran</option>
                                    <option value="Iraq">Irak</option>
                                    <option value="Ireland">Irlande</option>
                                    <option value="Isle of Man">??le de Man</option>
                                    <option value="Israel">Isra??l</option>
                                    <option value="Italy">Italie</option>
                                    <option value="Jamaica">Jama??que</option>
                                    <option value="Japan">Japon</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordanie</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Cor??e du Nord</option>
                                    <option value="Korea, Republic of">Cor??e du Sud</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Kuwait">Kowe??t</option>
                                    <option value="Kyrgyzstan">Kirghizstan</option>
                                    <option value="Lao People's Democratic Republic">Laos</option>
                                    <option value="Latvia">Lettonie</option>
                                    <option value="Lebanon">Liban</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libye</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lituanie</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, the Former Yugoslav Republic of">Mac??doine du Nord</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaisie</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malte</option>
                                    <option value="Marshall Islands">??les Marshall</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritanie</option>
                                    <option value="Mauritius">Maurice</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexique</option>
                                    <option value="Micronesia, Federated States of">Micron??sie</option>
                                    <option value="Moldova, Republic of">Moldavie</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolie</option>
                                    <option value="Montenegro">Mont??n??gro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Maroc</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar (Birmanie)</option>
                                    <option value="Namibia">Namibie</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">N??pal</option>
                                    <option value="Netherlands">Pays-Bas</option>
                                    <option value="Netherlands Antilles">Cura??ao</option>
                                    <option value="New Caledonia">Nouvelle-Cal??donie</option>
                                    <option value="New Zealand">Nouvelle-Z??lande</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">??le Norfolk</option>
                                    <option value="Northern Mariana Islands">??les Mariannes du Nord</option>
                                    <option value="Norway">Norv??ge</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palaos</option>
                                    <option value="Palestinian Territory, Occupied">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papouasie-Nouvelle-Guin??e</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">P??rou</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">??les Pitcairn</option>
                                    <option value="Poland">Pologne</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Porto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">La R??union</option>
                                    <option value="Romania">Roumanie</option>
                                    <option value="Russian Federation">Russie</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Barthelemy">Saint-Barth??lemy</option>
                                    <option value="Saint Helena">Sainte-H??l??ne</option>
                                    <option value="Saint Kitts and Nevis">Saint-Christophe-et-Ni??v??s</option>
                                    <option value="Saint Lucia">Sainte-Lucie</option>
                                    <option value="Saint Martin">Saint-Martin</option>
                                    <option value="Saint Pierre and Miquelon">Saint-Pierre-et-Miquelon</option>
                                    <option value="Saint Vincent and the Grenadines">Saint-Vincent-et-les Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">Saint-Marin</option>
                                    <option value="Sao Tome and Principe">Sao Tom??-et-Principe</option>
                                    <option value="Saudi Arabia">Arabie saoudite</option>
                                    <option value="Senegal">S??n??gal</option>
                                    <option value="Serbia">Serbie</option>
                                    <option value="Serbia and Montenegro">Serbie</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapour</option>
                                    <option value="Sint Maarten">Saint-Martin (partie n??erlandaise)</option>
                                    <option value="Slovakia">Slovaquie</option>
                                    <option value="Slovenia">Slov??nie</option>
                                    <option value="Solomon Islands">??les Salomon</option>
                                    <option value="Somalia">Somalie</option>
                                    <option value="South Africa">Afrique du Sud</option>
                                    <option value="South Georgia and the South Sandwich Islands">G??orgie du Sud-et-les ??les Sandwich du Sud</option>
                                    <option value="South Sudan">Soudan du Sud</option>
                                    <option value="Spain">Espagne</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Soudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard et Jan Mayen</option>
                                    <option value="Swaziland">Eswatini</option>
                                    <option value="Sweden">Su??de</option>
                                    <option value="Switzerland">Suisse</option>
                                    <option value="Syrian Arab Republic">Syrie</option>
                                    <option value="Taiwan, Province of China">Ta??wan</option>
                                    <option value="Tajikistan">Tadjikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzanie</option>
                                    <option value="Thailand">Tha??lande</option>
                                    <option value="Timor-Leste">Timor oriental</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinit??-et-Tobago</option>
                                    <option value="Tunisia">Tunisie</option>
                                    <option value="Turkey">Turquie</option>
                                    <option value="Turkmenistan">Turkm??nistan</option>
                                    <option value="Turks and Caicos Islands">??les Turques-et-Ca??ques</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Ouganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">??mirats arabes unis</option>
                                    <option value="United Kingdom">Royaume-Uni</option>
                                    <option value="United States">??tats-Unis</option>
                                    <option value="United States Minor Outlying Islands">??les mineures ??loign??es des ??tats-Unis</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Ouzb??kistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Vi??t Nam</option>
                                    <option value="Virgin Islands, British">??les Vierges britanniques</option>
                                    <option value="Virgin Islands, U.s.">??les Vierges des ??tats-Unis</option>
                                    <option value="Wallis and Futuna">Wallis-et-Futuna</option>
                                    <option value="Western Sahara">Sahara occidental</option>
                                    <option value="Yemen">Y??men</option>
                                    <option value="Zambia">Zambie</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                        </select>
                    </div>
                <div class="mb-3"> 
                    <label for="Gender" class="col-form-label">Gender:</label>
                      <div class="form-check">
                    
                                <input class="form-check-input" type="radio" name="gender" id="homme" value="Homme">
                                <label class="form-check-label" for="homme">
                                    Homme
                                </label>
                      </div>
                         <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="femme" value="Femme">
                                <label class="form-check-label" for="femme">
                                    Femme
                                </label>
                         </div>
                     </div>
                 
                     <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Cr??er Un Apprenant</button>
                     </div>
            </form>
           
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>