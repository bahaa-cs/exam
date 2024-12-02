import { BrowserRouter, Route, Routes } from "react-router-dom";
import "./App.css";
import Projects from "./pages/Projects";
import projectsProvider from "./context/projectsContext";

function App() {
  return (
    <div className="App">
      <projectsProvider>
        <BrowserRouter>
          <Routes>
            <Route path="/projects" element={<Projects />} />
          </Routes>
        </BrowserRouter>
      </projectsProvider>
    </div>
  );
}

export default App;
