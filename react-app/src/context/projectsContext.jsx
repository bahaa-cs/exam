import { createContext, useEffect, useState } from "react";

export const projectsContext = createContext();

const projectsProvider = ({children})=>{
    return(
        <projectsContext.Provider>
        {children}
      </projectsContext.Provider>
    )
}

export default projectsProvider;

