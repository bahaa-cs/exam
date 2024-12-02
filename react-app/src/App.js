import { BrowserRouter, Route, Routes } from "react-router-dom";
import "./App.css";
import projectsProvider from "./context/projectsContext";
import Projects from "./pages/Projects";

function App() {
  return (
    <div className="App">
      
        <BrowserRouter>
          <projectsProvider>
            <Routes>
              <Route path="/projects" element={<Projects />} />
            </Routes>
          </projectsProvider>
        </BrowserRouter>
      
    </div>
  );
}

export default App;
