// src/App.js
import React from 'react';
import './styles/style.css';
import TodoList from './components/TodoList';

function App() {
  return (
    <div className="App">
      <h1>To Do List </h1>
      <TodoList />
    </div>
  );
}

export default App;
