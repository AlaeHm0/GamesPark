import React from "react"
import { Link } from 'react-router-dom';
function Login () {
  return (
    <div className="container auth-container">
      <div className="auth-card">
        <div className="auth-card-head">
        <h1 className="text-center text-white">Login</h1>
        </div>
        <form method="POST">
            <div className="input-container">
                <i className="fa fa-user"></i>
                <input type="email" placeholder="Email" />
            </div>
            <div className="input-container">
                <i className="fa fa-lock"></i>
                <input type="password" placeholder="Password" />
            </div>
            <a className="text-left">Forget password?</a>
            <button type="submit" className="btn form-control">Login</button>
            <p>Pas un membre? <Link to='/signup'>Signup</Link> </p>
        </form>
      </div>
    </div>
  )
};

export default Login;
