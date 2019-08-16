import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Swal from 'sweetalert2'
import withReactContent from 'sweetalert2-react-content'

export default class User extends Component {

    constructor(props) {
        super(props);
        this.state = {     
            name:           props.name,
            username:       props.username,
            email:           props.email,
            contact_number: props.contact_number,
            address:        props.address
        }
    }

    deleteUser (e){
        var route = e.target.getAttribute("url");
        Swal.fire({
            title: 'Are you sure?',
            text: "You wan't to delete this record?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                window.location = route;
            }
        });
    }

    createTable (){
        let tr = [];
        var props_array = this.props;

        for(var i in props_array) {
                tr.push(
                    <tr key={props_array[i]['name']}>
                        <td>{props_array[i]['name']}</td>
                        <td>{props_array[i]['username']}</td>
                        <td>{props_array[i]['email']}</td>
                        <td>{props_array[i]['contact_number']}</td>
                        <td>{props_array[i]['address']}</td>
                        <td className="action">
                            <a className="btn btn-success" href={props_array[i]['updateUser']}>Update</a>
                            <button className="btn btn-danger" url={props_array[i]['delete']} onClick={this.deleteUser}>Delete</button>
                        </td>
                    </tr>
                );
        }
        return tr;
    }

    render() {
        return (
            <table className="table table-bordered">                
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>Action</th>
                        </tr>
                </thead>
                <tbody>
                    {this.createTable()}
                </tbody>
            </table>
        );
    } 
}
 
if (document.getElementById('user_list')) {
    var component = document.getElementById("user_list");
    var user_array =JSON.parse(component.getAttribute("data-user-list"));
    const props = Object.assign({}, user_array);
    ReactDOM.render(<User {...props}/>, component);
}
