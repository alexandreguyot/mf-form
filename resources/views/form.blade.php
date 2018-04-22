<script src="{{ asset('js/application.js') }}" defer></script>

<form id="cahier_charges" method="POST" action="{{ route('specifications') }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"/>
    <div class="tab">
        <h2>Mon entreprise</h2>
        <div class="form-group row">
            <label for="company" class="col-md-4 col-form-label text-md-right">Nom de la société</label>
            <div class="col-md-6">
                <input name="company" type="text" required>
            </div>
        </div>
        <h2>Responsable du projet</h2>
        <div class="form-group row">
            <label for="resp_name" class="col-md-4 col-form-label text-md-right">Nom du responsable</label>
            <div class="col-md-6">
                <input name="resp_name" type="text" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="resp_firstname" class="col-md-4 col-form-label text-md-right">Prénom du responsable</label>
            <div class="col-md-6">
                <input name="resp_firstname" type="text" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="resp_tel" class="col-md-4 col-form-label text-md-right">Téléphone</label>
            <div class="col-md-6">
                <input name="resp_tel" type="text" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="resp_email" class="col-md-4 col-form-label text-md-right">Adresse e-mail</label>
            <div class="col-md-6">
                <input name="resp_email" type="text" required>
            </div>
        </div>
    </div>

    <div class="tab">
        <h2>Le projet</h2>
        <div class="form-group">
            <label class="radio-inline">
              <input type="radio" name="website"> Création d'un site internet
            </label>
            <label class="radio-inline">
              <input type="radio" name="website"> Amélioration graphique
            </label>
            <label class="radio-inline">
              <input type="radio" name="website"> Refonte technique
            </label>
        </div> 
        <h2>Application métier</h2>
        <p>A venir</p>
    </div>

    <div class="tab">
        <h2>Nom de domaine</h2>
        <h3>Je possède un nom de domaine</h3>
        <div class="form-group">
            <label class="radio-inline">
              <input type="radio" name="domain_have"> Oui
            </label>
            <label class="radio-inline">
              <input type="radio" name="domain_have"> Non
            </label>
        </div>
        <div class="form-group row">
            <label for="domain_name" class="col-md-4 col-form-label text-md-right">Mon nom de domaine est ...</label>
            <div class="col-md-6">
                <input name="domain_name" type="text">
            </div>
        </div>
        <div class="form-group row">
            <label for="domain_wanted" class="col-md-4 col-form-label text-md-right">Je souhaite obtenir ce nom de domaine ...</label>
            <div class="col-md-6">
                <input name="domain_wanted" type="text">
            </div>
        </div>
    </div>

    <div class="tab">
        <h2>Contenu</h2>
        <h3>Je rédige le texte de mon site internet</h3> 
        <div class="form-group">
            <label class="radio-inline">
              <input type="radio" name="write_text"> Oui
            </label>
            <label class="radio-inline">
              <input type="radio" name="write_text"> Non
            </label>
        </div>
        <h3>Je possède des photos pour mon site internet</h3> 
        <div class="form-group">
            <label class="radio-inline">
              <input type="radio" name="have_picture"> Oui
            </label>
            <label class="radio-inline">
              <input type="radio" name="have_picture"> Non
            </label>
        </div>
        <h3>Nombre de pages souhaitées </h3>
        <h4>Les pages statiques sont : “Accueil”, “Société” et “Contact”</h4> 
        <div class="form-group">
            <label class="radio-inline">
              <input type="radio" name="number_pages"> 1 page
            </label>
            <label class="radio-inline">
              <input type="radio" name="number_pages"> 2 à 5 pages
            </label>
            <label class="radio-inline">
              <input type="radio" name="number_pages"> 6 pages et +
            </label>
        </div>
    </div>
    <div class="tab">
        <h2>Graphisme et mise en page</h2>
        <h3>Je possèdes des éléments graphiques (charte, logo, etc..)</h3> 
        <div class="form-group">
            <label class="radio-inline">
              <input type="radio" name="graphic_have"> Oui
            </label>
            <label class="radio-inline">
              <input type="radio" name="graphic_have"> Non
            </label>
        </div>
        <h3>Choisissez parmis la mise en forme souhaitée parmis les choix suivants</h3> 
        <div class="form-group">
            <label class="radio-inline">
              <input type="radio" name="example"> Choix A
            </label>
            <label class="radio-inline">
              <input type="radio" name="example"> Choix B
            </label>
            <label class="radio-inline">
              <input type="radio" name="example"> Choix C
            </label>
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Décrivez l’aspect de votre site, … vous pouvez nous fournir des exemples via des URLs</label>
            <div class="col-md-6">
                <textarea name="description"></textarea>
            </div>
        </div>
    </div>

    <div class="tab">
        <h2>Fonctionnalités</h2>
        <h3>Les fonctionnalités ci-dessous sont fournis toutes nos offres :</h3>
        <ul>
            <li>Formulaire de contact sécurisé</li>
            <li>Gestion des pages (admin)</li>
            <li>Plan Google map de votre adresse</li>
            <li>Intégration de vos réseaux sociaux</li>
            <li>Design compatible mobile et tablette (devis supp pour si design sur
            mesure)</li>
        </ul>
        
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Listez si besoin vos fonctionnalités supplémentaires souhaitées:</label>
            <div class="col-md-6">
                <textarea name="functionalities"></textarea>
            </div>
        </div>
    </div>
    <div class="tab">
        <h2>Commentaires complémentaires</h2>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">Listez si besoin vos fonctionnalités supplémentaires souhaitées:</label>
            <div class="col-md-6">
                <textarea name="description_complementary"></textarea>
            </div>
        </div>
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="previous" onclick="nextPrev(-1)">Précedent</button>
            <button type="button" id="next" onclick="nextPrev(1)">Suivant</button>
        </div>
    </div>
</form>