// import { useState } from 'react'
// import "./Details.css"
export default function Details() {
  let costs = {
    startLocation: 'Berrechid',
    destination: 'Casablanca',
    pkgtype: 'Fragile'
  };
  const { startLocation, destination, pkgtype } = costs;
  const total = 100;
  return (<div className="mt-3 text-center form-control ">
    <h3 className=''>Summary</h3>
    <hr />
    <ul className="list-group">
      <li className='list-group-item'>Start Location :{startLocation}</li>
      <li className='list-group-item'>Destination : {destination}</li>
      <li className='list-group-item'>Package type: {pkgtype}</li>
      <li className='list-group-item'>Weight : 50kg</li>
      <li className='list-group-item'>Assurance: </li>
    </ul>
    <ul className="list-group">
      <li className="list-group-item">
        Total ={total} DH
      </li>
    </ul>
  </div>
  )
}
