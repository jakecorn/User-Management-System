import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import FormInput from './FormInput';

export default class Form extends Component {

    constructor(props) {
        super(props);
        this.state = {     
            name:           props.name,
            username:       props.username,
            email:           props.email,
            contact_number: props.contact_number,
            address:        props.address
        }
        if(this.props.length>0){
            console.log(this.props)
            this.state = {     
                name:           this.props['name'],
                username:       this.props['username'],
                email:          this.props['email'],
                contact_number: this.props['contact_number'],
                address:        this.props['address']
            }
        }
        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(e) {
        let value = e.target.value;
        let input = e.target.name;
        
        switch(input) {
            case "name":
                this.setState({name:value});
                break;
            case "username":
                this.setState({username:value});
                break;
            case "email":
                this.setState({email:value});
                break;
            case "contact_number":
                this.setState({contact_number:value});
                break;
            case "address":
                this.setState({address:value});
                break;
        }
    }

    render() {
        return (            
            <div className="form">
                <FormInput type="text" name="name" id="name" label="Name" value={this.state.name}  handleChange={this.handleChange} />
                <FormInput type="text" name="username" id="username" label="Username" value={this.state.username}  handleChange={this.handleChange} />
                <FormInput type="email" name="email" id="email" label="Email" value={this.state.email}  handleChange={this.handleChange} />
                <FormInput type="text" name="contact_number" id="contact_number" label="Contact Number" value={this.state.contact_number}  handleChange={this.handleChange} />
                <FormInput type="text" name="address" id="address" label="Address" value={this.state.address}  handleChange={this.handleChange} />
            </div>
        );
    }
}

if (document.getElementById('registrationForm')) {
    var component = document.getElementById("registrationForm");
    var data_input =JSON.parse(component.getAttribute("data-input"));
    const props = Object.assign({}, data_input);
    ReactDOM.render(<Form {...props}/>, component);
}

if (document.getElementById('updateForm')) {
    var component = document.getElementById("updateForm");
    const props = Object.assign({}, component.dataset);
    ReactDOM.render(<Form {...props}/>, component);
}
