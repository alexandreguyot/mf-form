{{--<script src="{{ asset('js/application.js') }}" defer></script>--}}

<form id="cahier_charges" method="POST" action="{{ route('create_specification') }}">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <input name="user_id" type="hidden" value="{{ Auth::user()->id }}"/>
    <div class="tab">
        Mon entreprise:
    <br>
            Entreprise
        <input  name="company"  placeholder="company">
        <br>
        Responsable du projet
        <input  name="resp_name" placeholder="resp_name">
        <input  name="resp_firstname" placeholder="resp_firstname">
        <input  name="resp_tel" placeholder="resp_tel">
        <input  name="resp_email" placeholder="resp_email">
    </div>

    <div class="tab">
        Le projet:
        <br>
        Site internet
        <input  name="website" placeholder="website">
        <br>
        Application métier
    </div>

    <div class="tab">
        Nom de domaine:
        <input  name="domain_have" placeholder="domain_have">
        <input  name="domain_name" placeholder="domain_name">
        <input  name="domain_wanted" placeholder="domain_wanted">
    </div>

    <div class="tab">
        Contenu:
        <input  name="write_text" placeholder="write_text">
        <input  name="have_picture" placeholder="have_picture">
        <input  name="number_pages" placeholder="number_pages">
        <input  name="graphic_have" placeholder="graphic_have">
        <input  name="example" placeholder="example">
        <input  name="description" placeholder="description">
        <input  name="have_picture" placeholder="have_picture">
    </div>

    <div class="tab">
        Fonctionnalités:
        <br>
        Les fonctionnalités ci-dessous sont fournis toutes nos offres :
        Formulaire de contact sécurisé
        Gestion des pages (admin)
        Plan Google map de votre adresse
        Intégration de vos réseaux sociaux
        Design compatible mobile et tablette (devis supp pour si design sur
        mesure)

        <textarea name="functionalities" placeholder="functionalities"></textarea>
    </div>
    <div class="tab">
        Commentaires complémentaires :
        <textarea name="description_complementary" placeholder="description_complementary"></textarea>
    </div>


    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="previous" onclick="nextPrev(-1)">Précedent</button>
            <button type="button" id="next" onclick="nextPrev(1)">Suivant</button>
        </div>
    </div>
</form>