import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { defaultCipherList } from 'constants';


const FormInput = (props) =>{
    return (
        <div className="form-group">
            <label htmlFor="name">{props.label}</label>
            <input type={props.type} className="form-control" name={props.name}  id={props.id}  value={props.value} onChange={props.handleChange}   />
        </div>
    )      
}

export default FormInput;