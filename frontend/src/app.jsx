import "./App.css";
import { Routes, Route } from "react-router-dom";
import Home from "./pages/Home";
import SignInPage from "./pages/SignInPage";
import SignUpPage from "./pages/SignUpPage";
import DashBoard from "./pages/DashBoard";
import Write from "./pages/Write";

function App() {
  return (
    <div className=" min-h-screen w-screen">
      <Routes>
        <Route path="/" element={<DashBoard />} />
        <Route path="/sign-in" element={<SignInPage />} />
        <Route path="/sign-up" element={<SignUpPage />} />
        <Route path="/welcome" element={<Home />} />
        <Route path="/write" element={<Write />} />
      </Routes>
    </div>
  );
}

export default App;
