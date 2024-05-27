import { createBrowserRouter } from "react-router-dom";
import Home from "../components/home";
import About from "../components/about";
import DefaultLayout from "../views/defaultLayout";
import Contact from "../components/contact";
import Reserver from "../components/reserver";
import Login from "../components/login";
import Signup from "../components/signup";



const router = createBrowserRouter([
  {
    path : '/',
    element : <DefaultLayout />,
    children : [
        {
            path : '/',
            element : <Home />
        },
        {
            path : '/about',
            element : <About />
        },
        {
            path : '/contact',
            element : <Contact />
        },
        {
            path : '/reserver',
            element : <Reserver />
        },
        {
            path : '/login',
            element : <Login />
        },
        {
            path : '/signup',
            element : <Signup />
        },
        

    ]
  }  
])
export default router;