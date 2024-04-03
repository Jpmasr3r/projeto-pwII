<?php
echo $this->layout("_theme");
?>

<link rel="stylesheet" href="assets/web/css/style-faq.css">
<script src="assets/web/js/script-faqs.js" async></script>

<h1 id="h1FaqTitle">
    <b>
        <u>
            Perguntas frequentes
        </u>
    </b>
</h1>
<div id="divFaqs">
    <i>
        <label class="lblFaq">
            <h1>
                <b>
                    Pergunta 1
                </b>
            </h1>
            <h3>
                Resposta 1
            </h3>
        </label>
        <label class="lblFaq">
            <h1>
                <b>Pergunta 2</b>
            </h1>
            <h3>
                Resposta 2
            </h3>
        </label>
        <label class="lblFaq">
            <h1>
                <b>Pergunta 3</b>
            </h1>
            <h3>
                Resposta 3
            </h3>
        </label>
    </i>
</div>
<a id="btnBack" href="<?= url("") ?>">
    <b>
        Voltar
    </b>
</a>