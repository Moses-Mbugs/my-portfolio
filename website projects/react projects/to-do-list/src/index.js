// React 18 syntax
import React from 'react';
import ReactDOM from 'react-dom/client'; // Import the createRoot from 'react-dom/client'
import App from './App';

const root = ReactDOM.createRoot(document.getElementById('root')); // Use createRoot instead
root.render(<App />);
