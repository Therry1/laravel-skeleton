<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiche d'information</title>

    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
        td,th,tr {
            border: black 1px solid;
            padding: 8px;
        }

        .title-pdf{
            font-size: 200%;
        }
        @media (max-width: 600px) {

        }


    </style>
</head>
<body>
    <section>
        <div style="display: flex; justify-content: center; align-items: center">
            <img src="{{asset('images/logo.png')}}" alt="logo">
        </div>
        <div style="text-align:center; font-weight: bolder;" class="title-pdf">INFORMATIONS I-TECH FORMATION</div>
    </section>
    <section>
        <div style="font-weight: bolder; text-align: center; font-family: Cambria">
            Ci dessous se trouve les informations de votre compte i-tech formation. Gardez les toujours en lieu sur et de facon très privée
        </div>
        <div style="padding-top: 10%">
            <table>
                <thead>
                    <tr>
                        <th style="font-weight: bolder">#</th>
                        <th style="font-weight: bolder">Intitulé</th>
                        <th style="font-weight: bolder; text-align: center">Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">1</td>
                        <td style="font-weight: bolder; width: 45%">MATRICULE</td>
                        <td style="text-align: center">{{$student->matricule}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">1</td>
                        <td style="font-weight: bolder; width: 45%">NOM ET PRENOM</td>
                        <td style="text-align: center">{{$student->name}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">2</td>
                        <td style="font-weight: bolder; width: 45%">EMAIL</td>
                        <td style="text-align: center">{{$student->email}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">3</td>
                        <td style="font-weight: bolder; width: 45%">MOT DE PASSE</td>
                        <td style="text-align: center">{{$password}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">4</td>
                        <td style="font-weight: bolder; width: 45%">NUMERO DE TELEPHONE</td>
                        <td style="text-align: center">{{$student->call_phone_number}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">5</td>
                        <td style="font-weight: bolder; width: 45%">NUMERO WHATSAPP</td>
                        <td style="text-align: center">{{$student->whatsapp_phone_number}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">6</td>
                        <td style="font-weight: bolder; width: 45%">NUMERO D'UN PROCHE</td>
                        <td style="text-align: center">{{$student->relative_phone_number}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">7</td>
                        <td style="font-weight: bolder; width: 45%">MONTANT VERSE</td>
                        <td style="text-align: center">{{$student->amount_paid}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">8</td>
                        <td style="font-weight: bolder; width: 45%">RESTE A PAYER</td>
                        <td style="text-align: center">{{$student->remaining_amount}}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bolder; width: 10%">9</td>
                        <td style="font-weight: bolder; width: 45%">PARRAIN</td>
                        <td style="text-align: center">{{$guid_parent ? $guid_parent->name : 'N/A'}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section style="padding-top: 5%">
        <div style="display: flex; justify-content: space-between">
            <div></div>
            <div style="font-weight: bolder; font-family: Algerian; float: right">I-TECH FORMATION</div>
        </div>
    </section>
</body>
</html>
