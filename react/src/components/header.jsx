import React from "react"
import { useStateContext} from '../config/context'; 
import { Link } from "react-router-dom";
function Header () {
    const { user, token } = useStateContext();
  return (
    <header>
        <nav className="navbar navbar-expand-sm">
            <a className="navbar-brand" href="#">Navbar</a>
            <button className="navbar-toggler" style={{marginRight : "20px"}} type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
              <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarNav" style={{position:'relative'}}>
              <ul className="navbar-nav me-auto">
                <li className="nav-item">
                  <Link to='/' className="nav-link">Home</Link>
                </li>
                <li className="nav-item">
                  <Link to='/about' className="nav-link">About</Link>
                </li>
                <li className="nav-item">
                  <Link to='/contact' className="nav-link">Contact</Link>
                </li>
                <li className="nav-item">
                  <Link to='/reserver' className="nav-link">Reserver</Link>
                </li>
              </ul>
                  {!token ? <div style={{marginRight : '20px'}}>
                    <Link to='/login' id="signupBtn" className="btn">Login</Link>
                    <Link to='/signup' id="loginBtn" className="btn">Registre</Link></div>
                   : <div className="actions">
                    <img src={user.image} alt="" />
                    <p>{user.username}</p>
                   </div>}
              
            </div>
          </nav>
    </header>
  )
};

export default Header;
