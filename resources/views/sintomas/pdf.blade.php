<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
=======
    <link href="{{ asset('css/fontAmiri.css') }}" rel="stylesheet">
>>>>>>> a145014757993661973dddd14da23f8f6ef36810
    <title>seguiSalud</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-size: 16px;
<<<<<<< HEAD
            font-family: 'Arial', serif;
=======
            font-family: 'Amiri', serif;
>>>>>>> a145014757993661973dddd14da23f8f6ef36810
        }

        h1,
        h2 {
            margin: 0px;
        }

        fieldset.comprobante {
            width: max-content;
            margin: 0 auto;
            border: 1px solid #c5c5c5;
            padding: 0px 7px 15px 7px;
        }

        .table {
            border: 1px solid #000
        }

        header.resumen {
            text-align: center;
            font-size: 20pt;
            background-color: #989898;
            margin: 0px -7px;
        }

        .title {
            font-size: 2.5rem;
<<<<<<< HEAD
            padding: 0 0px 0 126px;
            color: #fff;
            text-align: left;
=======
            padding: 0 10px;
            color: #fff;
>>>>>>> a145014757993661973dddd14da23f8f6ef36810
        }

        .subtitle {
            font-size: 1.5rem;
            background-color: #159E4A;
            color: #fff;
<<<<<<< HEAD
            padding: 0 0px 0 126px;
            text-align: left;
=======
>>>>>>> a145014757993661973dddd14da23f8f6ef36810
        }

        .result {
            color: #464646;
        }

        .result table {
            font-weight: bolder;
<<<<<<< HEAD
            font-size: 1rem;
=======
            font-size: 1.6rem;
>>>>>>> a145014757993661973dddd14da23f8f6ef36810
            line-height: 27px;
        }

        footer {
            text-align: center;
        }

        div {
            line-height: 1.5;
        }

        .textObservaciones {
            border: 1px solid #afaeae
        }

        .powered {
            line-height: 45px;
            vertical-align: top;
            margin-right: 6px;
        }
<<<<<<< HEAD
        .logoContent{
            float: left;
        }
        .dateTime{
            clear:both;
        }
=======

>>>>>>> a145014757993661973dddd14da23f8f6ef36810
    </style>
</head>

<body>
    <fieldset class="comprobante">
        <header class="resumen">
<<<<<<< HEAD
           <div class="logoContent">
               <img width="120" height="131" alt="Matelab"
               src="data:image/png;base64,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"/>
           </div>
           <div class="titleContent">
            <h1 class="title">Resumen de Tu Control diario</h1>
            <h2 class="subtitle">Recuerda Hacerte Revisiones Diarias</h2>
           </div>
        </header>
        <br>
        <br>
        <br>
        <aside class="dateTime">
=======
            <h1 class="title">Resumen de Tu Control diario</h1>
            <h2 class="subtitle">Recuerda Hacerte Revisiones Diarias</h2>
        </header>
        <aside>
>>>>>>> a145014757993661973dddd14da23f8f6ef36810
            <table border="0">
                <tr>
                    <td>Fecha y Hora</td>
                </tr>
                <tr>
                    <td>{{ $historySymptomDetail->created_at }}</td>
                </tr>
            </table>
        </aside>
        <br>
        <div class="result temperatura">
            <table width="100%">
                <tr>
                    <td align="left">Temperatura</td>
                    <td align="right">{{ $historySymptomDetail->temperature }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result animo">
            <table width="100%">
                <tr>
                    <td align="left"> Saturación de oxigeno</td>
                    <td align="right">{{ $historySymptomDetail->oxygen_saturation }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result animo">
            <table width="100%">
                <tr>
                    <td align="left">Estado de ánimo</td>
                    <td align="right">{{ $historySymptomDetail->mood }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result garganta">
            <table width="100%">
                <tr>
                    <td align="left">Dolor de garganta</td>
                    <td align="right">{{ $historySymptomDetail->sore_throat }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result cansancio">
            <table width="100%">
                <tr>
                    <td align="left">Cansancio</td>
                    <td align="right">{{ $historySymptomDetail->fatigue }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result pulmon">
            <table width="100%">
                <tr>
                    <td align="left">Dolor de pulmón</td>
                    <td align="right">{{ $historySymptomDetail->lung_pain }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result Apetito">
            <table width="100%">
                <tr>
                    <td align="left">Apetito</td>
                    <td align="right">{{ $historySymptomDetail->appetite }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result olfato">
            <table width="100%">
                <tr>
                    <td align="left">Olfato</td>
                    <td align="right">{{ $historySymptomDetail->smell }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result voluntad">
            <table width="100%">
                <tr>
                    <td align="left">Voluntad (¡Ganas de ganar!)</td>
                    <td align="right">{{ $historySymptomDetail->will }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result tos">
            <table width="100%">
                <tr>
                    <td align="left">Tos</td>
                    <td align="right">{{ $historySymptomDetail->cough }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="result Diarrea">
            <table width="100%">
                <tr>
                    <td align="left">Diarrea</td>
                    <td align="right">{{ $historySymptomDetail->diarrhea }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <fieldset class="textObservaciones">
            <legend>¿Notás algún cambio?</legend>
            {{ $historySymptomDetail->changes_description }}
        </fieldset>
        <hr>
        <div class="result medico">
            <table width="100%">
                <tr>
                    <td align="left">¿Lo hablaste con un médico?</td>
                    <td align="right">
                        {{ ($historySymptomDetail->talk_doctor) =="1" ? 'SI' : 'NO' }}
                    </td>
                </tr>
            </table>
        </div>
        <hr>
        <fieldset class="textObservaciones">
            <legend>Tus notas</legend>
            {{ $historySymptomDetail->commentary }}
        </fieldset>
        <br>
        <footer>
            <span class="powered">Powered by</span>
            <span>
                <a href="http://www.matelab.com.ar/es/">
                <img width="50" height="57" alt="Matelab"
                    src="data:image/png;base64,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" />
                </a>
            </span>
        </footer>
    </fieldset>

</body>

</html>
