<?php

$preco_gasolina = 5.70;
$preco_alcool = 3.90;

$quantidade_de_litros = 50;

$alcool_melhor = ($preco_alcool / $preco_gasolina) < 0.7;

$valor_abastecimento = 0;

if ($alcool_melhor) {
    $valor_abastecimento = $preco_alcool * 50;
} else {
    $valor_abastecimento = $preco_gasolina * 50;
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 1 - SI - PROGRAMAÇÃO BACK END I - 53/2022</title>
</head>

<style>a,
abbr,
acronym,
address,
applet,
article,
aside,
audio,
b,
big,
blockquote,
body,
canvas,
caption,
center,
cite,
code,
dd,
del,
details,
dfn,
div,
dl,
dt,
em,
embed,
fieldset,
figcaption,
figure,
footer,
form,
h1,
h2,
h3,
h4,
h5,
h6,
header,
hgroup,
html,
i,
iframe,
img,
ins,
kbd,
label,
legend,
li,
mark,
menu,
nav,
object,
ol,
output,
p,
pre,
q,
ruby,
s,
samp,
section,
small,
span,
strike,
strong,
sub,
summary,
sup,
table,
tbody,
td,
tfoot,
th,
thead,
time,
tr,
tt,
u,
ul,
var,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline
}

:focus {
  outline: 0
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block
}

body {
  line-height: 1
}

ol,
ul {
  list-style: none
}

blockquote,
q {
  quotes: none
}

blockquote:after,
blockquote:before,
q:after,
q:before {
  content: '';
  content: none
}

table {
  border-collapse: collapse;
  border-spacing: 0
}

input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration,
input[type=search]::-webkit-search-results-button,
input[type=search]::-webkit-search-results-decoration {
  -webkit-appearance: none;
  -moz-appearance: none
}

input[type=search] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box
}

textarea {
  overflow: auto;
  vertical-align: top;
  resize: vertical
}

audio,
canvas,
video {
  display: inline-block;
  max-width: 100%
}

audio:not([controls]) {
  display: none;
  height: 0
}

[hidden] {
  display: none
}

html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%
}

a:focus {
  outline: thin dotted
}

a:active,
a:hover {
  outline: 0
}

img {
  border: 0;
  -ms-interpolation-mode: bicubic
}

figure {
  margin: 0
}

form {
  margin: 0
}

fieldset {
  border: 1px solid silver;
  margin: 0 2px;
  padding: .35em .625em .75em
}

legend {
  border: 0;
  padding: 0;
  white-space: normal
}

button,
input,
select,
textarea {
  font-size: 100%;
  margin: 0;
  vertical-align: baseline
}

button,
input {
  line-height: normal
}

button,
select {
  text-transform: none
}

button,
html input[type=button],
input[type=reset],
input[type=submit] {
  -webkit-appearance: button;
  cursor: pointer
}

button[disabled],
html input[disabled] {
  cursor: default
}

input[type=checkbox],
input[type=radio] {
  -sizing: border-box;
  padding: 0
}

input[type=search] {
  -webkit-appearance: textfield;
  -moz-box-sizing: content-box;
  -webkit-box-sizing: content-box;
  box-sizing: content-box
}

input[type=search]::-webkit-search-cancel-button,
input[type=search]::-webkit-search-decoration {
  -webkit-appearance: none
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0
}

textarea {
  overflow: auto;
  vertical-align: top
}

table {
  border-collapse: collapse;
  border-spacing: 0
}

button,
html,
input,
select,
textarea {
  color: #222
}

::-moz-selection {
  background: #b3d4fc;
  text-shadow: none
}

::selection {
  background: #b3d4fc;
  text-shadow: none
}

img {
  vertical-align: middle
}

fieldset {
  border: 0;
  margin: 0;
  padding: 0
}

textarea {
  resize: vertical
}

.chromeframe {
  margin: .2em 0;
  background: #ccc;
  color: #000;
  padding: .2em 0
}

/*test passed*/

/* ESTILO */

/*Text type*/
@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');

html,
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 100%;
  width: 100%;
  height: 100%;
}

/*Define specs text*/
h2 {
  font-size: 0.8em;
  font-weight: 700;
  padding: 0.1em;
}

h1 {
  font-size: 1.5em;
  font-weight: 700;
  padding: 0.1em;
}

p {
  font-size: 0.6em;
  font-weight: 700;
  padding: 1.8em;
}

a {
  text-decoration: none;
  transition: 0.5s;
}

a:hover {
  opacity: 0.6;
}

/*Config layout*/
.container {
  width: 100%;
  height: 100%;
  display: grid;
  grid-template-rows: 550px auto 60px;
}

.main {
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

/*background general*/
body {
  background-color: white;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: left center;
}

/*text information css*/
.information {
  background: rgba(0, 0, 0, .5);
  font-size: 1.3em;
  color: whitesmoke;
  padding: 1em;
  border-radius: 1.5em;
}

.information .botton {
  color: #92ca53;
  transition: 1s;
  border: 0.1em solid #92ca53;
  padding: 0.3em;
  border-radius: 0.4em;
}

.information .botton:hover {
  color: white;
  text-shadow: 0 0 8px white;
  border-color: white;
}

/*footer*/
footer {
  margin: 4em;
  background: white;
  color: black;
}

.titulo-footer {
  text-align: center;
  font-size: 0.8em;
  font-weight: bolder;
}</style>

<body>
    <div class="container">
        <main class="main">

            <div class="information-result <?= $alcool_melhor ? 'alcool ' : 'gasolina' ?>">
                <h2>
                    Compensa abastecer com
                    <?= $alcool_melhor ? 'álcool ' : 'gasolina' ?>
                    e o preço total para <?= $quantidade_de_litros ?> litros de gasolina é de R$ <?= number_format($valor_abastecimento, 2, ',', '.') ?>
                </h2>
            </div>
        </main>

        <footer>
            <h4 class="titulo-footer">
                Todos os Direitos Reservados a Rafael Bernardes - RA: 22067554-5
            </h4>
        </footer>
    </div>
</body>

</html>