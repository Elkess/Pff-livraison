import { useState } from "react";
import Cards from 'react-credit-cards';
import 'react-credit-cards/es/styles-compiled.css';
import './form.module.css'
export default function Form() {
    // const [cardData, setCardData] = useState({});
    const [number, setNumber] = useState('');
    const [name, setName] = useState('');
    const [expiry, setExpiry] = useState('');
    const [cvc, setCvc] = useState('');
    const [focus, setFocus] = useState('');

    return (<span>
        <h3><b>Payment Methods</b></h3>
        <div id="form-radio">
            <label>
                <input type='radio' />
                Debit Or Credit Card
            </label>
            <label>
                <input type='radio' />
                Paypal
            </label>
                </div>
            <Cards name={name} expiry={expiry} cvc={cvc} number={number} focused={focus} />
            <form>
                <input onFocus={(e) => { setFocus(e.target.name) }}
                    type='tel' name='number' placeholder='playehold'
                    value={number} onChange={(e) => { setNumber(e.target.value) }} />
                <input onFocus={(e) => { setFocus(e.target.name) }}
                    type='text' name='name' placeholder='name'
                    value={name} onChange={(e) => { setName(e.target.value) }} />
                <input onFocus={(e) => { setFocus(e.target.name) }}
                    type='text' name='expiry' placeholder='MM/YY'
                    value={expiry} onChange={(e) => { setExpiry(e.target.value) }} />
                <input onFocus={(e) => { setFocus(e.target.name) }}
                    type='text' name='cvc' placeholder='CVC'
                    value={cvc} onChange={(e) => { setCvc(e.target.value) }} />
            </form>
    </span>
    )
}
