import "./App.css";
import { Route, Routes } from "react-router-dom";
import Main from "./pages/Main";
import Home from "./pages/Home";
import About from "./pages/About";
import Contact from "./pages/Contact";
import StudentLlist from "./pages/StudentLlist";
import TeacherList from "./pages/TeacherList";
function App() {
  return (
    <>
      <Routes>
        <Route path="/" element={<Main />}>
          <Route index element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
          <Route path="/studentlist" element={<StudentLlist />} />
          <Route path="/teacherlist" element={<TeacherList />} />
          
        </Route>
      </Routes>
    </>
  );
}

export default App;
