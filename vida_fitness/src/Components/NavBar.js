import React from 'react';
import Logo from './Logo';

const NavBar = (props) => {
    return (
        <div>
            <Logo systemName={props.systemName}/>
        </div>
    );
};

export default NavBar;