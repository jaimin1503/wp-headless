import { Link } from "react-router-dom";
import writeLogo from "./assets/write.svg";
import bellLogo from "./assets/bell.svg";
import { useState } from "react";
import ProfileCard from "./ProfileCard";

export default function NavLogged() {
  const [open, setOpen] = useState(false);

  const handleOnClick = (newOpen) => {
    setOpen(newOpen);
  };

  return (
    <div>
      <nav>
        <ul className=" flex justify-between border-b">
          <div className="left">
            <h1 className=" text-3xl font-bold py-2 pl-5 sm:pl-20">Bloggie</h1>
          </div>
          <div className="right flex text-sm mr-5 sm:mr-20 items-center">
            <Link to={"/write"} className=" flex items-center">
              <img src={writeLogo} alt="write" />
              <p className=" font-light pl-2">Write</p>
            </Link>
            <div className=" ml-5">
              <img src={bellLogo} alt="notification" />
            </div>
            <div
              onClick={() => handleOnClick(!open)}
              className="relative inline-flex items-center justify-center cursor-pointer overflow-hidden bg-pink-400 rounded-full w-9 h-9 ml-5"
            >
              <span className="text-lg font-medium text-white">J</span>
            </div>
          </div>
        </ul>
      </nav>
      {open && (
        <div className=" absolute right-0 m-2">
          <ProfileCard />
        </div>
      )}
    </div>
  );
}
