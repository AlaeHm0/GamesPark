import React from "react"
import { Link } from "react-router-dom";

function Signup () {
  return (
    <div className="container auth-cintainer">
      <div className="auth-card">
        <div className="auth-card-head">
          <h1 className="text-center text-white">Sign Up</h1>
        </div>
        <form method="POST">
          <div className="input-container">
            <i className="fa fa-user"></i>
            <input type="text" placeholder="Nom Complet" />
          </div>
          <div className="input-container">
            <i className="fa fa-envelope"></i>
            <input type="email" placeholder="Email" />
          </div>
          <div className="input-container">
            <i className="fa fa-lock"></i>
            <input type="password" placeholder="Password" />
          </div>
          <div className="input-container">
            <i className="fa fa-check"></i>
            <input type="password" placeholder="Confirm password" />
          </div>
          <button type="submit" className="btn mt-4 form-control">Sign Up</button>
          <p>Deja un memebre? <Link to='/login'>Login</Link></p>
        </form>
      </div>
    </div>
  )
};

export default Signup;
