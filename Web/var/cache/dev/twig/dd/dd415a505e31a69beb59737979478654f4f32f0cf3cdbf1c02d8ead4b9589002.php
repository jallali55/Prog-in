<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* payment/Facture.html.twig */
class __TwigTemplate_134c6e27f3e881e7fee28ea66dceebfde666f59c0881a102adf1ca32455ca157 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/Facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/Facture.html.twig"));

        // line 1
        echo "<head>
    <meta charset=\"UTF-8\"/>
    <title>Facture José Roux</title>
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:300|Raleway:200,300\" rel=\"stylesheet\" type=\"text/css\"/>
    <script src=\"https://js.stripe.com/v3/\"></script>
</head>
<body>
<header>
    <h1>FACTURE
        <h2>José Roux − Interactive Design</h2>
    </h1>
</header>
<section class=\"flex\">
    <dl>
        <dt>Facture #</dt>
        <dd>20140603</dd>
        <dt>Date de facturation</dt>
        <dd>03.06.2014</dd>
    </dl>
</section>
<section class=\"flex\">
    <dl class=\"bloc\">
        <dt>Facturé à:</dt>
        <dd>
            Company X &amp; Son Inc.<br>
            2789 Some street,<br>
            Big City, Québec, J3X 1J1
            <dl>
                <dt>Attn</dt>
                <dd>Le Big Boss</dd>
                <dt>Téléphone</dt>
                <dd>(450) 555-2663</dd>
                <dt>Courriel</dt>
                <dd>bigboss@bigcompanylonglongemail.com</dd>
            </dl>
        </dd>
    </dl>
    <dl class=\"bloc\">
        <dt>Description de service:</dt>
        <dd>Développement AIR</dd>
        <dt>Période totale:</dt>
        <dd>24 Mai au 2 Juin 2014</dd>
    </dl>
</section>
<table>
    <thead>
    <tr>
        <th>Période</th>
        <th>Description</th>
        <th>Nombre Pers</th>
        <th>Prix Unit</th>
        <th>Montant</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>24 Mai au 2 Juin</td>
        <td>Dévelopement du jeu Tomatina</td>
        <td>24&#8202;h</td>
        <td>20&#8202;\$/h</td>
        <td>480&#8202;\$</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"3\">− Faire les chèques payable au nom de moi −</td>
        <td>Total:</td>
        <td>480&#8202;\$</td>
    </tr>

    <tr>

        <td colspan=\"2\"><button id=\"checkout-button\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\">payer en ligne</button></td>
        <td colspan=\"1\"><a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("PDF");
        echo "\"><button>imprimer</button></a></td>
        <td colspan=\"2\"><button><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment");
        echo "\">payer a la livraison</a> </button></td>

    </tr>



    </tfoot>
</table>
<footer>
    <p>Darguechi hela – Informatique − Développement WEB | <a href=\"http://joseroux.com\">hikerz.tn</a></p>
    <p>32 rue casa del papel manouba| Tél. 55029240 | <a href=\"mailto:oussema.abderrahmen@esprit.tn\">mail@me.com</a></p>
</footer>
</body>


<style>

    /*** @media all  ***/
    * {
        box-sizing: border-box;
    }
    html {
        height: 100%;
    }
    body {
        min-height: 100%;
        margin: 0;
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: sretch;
        font: 12pt/1.5 'Raleway', 'Cambria', sans-serif;
        font-weight: 300;
        background: #fff;
        color: #666;
        -webkit-print-color-adjust: exact;
    }
    header {
        padding: 16px;
        position: relative;
        color: #888;
    }
    header h1,
    header h2 {
        font-weight: 200;
        margin: 0;
    }
    header h1 {
        font-size: 27pt;
        letter-spacing: 4px;
    }
    body > * {
        width: 100%;
        max-width: 7in;
        margin: 3px auto;
        background: #f0f0f0;
        text-align: center;
    }
    footer {
        padding: 16px;
    }
    footer p {
        font-size: 9pt;
        margin: 0;
        font-family: 'Nunito';
        color: #777;
    }
    section,
    table {
        padding: 8px 0;
        position: relative;
    }
    dl {
        margin: 0;
        letter-spacing: -4px;
    }
    dl dt,
    dl dd {
        letter-spacing: normal;
        display: inline-block;
        margin: 0;
        padding: 0px 6px;
        vertical-align: top;
    }
    dl.bloc > dt,
    dl:not(.bloc) dt:not(:last-of-type),
    dl:not(.bloc) dd:not(:last-of-type) {
        border-bottom: 1px solid #ddd;
    }
    dl:not(.bloc) dt {
        border-right: 1px solid #ddd;
    }
    dt {
        width: 49%;
        text-align: right;
        letter-spacing: 1px !important;
        overflow: hidden;
    }
    dd {
        width: 49%;
        text-align: left;
    }
    dd,
    tr>td {
        font-family: 'Nunito';
    }
    section.flex {
        display: flex;
        flex-flow: row wrap;
        padding: 8px 16px;
        justify-content: space-around;
    }
    dl.bloc {
        padding: 0;
        flex: 1;
        vertical-align: top;
        min-width: 240px;
        margin: 0 8px 8px;
    }
    dl.bloc>dt {
        text-align: left;
        width: 100%;
        margin-top: 12px;
    }
    dl.bloc>dd {
        text-align: left;
        width: 100%;
        padding: 8px 0 5px 16px;
        line-height: 1.25;
    }
    dl.bloc>dd>dl dt {
        width: 33%;
    }
    dl.bloc>dd>dl dd {
        width: 60%;
    }
    dl.bloc dl {
        margin-top: 12px;
    }
    dl.bloc dd {
        font-size: 11pt;
    }
    table {
        width: 100%;
        padding: 0;
        border-spacing: 0px;
    }
    table tr {
        margin: 0;
        padding: 0;
        background: #fdfdfd;
        border-right: 1px solid #ddd;
        width: 100%;
    }
    table tr td,
    table tr th {
        border: 1px solid #e3e3e3;
        border-top: 1px solid #fff;
        border-left-color: #fff;
        font-size: 11pt;
        background: #fdfdfd;
    }
    table thead th {
        background: #e9e9e9;
        background: linear-gradient(to bottom, #f9f9f9, #e9e9e9) !important;
        font-weight: 300;
        letter-spacing: 1px;
        padding: 15px 0 5px;
        /*&:not(:last-child)*/
        border: none !important;
    }
    table tbody tr:last-child td {
        border-bottom: 1px solid #ddd;
    }
    table tbody td {
        min-width: 75px;
        padding: 3px 6px;
        line-height: 1.25;
    }
    table tfoot tr td {
        /*border 1px solid #e3e3e3
              border-top 1px solid white
              border-left-color #fff*/
        height: 40px;
        padding: 6px 0 0;
        color: #000;
        text-shadow: 0 0 1px rgba(0,0,0,0.25);
        font-family: 'Cambria', 'Raleway', sans-serif;
        font-weight: 400;
        letter-spacing: 1px;
    }
    table tfoot tr td:first-child {
        font-style: italic;
        color: #997b7b;
    }
    a {
        color: #992c2c;
    }
    a:hover {
        color: #b00;
    }
    @page {
        margin: 0.5cm;
    }
    /*** @media screen  ***/
    html,
    body {
        background: #333231;
    }
    header:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        border-top: 12px solid #333;
        border-left: 12px solid #ddd;
        width: 0;
        box-shadow: 1px 1px 2px rgba(0,0,0,0.18);
    }

</style>
<script type=\"text/javascript\">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe('pk_test_51IYAqkFZNE9gSdmYthjXiqNIFWR1IcniXYtbHNzbUi2eToJjE3CSxkpglgiirfBqvsisqZ7eUbcSU14bZWEY2Dl800ICFFSC6n');
    var checkoutButton = document.getElementById('checkout-button');

    checkoutButton.addEventListener('click', function() {
        // Create a new Checkout Session using the server-side endpoint you
        // created in step 3.
        fetch('/payment/create-checkout-session', {
            method: 'POST',
        })
            .then(function(response) {
                return response.json();
            })
            .then(function(session) {
                return stripe.redirectToCheckout({ sessionId: session.id });
            })
            .then(function(result) {
                // If redirectToCheckout fails due to a browser or network
                // error, you should display the localized error message to your
                // customer using error.message.
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "payment/Facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 75,  121 => 74,  117 => 73,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"UTF-8\"/>
    <title>Facture José Roux</title>
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:300|Raleway:200,300\" rel=\"stylesheet\" type=\"text/css\"/>
    <script src=\"https://js.stripe.com/v3/\"></script>
</head>
<body>
<header>
    <h1>FACTURE
        <h2>José Roux − Interactive Design</h2>
    </h1>
</header>
<section class=\"flex\">
    <dl>
        <dt>Facture #</dt>
        <dd>20140603</dd>
        <dt>Date de facturation</dt>
        <dd>03.06.2014</dd>
    </dl>
</section>
<section class=\"flex\">
    <dl class=\"bloc\">
        <dt>Facturé à:</dt>
        <dd>
            Company X &amp; Son Inc.<br>
            2789 Some street,<br>
            Big City, Québec, J3X 1J1
            <dl>
                <dt>Attn</dt>
                <dd>Le Big Boss</dd>
                <dt>Téléphone</dt>
                <dd>(450) 555-2663</dd>
                <dt>Courriel</dt>
                <dd>bigboss@bigcompanylonglongemail.com</dd>
            </dl>
        </dd>
    </dl>
    <dl class=\"bloc\">
        <dt>Description de service:</dt>
        <dd>Développement AIR</dd>
        <dt>Période totale:</dt>
        <dd>24 Mai au 2 Juin 2014</dd>
    </dl>
</section>
<table>
    <thead>
    <tr>
        <th>Période</th>
        <th>Description</th>
        <th>Nombre Pers</th>
        <th>Prix Unit</th>
        <th>Montant</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>24 Mai au 2 Juin</td>
        <td>Dévelopement du jeu Tomatina</td>
        <td>24&#8202;h</td>
        <td>20&#8202;\$/h</td>
        <td>480&#8202;\$</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan=\"3\">− Faire les chèques payable au nom de moi −</td>
        <td>Total:</td>
        <td>480&#8202;\$</td>
    </tr>

    <tr>

        <td colspan=\"2\"><button id=\"checkout-button\" href=\"{{ path('checkout') }}\">payer en ligne</button></td>
        <td colspan=\"1\"><a href=\"{{ path('PDF') }}\"><button>imprimer</button></a></td>
        <td colspan=\"2\"><button><a href=\"{{ path('payment') }}\">payer a la livraison</a> </button></td>

    </tr>



    </tfoot>
</table>
<footer>
    <p>Darguechi hela – Informatique − Développement WEB | <a href=\"http://joseroux.com\">hikerz.tn</a></p>
    <p>32 rue casa del papel manouba| Tél. 55029240 | <a href=\"mailto:oussema.abderrahmen@esprit.tn\">mail@me.com</a></p>
</footer>
</body>


<style>

    /*** @media all  ***/
    * {
        box-sizing: border-box;
    }
    html {
        height: 100%;
    }
    body {
        min-height: 100%;
        margin: 0;
        display: flex;
        flex-flow: column nowrap;
        justify-content: center;
        align-items: sretch;
        font: 12pt/1.5 'Raleway', 'Cambria', sans-serif;
        font-weight: 300;
        background: #fff;
        color: #666;
        -webkit-print-color-adjust: exact;
    }
    header {
        padding: 16px;
        position: relative;
        color: #888;
    }
    header h1,
    header h2 {
        font-weight: 200;
        margin: 0;
    }
    header h1 {
        font-size: 27pt;
        letter-spacing: 4px;
    }
    body > * {
        width: 100%;
        max-width: 7in;
        margin: 3px auto;
        background: #f0f0f0;
        text-align: center;
    }
    footer {
        padding: 16px;
    }
    footer p {
        font-size: 9pt;
        margin: 0;
        font-family: 'Nunito';
        color: #777;
    }
    section,
    table {
        padding: 8px 0;
        position: relative;
    }
    dl {
        margin: 0;
        letter-spacing: -4px;
    }
    dl dt,
    dl dd {
        letter-spacing: normal;
        display: inline-block;
        margin: 0;
        padding: 0px 6px;
        vertical-align: top;
    }
    dl.bloc > dt,
    dl:not(.bloc) dt:not(:last-of-type),
    dl:not(.bloc) dd:not(:last-of-type) {
        border-bottom: 1px solid #ddd;
    }
    dl:not(.bloc) dt {
        border-right: 1px solid #ddd;
    }
    dt {
        width: 49%;
        text-align: right;
        letter-spacing: 1px !important;
        overflow: hidden;
    }
    dd {
        width: 49%;
        text-align: left;
    }
    dd,
    tr>td {
        font-family: 'Nunito';
    }
    section.flex {
        display: flex;
        flex-flow: row wrap;
        padding: 8px 16px;
        justify-content: space-around;
    }
    dl.bloc {
        padding: 0;
        flex: 1;
        vertical-align: top;
        min-width: 240px;
        margin: 0 8px 8px;
    }
    dl.bloc>dt {
        text-align: left;
        width: 100%;
        margin-top: 12px;
    }
    dl.bloc>dd {
        text-align: left;
        width: 100%;
        padding: 8px 0 5px 16px;
        line-height: 1.25;
    }
    dl.bloc>dd>dl dt {
        width: 33%;
    }
    dl.bloc>dd>dl dd {
        width: 60%;
    }
    dl.bloc dl {
        margin-top: 12px;
    }
    dl.bloc dd {
        font-size: 11pt;
    }
    table {
        width: 100%;
        padding: 0;
        border-spacing: 0px;
    }
    table tr {
        margin: 0;
        padding: 0;
        background: #fdfdfd;
        border-right: 1px solid #ddd;
        width: 100%;
    }
    table tr td,
    table tr th {
        border: 1px solid #e3e3e3;
        border-top: 1px solid #fff;
        border-left-color: #fff;
        font-size: 11pt;
        background: #fdfdfd;
    }
    table thead th {
        background: #e9e9e9;
        background: linear-gradient(to bottom, #f9f9f9, #e9e9e9) !important;
        font-weight: 300;
        letter-spacing: 1px;
        padding: 15px 0 5px;
        /*&:not(:last-child)*/
        border: none !important;
    }
    table tbody tr:last-child td {
        border-bottom: 1px solid #ddd;
    }
    table tbody td {
        min-width: 75px;
        padding: 3px 6px;
        line-height: 1.25;
    }
    table tfoot tr td {
        /*border 1px solid #e3e3e3
              border-top 1px solid white
              border-left-color #fff*/
        height: 40px;
        padding: 6px 0 0;
        color: #000;
        text-shadow: 0 0 1px rgba(0,0,0,0.25);
        font-family: 'Cambria', 'Raleway', sans-serif;
        font-weight: 400;
        letter-spacing: 1px;
    }
    table tfoot tr td:first-child {
        font-style: italic;
        color: #997b7b;
    }
    a {
        color: #992c2c;
    }
    a:hover {
        color: #b00;
    }
    @page {
        margin: 0.5cm;
    }
    /*** @media screen  ***/
    html,
    body {
        background: #333231;
    }
    header:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        border-top: 12px solid #333;
        border-left: 12px solid #ddd;
        width: 0;
        box-shadow: 1px 1px 2px rgba(0,0,0,0.18);
    }

</style>
<script type=\"text/javascript\">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe('pk_test_51IYAqkFZNE9gSdmYthjXiqNIFWR1IcniXYtbHNzbUi2eToJjE3CSxkpglgiirfBqvsisqZ7eUbcSU14bZWEY2Dl800ICFFSC6n');
    var checkoutButton = document.getElementById('checkout-button');

    checkoutButton.addEventListener('click', function() {
        // Create a new Checkout Session using the server-side endpoint you
        // created in step 3.
        fetch('/payment/create-checkout-session', {
            method: 'POST',
        })
            .then(function(response) {
                return response.json();
            })
            .then(function(session) {
                return stripe.redirectToCheckout({ sessionId: session.id });
            })
            .then(function(result) {
                // If redirectToCheckout fails due to a browser or network
                // error, you should display the localized error message to your
                // customer using error.message.
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    });
</script>", "payment/Facture.html.twig", "C:\\wamp64\\www\\Prog-In-malek_dev\\templates\\payment\\Facture.html.twig");
    }
}
