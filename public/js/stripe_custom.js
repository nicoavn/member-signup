
var stripe = Stripe('pk_test_gwvewrNaLqQ6R8XcuNU6Z89o00MTaQlUlC');
var elements = stripe.elements({
    fonts: [
        {
            cssSrc: "https://fonts.googleapis.com/css?family=Montserrat"
        }
    ]
});

var style =
    {
        base:
            {
                iconColor: '#666EE8',
                color: '#31325F',
                lineHeight: '44px',
                fontWeight: 600,
                fontFamily: 'Montserrat',
                fontSize: '14px',
                letterSpacing: "1px",
                '::placeholder':
                    {
                        color: '#a1a1a1',
                    },
            },
    };

var cardNumberElement = elements.create('cardNumber', {
    style: style
});
cardNumberElement.mount("#PaymentNumber");

var cardExpiryElement = elements.create('cardExpiry', {
    style: style
});
cardExpiryElement.mount('#PaymentExpires');

var cardCvcElement = elements.create('cardCvc', {
    style: style
});
cardCvcElement.mount('#PaymentCvc');

function setOutcome(result)
{
    var errorElement = document.querySelector('#PAYMENT_CARDNUMBER_ERR');
    errorElement.classList.remove('visible');

    if (result.token)
    {
        var form = document.querySelector("form");
        form.querySelector("input#PAYMENT_TOKEN").setAttribute("value", result.token.id);
        if( form.id=="HomeForm" )
            SubmitHomeForm();
        else
            SubmitForm();
    }
    else if (result.error)
    {
        errorElement.textContent = result.error.message;
        errorElement.classList.add('visible');
    }
}

var cardBrandToPfClass = {
    'visa': 'pf-visa',
    'mastercard': 'pf-mastercard',
    'amex': 'pf-american-express',
    'discover': 'pf-discover',
    'diners': 'pf-diners',
    'jcb': 'pf-jcb',
    'unknown': 'pf-credit-card',
}

function setBrandIcon(brand)
{
    var brandIconElement = document.getElementById('BrandCard');
    var pfClass = 'pf-credit-card';
    if (brand in cardBrandToPfClass)
    {
        pfClass = cardBrandToPfClass[brand];
    }
    else
    {
        pfClass = cardBrandToPfClass["unknown"];
    }
    brandIconElement.className = "pf "+pfClass;
}

cardNumberElement.on('change', function(event)
{
    if (event.brand)
    {
        setBrandIcon(event.brand);
    }
    setOutcome(event);
});

cardNumberElement.on('focus', function(event)
{
    GetLighted(cardNumberElement._parent);
});

cardNumberElement.on('blur', function(event)
{
    GetLighted(cardNumberElement._parent, 2);
});

cardExpiryElement.on('focus', function(event)
{
    GetLighted(cardExpiryElement._parent);
});

cardExpiryElement.on('blur', function(event)
{
    GetLighted(cardExpiryElement._parent, 2);
});

cardCvcElement.on('focus', function(event)
{
    GetLighted(cardCvcElement._parent);
});

cardCvcElement.on('blur', function(event)
{
    GetLighted(cardCvcElement._parent, 2);
});

function GetLighted(idE, status = 1)
{
    var Input = $(idE).closest(".StripeWrapper");
    Input.css("transition", "all 0s");
    if( status == 1 )
    {
        Input.css("border-color", "#32AC62");
        Input.css("outline", "1px solid #32AC62");
    }
    else
    {
        Input.css("border-color", "#e3e3e3");
        Input.css("outline", "0px");
    }
}

if( $("#MainForm").length > 0 )
{
    document.querySelector('#MainForm').addEventListener('submit', function(e) {
        e.preventDefault();
        stripe.createToken(cardNumberElement).then(setOutcome);
    });
}

if( $("#HomeForm").length > 0 )
{
    document.querySelector('#HomeForm').addEventListener('submit', function(e) {
        e.preventDefault();
        stripe.createToken(cardNumberElement).then(setOutcome);
    });
}


function SubmitHomeForm(form)
{
    var Formulario = $("#HomeForm");
    LoadingScheme();
    Formulario.data("border", "#e3e3e3");
    Formulario.data("element", ".InputWrapper");
    ResetForm(Formulario);
    var Form = Formulario;
    $.ajax({
        url: ajax+"Payment",
        type: "POST",
        data: Formulario.serialize(),
        dataType: "json",
        complete: function(data)
        {
            LoadingScheme(false);
        },
        success: function(data)
        {
            if( data.code!=1 )
            {
                ValidateCommon(data);
                return;
            }
            CAlert(data.msg, 2);
            Form.find("input:text").val("");
            $("#PAYMENT_AMOUNT").val("");
            cardNumberElement.clear();
            cardExpiryElement.clear();
            cardCvcElement.clear();
            var Monto = 0;
            $(".MontoToPay").html("$"+Monto.toFixed(2));
        },
        error: function(data)
        {
            CAlert("Unabled to validate the information.", 3);
        }
    });
}

function SubmitForm(form)
{
    var Formulario = $("#MainForm");
    LoadingScheme();
    Formulario.data("border", "#e3e3e3");
    Formulario.data("element", ".InputWrapper");
    ResetForm(Formulario);
    var Form = Formulario;
    $.ajax({
        url: ajax+"Pay",
        type: "POST",
        data: Formulario.serialize(),
        dataType: "json",
        complete: function(data)
        {
            LoadingScheme(false);
        },
        success: function(data)
        {
            if( data.code!=1 )
            {
                ValidateCommon(data);
                return;
            }
            CAlert(data.msg, 2);
            Form.find("input:text").val("");
            Form.find("select").val("null");
            Form.find("textarea").val("");
            var Monto = 0;
            $(".MontoToPay").html("$"+Monto.toFixed(2));
        },
        error: function(data)
        {
            CAlert("Unabled to validate the information.", 3);
        }
    });
}
