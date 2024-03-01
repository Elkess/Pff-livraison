import { useState } from "react";
import Cards from 'react-credit-cards';
import 'react-credit-cards/es/styles-compiled.css';
export default function Form() {
    // const [cardData, setCardData] = useState({});
    const [number, setNumber] = useState('');
    const [name, setName] = useState('');
    const [expiry, setExpiry] = useState('');
    const [cvc, setCvc] = useState('');
    const [focus, setFocus] = useState('');
    return (<div className="form-control w-50  text-center mt-3">
        <h3><b>Payment Methods</b></h3>
        <hr />
        <div className="mb-3">
            <Cards name={name} expiry={expiry} cvc={cvc} number={number} focused={focus} />
        </div>
        <form className="d-grid form-control col-md-6">
            <input className="form-control mt-3" onFocus={(e) => { setFocus(e.target.name) }}
                type='tel' name='number' placeholder='Card Number' value={number} onChange={(e) => { setNumber(e.target.value) }} />
            <input className="form-control mt-3" onFocus={(e) => { setFocus(e.target.name) }}
                type='text' name='name' placeholder='Full Name' value={name} onChange={(e) => { setName(e.target.value) }} />
            <input className="form-control mt-3" onFocus={(e) => { setFocus(e.target.name) }}
                type='text' name='expiry' placeholder='MM/YY' value={expiry} onChange={(e) => { setExpiry(e.target.value) }} />
            <input className="form-control mt-3" onFocus={(e) => { setFocus(e.target.name) }}
                type='text' name='cvc' placeholder='CVC' value={cvc} onChange={(e) => { setCvc(e.target.value) }} />
            <button className="btn btn-primary" type="submit">Payer</button>
        </form>
    </div>
    )
}
