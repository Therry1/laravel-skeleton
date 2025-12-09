<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BADGE D'ACCEBILITE</title>

    <style>
        .block-container{
            text-align: center;
        }

        .header-block{
            text-align: center;
        }
        .header-item{
            text-align: center;
            font-weight: bolder;
            font-size: 75%;
        }
    </style>
</head>
<body>
    <header>
        <table>
            <tr>
                <td class="block-container">
                    <div class="header-block">
                        <div class="header-item">DIRECTION GENERAL DE I-TECH FORMATION</div>
                        <div class="header-item">Travail - discipline - réussite</div>
                        <div class="header-item">----------------------</div>

                        <div class="header-item">DEPARTEMENT DE DEVELOPPEMENT INFORMATIQUE</div>
                        <div class="header-item">----------------------</div>

                        <div class="header-item">DEPARTEMENT DE RESEAU INFORMATIQUE</div>
                        <div class="header-item">----------------------</div>

                        <div class="header-item">DEPARTEMENT DE BUREAUTIQUE</div>
                        <div class="header-item">----------------------</div>
                    </div>
                </td>
                <td class="block-container">
                    <div class="header-block">
                        <img src="{{asset('images/logo.png')}}" alt="logo" width="10" height="auto">
                    </div>
                </td>
                <td class="block-container">
                    <div class="header-block">
                        <div class="header-item">DIRECTORATE GENERAL OF I-TECH FORMATION</div>
                        <div class="header-item">Work - discipline - success</div>
                        <div class="header-item">----------------------</div>

                        <div class="header-item">SOFTWARE ENGINEERING DEPARTMENT</div>
                        <div class="header-item">----------------------</div>

                        <div class="header-item">NETWORK ENGINEERING DEPARTMENT</div>
                        <div class="header-item">----------------------</div>

                        <div class="header-item">OFFICE DEPARTMENT</div>
                        <div class="header-item">----------------------</div>
                    </div>
                </td>
            </tr>
        </table>
    </header>

    <section style="margin-top: 4%">
        <div style="text-align: center; font-size: 200%; border-bottom: 3px solid orangered">BADGE D'ACCES</div>
    </section>
    <section style="margin-top: 4%; text-align: center">
        <div style="width: 80%; text-align: justify;padding-left: 6%">
            Par le present document, nous attestons que monsieur <span style="font-weight: bolder; text-transform: uppercase">{{$formation_participation->student->name}}</span> est autorisé à
            entré dans la salle de cours situé à <span style="font-weight: bolder">NGAOUNDERE</span> pour suivre le cours de code <span style="font-weight: bolder">{{$formation_participation->formationRound->round_code}}</span>. Objet : <span class="fw-bolder">Préinscrition</span>
        </div>
    </section>
    <section style="margin-top: 4%">
        <div>
            <span style="text-align: center; border-bottom: 3px solid black">Détails du cours :</span>
        </div>
        <div>
            <ul>
                <li>
                    <span>Code du cours :</span><span> {{$formation_participation->formationRound->round_code}}</span>
                </li>
                <li>
                    <span>Niveau du cours :</span><span>{{$formation_participation->formationLevel->level_label}}</span> | <span>Option du cours :</span><span>{{$formation_participation->formationOption->option_label}}</span>
                </li>
                <li>
                    <span>Matricule de l'etudiant :</span><span> {{$formation_participation->student->matricule}}</span>
                </li>
            </ul>
        </div>
        <div>
            <div style="float: right">
                <span style="font-style: italic; font-weight: bolder">signature</span>
            </div>
        </div>
    </section>

</body>
</html>
