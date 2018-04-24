<script src="{{ asset('js/application.js') }}" defer></script>

<form id="cahier_charges" method="POST" action="{{ route('create_specification') }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"/>
    <div class="tab">
        <div class="subtitle">
            <h2>Mon entreprise</h2>
        </div>
        <div class="form-group row">
            <label for="company" class="col-md-3 col-form-label text-md-right">Nom de la société</label>
            <div class="col-md-12">
                <input name="company" type="text" placeholder="Nom de la société" required>
            </div>
        </div>
        <div class="subtitle">
            <h2>Responsable du projet</h2>
        </div>
       <div class="row">
           <div class="col-md-6">
               <div class="form-group row">
                   <label for="resp_name" class="col-md-3 col-form-label text-md-right">Nom du responsable</label>
                   <div class="col-md-12">
                       <input name="resp_name" type="text" placeholder="Nom du responsable" required>
                   </div>
               </div>
           </div>
           <div class="col-md-6">
               <div class="form-group row">
                   <label for="resp_firstname" class="col-md-3 col-form-label text-md-right">Prénom du responsable</label>
                   <div class="col-md-12">
                       <input name="resp_firstname" type="text" placeholder="Prénom du responsable" required>
                   </div>
               </div>
           </div>
       </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="resp_tel" class="col-md-3 col-form-label text-md-right">Téléphone</label>
                    <div class="col-md-12">
                        <input name="resp_tel" type="text" placeholder="Téléphone" required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="resp_email" class="col-md-3 col-form-label text-md-right">Adresse e-mail</label>
                    <div class="col-md-12">
                        <input name="resp_email" type="text" placeholder="Adresse e-mail" required>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab">
        <div class="subtitle">
            <h2>Le projet</h2>
        </div>
        <div class="form-group">
            <label class="container-radio">Création d'un site internet
                <input type="radio" name="website" value="1">
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">Amélioration graphique
                <input type="radio" name="website" value="2">
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">Refonte technique
                <input type="radio" name="website" value="3">
                <span class="checkmark"></span>
            </label>
        </div> 
        <div class="subtitle">
            <h2>Application métier</h2>
        </div>
        <p class="text-center">Prochainement</p>
    </div>

    <div class="tab">
        <div class="subtitle">
            <h2>Nom de domaine</h2>
        </div>
        <h3>Je possède un nom de domaine</h3>
        <div class="form-group">
            <label class="container-radio">
              <input type="radio" name="domain_have" value="1" onclick="showDomainModel(this)" required> Oui
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">
              <input type="radio" name="domain_have" value="0" onclick="showDomainModel(this)" required> Non
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="row">
            <div class="col-md-12 hidden">
                <div class="form-group row">
                    <label for="domain_name" class="col-md-4 col-form-label text-md-right">Mon nom de domaine est ...</label>
                    <div class="col-md-12">
                        <input name="domain_name" type="text" placeholder="Mon nom de domaine est ...">
                    </div>
                </div>
            </div>
            <div class="col-md-12 hidden">
                <div class="form-group row">
                    <label for="domain_wanted" class="col-md-4 col-form-label text-md-right">Je souhaite obtenir ce nom de domaine ...</label>
                    <div class="col-md-12">
                        <input name="domain_wanted" type="text" placeholder="Je souhaite obtenir ce nom de domaine ...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tab">
        <div class="subtitle">
            <h2>Contenu</h2>
        </div>
        <h3>Je rédige le texte de mon site internet</h3> 
        <div class="form-group">
            <label class="container-radio">
                <input type="radio" name="write_text" value="1"> Oui
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">
                <input type="radio" name="write_text" value="0"> Non
                <span class="checkmark"></span>
            </label>
        </div>
        <h3>Je possède des photos pour mon site internet</h3> 
        <div class="form-group">
            <label class="container-radio">
                <input type="radio" name="have_picture" value="1"> Oui
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">
                <input type="radio" name="have_picture" value="0"> Non
                <span class="checkmark"></span>
            </label>
        </div>
        <h3>Nombre de pages souhaitées </h3>
        <h4>Les pages statiques sont : “Accueil”, “Société” et “Contact”</h4> 
        <div class="form-group">
            <label class="container-radio">
                <input type="radio" name="number_pages" value="1"> 1 page
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">
                <input type="radio" name="number_pages" value="2"> 2 à 5 pages
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">
                <input type="radio" name="number_pages" value="3"> 6 pages et +
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="tab">
        <div class="subtitle">
            <h2>Graphisme et mise en page</h2>
        </div>
        <h3>Je possèdes des éléments graphiques (charte, logo, etc..)</h3>
        <div class="form-group">
            <label class="container-radio">
                <input type="radio" name="graphic_have" value="1"> Oui
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">
                <input type="radio" name="graphic_have" value="0"> Non
                <span class="checkmark"></span>
            </label>
        </div>
        <h3>Choisissez parmis la mise en forme souhaitée parmis les choix suivants</h3>
        <div class="form-group">
            <label class="container-radio">
                <input type="radio" name="example" value="1"> Choix A
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">
                <input type="radio" name="example" value="2"> Choix B
                <span class="checkmark"></span>
            </label>
            <label class="container-radio">
                <input type="radio" name="example" value="3"> Choix C
                <span class="checkmark"></span>
            </label>
        </div>
        <h3>Décrivez l’aspect de votre site, … vous pouvez nous fournir des exemples via des URLs</h3>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right"></label>
            <div class="col-md-12">
                <textarea name="description"></textarea>
            </div>
        </div>
    </div>

    <div class="tab">
        <div class="subtitle">
            <h2>Fonctionnalités</h2>
        </div>
        <h3>Les fonctionnalités ci-dessous sont fournis toutes nos offres :</h3>
        <ul>
            <li>Formulaire de contact sécurisé</li>
            <li>Gestion des pages (admin)</li>
            <li>Plan Google map de votre adresse</li>
            <li>Intégration de vos réseaux sociaux</li>
            <li>Design compatible mobile et tablette (devis supp pour si design sur
            mesure)</li>
        </ul>
        <h4>Listez si besoin vos fonctionnalités supplémentaires souhaitées</h4>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right"></label>
            <div class="col-md-12">
                <textarea name="functionalities"></textarea>
            </div>
        </div>
    </div>
    <div class="tab">
        <div class="subtitle">
            <h2>Commentaires complémentaires</h2>
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right"></label>
            <div class="col-md-12">
                <textarea name="description_complementary"></textarea>
            </div>
        </div>
    </div>
    <div class="nav-footer" style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="previous" onclick="nextPrev(-1)">Précedent</button>
            <button type="button" id="next" onclick="nextPrev(1)">Suivant</button>
        </div>
    </div>
</form>