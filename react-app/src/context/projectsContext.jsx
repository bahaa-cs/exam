import axios from "axios"
import { createContext, useEffect, useState } from "react";

export const projectsContext = createContext();

const ProjectsProvider = ({children})=>{
    const [projects, setProjects] =useState([]);

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/projects")
        .then((response)=>{

            setProjects(response.data)
        }
        )
    },[])

    return(
        <projectsContext.Provider
        values={{
            projects: projects
        }}
        >
        {children}
      </projectsContext.Provider>
    )
}

export default ProjectsProvider;

