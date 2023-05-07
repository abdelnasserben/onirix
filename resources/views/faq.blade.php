@extends('layouts.basic')

@section('content')
<header class="masthead pb-0 text-center">
    <h1 class="display-3 lh-1 mb-0">FAQ</h1>
</header>
<div class="container p-5 bg-light">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Qu'est-ce qu'un test de personnalité ?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse">
            <div class="accordion-body">Ce test de personnalité est disponible en plusieurs versions différentes. Il a été initialement utilisé en France pour identifier les enfants souffrant de troubles du développement afin de leur dispenser une éducation spéciale. Les types de personnalité sont maintenant développés pour aider les gens à mieux se comprendre et à atteindre leurs propres objectifs.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Pourquoi faire un test de personnalité ?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" >
            <div class="accordion-body">Le but de la détermination de votre type de personnalité est de mieux comprendre vos comportements, d'accroître vos capacités et de vous protéger des problèmes. Globalement, les recherches montrent que la connaissance de son propre type de personnalité accroît la satisfaction à long terme.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              A quoi servent les résultats ?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">Nous vous donnons des indications après le test, et les résultats complets sont disponibles gratuitement. Nous mettons votre comportement et vos pensées à l'épreuve de plusieurs façons, tout en respectant les exigences essentielles auxquelles doit répondre tout test de personnalité authentique. Parce que c'est la seule méthode qui garantisse le plus haut degré de précision, nous recommandons toujours une évaluation en personne avec un médecin certifié dans votre région.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
              De quelle manière mes sont elles interprétées ?
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse">
            <div class="accordion-body">Les résultats sont comparés à ceux de tous les autres participants au test. Il s'agit d'une méthode scientifique permettant de déterminer votre type de personnalité spécifique et de vous comparer à d'autres personnes.</div>
          </div>
        </div>
    </div>
</div>
@endsection