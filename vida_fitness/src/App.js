import React from 'react';
import './App.css';
import './Components/Estilos.css';
import NavBar from './Components/NavBar';
import {Container} from '@material-ui/core';
import Page from './Components/Page';

function App() {

const config = {
  systemName: 'Vida Fitness'
}

  return (
    <div className="App">

        <header className="header">
          <NavBar systemName={config.systemName}/>
        </header>

      <Container maxWidth={'xl'}>
        <nav className="Nav">
          <Page/>
        </nav>
      </Container>

    </div>
  );
};

export default App;
