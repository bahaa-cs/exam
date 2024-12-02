import { BrowserRouter, Route, Routes } from "react-router-dom";
// import "./App.css";
import ProjectsProvider from "./context/ProjectsContext";
import Projects from "./pages/Projects";

const App=()=> {
  return (
    <div className="App">
      
        <BrowserRouter>
          <ProjectsProvider>
            <Routes>
              <Route path="/projects" element={<Projects />} />
            </Routes>
          </ProjectsProvider>
        </BrowserRouter>
      
    </div>
  );
}

export default App;
