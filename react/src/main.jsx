import React from 'react'
import ReactDOM from 'react-dom/client'
import { ContextProvider } from './config/context.jsx';
import router from './config/router.jsx';
import { RouterProvider } from 'react-router-dom';
import './App.css'
import Home from './components/home.jsx';
ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <ContextProvider>
      <RouterProvider router={router} />
    </ContextProvider>
  </React.StrictMode>,
)
