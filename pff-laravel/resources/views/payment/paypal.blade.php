<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Payment with Paypal</title>
    <link rel="stylesheet" href={{ asset('css/payment.css') }}>
</head>

<body>
    {{-- 
      <h2>Pack Name</h2>
      <h4>Delivery price :  20 MAD</h4>
      <form action={{ route('payment.paypal') }} method="POST">
        @csrf 
        <input type="hidden" name="price" value="20">
        <button type="submit">Checkout</button>
    </form>
    --}}


    <h1>Choose Payment</h1>
    <p id="choosen-paymenttype">Credit Card</p>
    <ul class="payment-types">
        <li class="paymenttype pp unselected-left">
            <div class="box">
                <header>
                    <div class="card" id="pp-card">
                        <div class="flipper">
                            <div class="front">
                                <div class="shine"></div>
                                <div class="shadow"></div>
                                <div class="card-bg">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/513985/pp-front-bg.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <form>
                    <div class="form-content">
                        <p><strong>About</strong></p>
                        <p>This is a basic concept for a payment, checkout process. The user can select between the
                            different payment types, each type has a seperate form to fill in the required data for the
                            transaction. What I tried to provide:</p>
                        <ul>
                            <li>A quick and easy way to fill the required form fields.</li>
                            <li>Mobile friendly keyboard display</li>
                            <li>Disabling auto-correction and spellcheck for names</li>
                            <li>Avoid dropdown fields for a better UX.</li>
                        </ul>
                    </div>
                </form>
            </div>
        </li>
        <li class="paymenttype selected cc">
            <div class="box">
                <header>
                    <div class="card" id="cc-card">
                        <div class="flipper">
                            <div class="front">
                                <div class="shine"></div>
                                <div class="shadow"></div>
                                <div class="card-bg">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/513985/cc-front-bg.png" />
                                </div>
                                <div class="card-content">
                                    <div class="credit-card-type"></div>
                                    <div class="card-number">
                                        <span>1234 1234 1234 1234</span>
                                        <span>1234 1234 1234 1234</span>
                                    </div>
                                    <div class="card-holder">
                                        <em>Card holder</em>
                                        <span>Your Name</span>
                                        <span>Your Name</span>
                                    </div>
                                    <div class="validuntil">
                                        <em>Expire</em>
                                        <div class="e-month">
                                            <span>
                                                MM
                                            </span>
                                            <span>
                                                MM
                                            </span>
                                        </div>
                                        <div class="e-divider">
                                            <span>
                                                /
                                            </span>
                                            <span>
                                                /
                                            </span>
                                        </div>
                                        <div class="e-year">
                                            <span>
                                                YY
                                            </span>
                                            <span>
                                                YY
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="back">
                                <div class="shine"></div>
                                <div class="shadow"></div>
                                <div class="card-bg">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/513985/cc-back-bg-new.png" />
                                </div>
                                <div class="ccv">
                                    <em>CCV Number</em>
                                    <strong></strong>
                                </div>
                                <div class="card-content">
                                    <div class="card-number">
                                        <span>4111 1111 1111 1111</span>
                                        <span>4111 1111 1111 1111</span>
                                    </div>
                                    <div class="card-holder">
                                        <span>Your Name</span>
                                        <span>Your Name</span>
                                    </div>
                                    <div class="validuntil">
                                        <span>
                                            <strong class="e-month">MM</strong> / <strong class="e-year">YY</strong>
                                        </span>
                                        <span>
                                            <strong class="e-month">MM</strong> /
                                            <strong class="e-year">YY</strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <form>
                    <div class="form-content">
                        <div class="field">
                            <input type="tel" id="cardnumber" maxlength="20" />
                            <span class="focus-bar"></span>
                            <label for="cardnumber">Card number</label>
                        </div>
                        <div class="field">
                            <input type="text" autocorrect="off" spellcheck="false" id="cardholder" maxlength="25" />
                            <span class="focus-bar"></span>
                            <label for="cardholder">Card holder (Name on card)</label>
                        </div>
                        <div class="field-group">
                            <div class="col-50">
                                <label for="expires-month">Expire (Valid until)</label>
                                <div class="field expire-date">
                                    <div>
                                        <input type="tel" id="expires-month" placeholder="MM"
                                            allowed-pattern="[0-9]" maxlength="2">
                                        <span class="focus-bar"></span>
                                    </div>
                                    <div class="divider">/</div>
                                    <div>
                                        <input type="tel" id="expires-year" placeholder="YY" allowed-pattern="[0-9]"
                                            maxlength="2">
                                        <span class="focus-bar"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-50">
                                <div class="field ccv">
                                    <input type="tel" id="ccv" autocomplete="off" maxlength="3" />
                                    <span class="focus-bar"></span>
                                    <label for="ccv">CCV</label>
                                </div>
                            </div>
                        </div>
                        <button><span>Submit</span></button>
                    </div>
                </form>
            </div>
        </li>

        <script src="{{ asset('js/payment.js') }}"></script>
</body>

</html>
