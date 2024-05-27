import { createContext, useContext, useState } from "react";

const StateContext = createContext({
    user : null,
    token : null,
    notification : null,
    setUser : () => {},
    setToken : () => {},
    setNotification : () => {}
})

export const ContextProvider = ({children}) => {
    const [user, setUser] = useState({})
    const [token, _setToken] = useState(null)
    const [notification, _setNotification] = useState('')

    const setToken = token => {
        _setToken(token)
        if(token){
            localStorage.setItem('ACCESS_TOKEN', token)
        }else{
            localStorage.removeItem('ACCESS_TOKEN')
        }
    }
    
    const setNotification = msg => {
        _setNotification(msg)
        setTimeout(() => {
            _setNotification('')
        },5000)
    }
    return (
        <StateContext.Provider value={{
            user,
            token,
            notification,
            setUser,
            setToken,
            setNotification
        }}>
            {children}
        </StateContext.Provider>
    )
}

export const useStateContext = () => useContext(StateContext);