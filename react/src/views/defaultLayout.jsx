import React from "react"
import { Outlet } from "react-router-dom";
import Header from "../components/header";
import Footer from "../components/footer";
import { useStateContext } from "../config/context";

function DefaultLayout () {
  const { notification } = useStateContext()
  
    return (
    <div>
      <Header />
      <div className="main">
      <Outlet />
      </div>
      <Footer />
      { notification && <div className="alert alert-info notification">
            {notification}
            </div>}
    </div>
  )
};

export default DefaultLayout;
