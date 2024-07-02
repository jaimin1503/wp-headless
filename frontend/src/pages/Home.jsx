import { useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";
import Navbar from "../components/Navbar";

export default function Home() {
  useEffect(() => {
    axios
      .get(`${import.meta.env.VITE_BASE_URL}/posts`)
      .then((res) => console.log(res.data));
  });
  return (
    <div className=" w-screen min-h-screen bg-[#FFF8DB]">
      <Navbar />
      <h1 className=" text-4xl font-bold">Home</h1>
      <Link to={"/signup"}>Signup</Link>
    </div>
  );
}
